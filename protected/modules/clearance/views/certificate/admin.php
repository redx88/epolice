<?php
/* @var $this ClearanceController */
/* @var $model Clearance */

$this->breadcrumbs=array(
	'Clearances'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Clearance', 'url'=>array('index')),
	array('label'=>'Create Clearance', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clearance-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Clearances</h1>

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

<?php /*$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'clearance-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
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
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); */?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'clearance-grid',
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
	'htmlOptions'=>array('class'=>'grid-view padding0'),
	//'rowHtmlOptionsExpression' => 'array("title" => "Click to view request", "class"=>"link-hand ".$data->status["class"])',
	//'rowHtmlOptionsExpression' => 'array("title"=>"Click on Request Reference Number to view details", "class"=>$data->status["class"])',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'station_id',
		'applicant_id',
		'clearance_no',
		'purpose',
		'or_number',
		/*array(
			'name'=>'requestRefNum',
			'type'=>'raw',
			'value'=>'Chtml::link($data->requestRefNum,Yii::app()->Controller->createUrl("request/view",array("id"=>$data->id)))',
			'htmlOptions'=>array('title'=>'Click to view details', 'style'=>'font-weight:bold;')
		),
		array(
				'name'=>'requestDate',
				'value'=>'date("Y-m-d", strtotime($data->requestDate))',
    			'htmlOptions' => array('style' => 'width: 75px; text-align: right; padding-right: 25px;'),
			),
		array( 
				'name'=>'customer_search', 
				'value'=>'$data->customer->customerName',
				'htmlOptions' => array('style' => 'width: 300px; text-align: left; ')
		),
		array(
				'name'=>'total',
				'value'=>'Yii::app()->format->formatNumber($data->total)',
				'type'=>'raw',
    			'htmlOptions' => array('style' => 'text-align: right; padding-right: 25px;'),
			),
		array(
				'name'=>'reportDue',
    			'htmlOptions' => array('style' => 'text-align: right; padding-right: 25px;'),
			),
		array(
			'name'=>'paymentStatus',
			'type'=>'raw',
			'filter'=>false,
			'value'=> function($data){
					$paymentStatus=$data['paymentStatus'];
					return CHtml::link(
						'<span class="'.$paymentStatus['class'].'">'.$paymentStatus['label'].'</span>',
						'javascript:void(0)',
						array(
							'id'=>$data['id'],
							'onclick'=>"js:{ viewPaymentDetail({$data['id']}); $('#dialogPaymentDetails').dialog('open');}",
						)
					);
				},
			'htmlOptions'=>array('style'=>'text-align:center','title'=>'Click to view payment details'),
		),
		array(
				'name'=>'cancelled',
				'filter'=>CHtml::listData(array(
								array('index'=>'0', 'name'=>'No'),
								array('index'=>'1', 'name'=>'Yes'),
							), 
							'index', 'name'),
    			'htmlOptions' => array('style' => 'text-align: center;'),
			),*/
		array(
			//'class'=>'CButtonColumn',
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view} {update}'
		),
	),
	'selectableRows'=>1,
	//'selectionChanged'=>'function(id){location.href = "'.$this->createUrl('request/view/id').'/"+$.fn.yiiGridView.getSelection(id);}',
)); ?>