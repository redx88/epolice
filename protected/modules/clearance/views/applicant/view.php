<?php
/* @var $this ApplicantController */
/* @var $model Applicant */

$this->breadcrumbs=array(
	'Applicants'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Applicant', 'url'=>array('index')),
	array('label'=>'Create Applicant', 'url'=>array('create')),
	array('label'=>'Update Applicant', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Applicant', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Applicant', 'url'=>array('admin')),
);
?>

<h1>View Applicant #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'firstname',
		'middlename',
		'lastname',
		'dateofbirth',
		'civilstatus',
		'address',
	),
)); ?>
