<?php

class CertificateController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		/*return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);*/
		return array('rights');
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Certificate;
		$applicant=new Applicant;
		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model,$applicant);
		// $this->performAjaxValidation($applicant);

		if(isset($_POST['Certificate'] , $_POST['Applicant']))
		{
			
			$model->attributes=$_POST['Certificate'];
			$applicant->attributes=$_POST['Applicant'];
			
			//conhverting some of date into strtotime of type integer
			$applicant->dateofbirth = strtotime($applicant->dateofbirth);
			$model->residentcertdateissued = strtotime($model->residentcertdateissued);

			$valid = $model->validate();
			$valid = $applicant->validate() && $valid;

			//autogenerate the certificate here
			//also assign the station in certificate-> station

			 if($valid){
				if($applicant->save()){
					$model->applicant_id = $applicant->id;
					if($model->save()){
						$this->redirect(array('view','id'=>$model->id));
					}
				}
			}
		}

		//convert back the int to datee
		//conhverting some of date into strtotime of type integer
			$applicant->dateofbirth = date("Y-m-d",$applicant->dateofbirth);
			$model->residentcertdateissued = date("Y-m-d",$model->residentcertdateissued);

		$this->render('create',array(
			'model'=>$model,
			'applicant'=>$applicant,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=new Certificate;
		$applicant=Applicant::model()->findByPk($id);
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model,$applicant);



		//$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Certificate'] , $_POST['Applicant']))
		{
			
			$model->attributes=$_POST['Certificate'];
			//$applicant->attributes=$_POST['Applicant'];
			
			//conhverting some of date into strtotime of type integer
			$applicant->dateofbirth = strtotime($applicant->dateofbirth);
			$model->residentcertdateissued = strtotime($model->residentcertdateissued);

			$valid = $model->validate();
			//$valid = $applicant->validate() && $valid;

			//autogenerate the certificate here
			//also assign the station in certificate-> station

			 if($valid){
				// if($applicant->save()){
				 	$model->applicant_id = $applicant->id;
					if($model->save()){
						$this->redirect(array('view','id'=>$model->id));
					}
				//}
			}
		}

		$applicant->dateofbirth = date("Y-m-d",$applicant->dateofbirth);
		$model->residentcertdateissued = date("Y-m-d",$model->residentcertdateissued);

		$this->render('update',array(
			'model'=>$model,
			'applicant'=>$applicant,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Certificate');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Certificate('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Certificate']))
			$model->attributes=$_GET['Certificate'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Certificate the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Certificate::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Certificate $model the model to be validated
	 */
	protected function performAjaxValidation($model,$applicant)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='certificate-form')
		{
			echo CActiveForm::validate(array($model,$applicant));
			Yii::app()->end();
		}
	}
}
