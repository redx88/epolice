<?php
/* @var $this StationController */
/* @var $model Station */

$this->breadcrumbs=array(
	'Stations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Station', 'url'=>array('index')),
	array('label'=>'Create Station', 'url'=>array('create')),
	array('label'=>'Update Station', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Station', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Station', 'url'=>array('admin')),
);
?>

<h1>View Station #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'name',
		'address',
	),
)); ?>
