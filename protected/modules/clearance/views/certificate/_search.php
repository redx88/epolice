<?php
/* @var $this ClearanceController */
/* @var $model Clearance */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'station_id'); ?>
		<?php echo $form->textField($model,'station_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'applicant_id'); ?>
		<?php echo $form->textField($model,'applicant_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clearance_no'); ?>
		<?php echo $form->textField($model,'clearance_no',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purpose'); ?>
		<?php echo $form->textField($model,'purpose',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'or_number'); ?>
		<?php echo $form->textField($model,'or_number',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'investigator_id'); ?>
		<?php echo $form->textField($model,'investigator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'officer_id'); ?>
		<?php echo $form->textField($model,'officer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'findings'); ?>
		<?php echo $form->textField($model,'findings',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'residentcertnumber'); ?>
		<?php echo $form->textField($model,'residentcertnumber',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datefiled'); ?>
		<?php echo $form->textField($model,'datefiled'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->