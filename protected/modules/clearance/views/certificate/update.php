<?php
/* @var $this ClearanceController */
/* @var $model Clearance */

$this->breadcrumbs=array(
	'Clearances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clearance', 'url'=>array('index')),
	array('label'=>'Create Clearance', 'url'=>array('create')),
	array('label'=>'View Clearance', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Clearance', 'url'=>array('admin')),
);
?>

<h1>Update Clearance <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>