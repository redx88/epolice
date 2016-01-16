<?php
/* @var $this ClearanceController */
/* @var $model Clearance */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clearance-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'station_id'); ?>
		<?php echo $form->textField($model,'station_id'); ?>
		<?php echo $form->error($model,'station_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'applicant_id'); ?>
		<?php echo $form->textField($model,'applicant_id'); ?>
		<?php echo $form->error($model,'applicant_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clearance_no'); ?>
		<?php echo $form->textField($model,'clearance_no',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'clearance_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purpose'); ?>
		<?php echo $form->textField($model,'purpose',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'purpose'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'or_number'); ?>
		<?php echo $form->textField($model,'or_number',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'or_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'investigator_id'); ?>
		<?php echo $form->textField($model,'investigator_id'); ?>
		<?php echo $form->error($model,'investigator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officer_id'); ?>
		<?php echo $form->textField($model,'officer_id'); ?>
		<?php echo $form->error($model,'officer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'findings'); ?>
		<?php echo $form->textField($model,'findings',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'findings'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'residentcertnumber'); ?>
		<?php echo $form->textField($model,'residentcertnumber',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'residentcertnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datefiled'); ?>
		<?php echo $form->textField($model,'datefiled'); ?>
		<?php echo $form->error($model,'datefiled'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->