<?php
/* @var $this ClearanceController */
/* @var $model Clearance */

$this->breadcrumbs=array(
	'Clearances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clearance', 'url'=>array('index')),
	array('label'=>'Manage Clearance', 'url'=>array('admin')),
);
?>

<h1>Create Clearance</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>