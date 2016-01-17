<?php
/* @var $this CertificateController */
/* @var $model Certificate */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Certificate', 'url'=>array('index')),
	array('label'=>'Create Certificate', 'url'=>array('create')),
	array('label'=>'Update Certificate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Certificate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Certificate', 'url'=>array('admin')),
);
?>

<h1>View Certificate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'station_id',
		'applicant_id',
		'certificate_no',
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
