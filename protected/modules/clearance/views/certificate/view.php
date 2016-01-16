<?php
/* @var $this ClearanceController */
/* @var $model Clearance */

$this->breadcrumbs=array(
	'Clearances'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Clearance', 'url'=>array('index')),
	array('label'=>'Create Clearance', 'url'=>array('create')),
	array('label'=>'Update Clearance', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Clearance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clearance', 'url'=>array('admin')),
);
?>

<h1>View Clearance #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'station_id',
		'applicant_id',
		'clearance_no',
		'purpose',
		'or_number',
		'investigator_id',
		'officer_id',
		'findings',
		'residentcertnumber',
		'amount',
		'datefiled',
	),
)); ?>
