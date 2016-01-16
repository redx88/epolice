<?php
/* @var $this CertificateController */
/* @var $model Certificate */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Certificate', 'url'=>array('index')),
	array('label'=>'Create Certificate', 'url'=>array('create')),
	array('label'=>'View Certificate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Certificate', 'url'=>array('admin')),
);
?>

<h1>Update Certificate <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>