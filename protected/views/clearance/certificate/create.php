<?php
/* @var $this CertificateController */
/* @var $model Certificate */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Certificate', 'url'=>array('index')),
	array('label'=>'Manage Certificate', 'url'=>array('admin')),
);
?>

<h1>Create Certificate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>