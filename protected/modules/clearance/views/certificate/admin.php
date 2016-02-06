<?php
/* @var $this CertificateController */
/* @var $model Certificate */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Certificate', 'url'=>array('index')),
	array('label'=>'Create Certificate', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#certificate-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Certificates</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'certificate-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'id',
		// 'station_id',
		// 'applicant_id',
		// 'certificate_no',
		array(
	        'class'=>'CLinkColumn',
	        'label'=>'<i class="btn btn-success bnt-small">renew</i>',
	        'urlExpression'=>'Yii::app()->createUrl("clearance/certificate/update",array("id"=>$data->applicant->id))',
	        //'header'=>'Renew'
	      ),
		array(
			'name'=>'user_searchl',
			'header'=>'Lastname',
			//'value'=>'$data->applicant->lastname.", ".$data->applicant->firstname." ".$data->applicant->middlename',
			'value'=>'$data->applicant->lastname',
			),
		array(
			'name'=>'user_searchf',
			'header'=>'Firstname',
			//'value'=>'$data->applicant->lastname.", ".$data->applicant->firstname." ".$data->applicant->middlename',
			'value'=>'$data->applicant->firstname',
			),
		array(
			'name'=>'user_searchm',
			'header'=>'Middlename',
			//'value'=>'$data->applicant->lastname.", ".$data->applicant->firstname." ".$data->applicant->middlename',
			'value'=>'$data->applicant->middlename',
			),
		array(
			'header'=>'Address',
			'value'=>'$data->applicant->address',
			),
		'purpose',
		'daterelease',
		//'or_number',
		/*
		'investigator_id',
		'officer_id',
		'findings',
		'residentcertnumber',
		'amount',
		'datefiled',
		*/
		array(
		    'class'=>'CButtonColumn',
			'template'=>'{view}',
		),
	),
)); ?>
