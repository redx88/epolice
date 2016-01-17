<?php
/* @var $this CertificateController */
/* @var $model Certificate */
/* @var $form CActiveForm */
?>

<div class="form list-view">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'certificate-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<!-- start form of applicant-->
	<div class="row-fluid list-view">
		<div class="span7 view">
			<div class="row">
				<?php echo $form->labelEx($applicant,'firstname'); ?>
				<?php echo $form->textField($applicant,'firstname',array('size'=>60,'maxlength'=>200,'class'=>'form-wide')); ?>
				<?php echo $form->error($applicant,'firstname'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($applicant,'middlename'); ?>
				<?php echo $form->textField($applicant,'middlename',array('size'=>60,'maxlength'=>200)); ?>
				<?php echo $form->error($applicant,'middlename'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($applicant,'lastname'); ?>
				<?php echo $form->textField($applicant,'lastname',array('size'=>60,'maxlength'=>200)); ?>
				<?php echo $form->error($applicant,'lastname'); ?>
			</div>
		</div>
		<div class="span5" style="background:#eee;height:200px;">
			PICTURE WIDGET HERE
		</div>
	</div>
	<div class="row-fluid view">
		<?php echo $form->labelEx($applicant,'address'); ?>
		<?php echo $form->textField($applicant,'address',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($applicant,'address'); ?>
	</div>
	<div class="row-fluid list-view">
		
		<div class="row-fluid view">
			<div class="span6">
				<?php echo $form->labelEx($applicant,'dateofbirth'); ?>
				<?php
			    $this->widget(
			    'ext.jui.EJuiDateTimePicker',
			    array(
			        'model'     => $applicant,
			        'attribute' => 'dateofbirth',
			        //'language'=> 'ru',//default Yii::app()->language
			        'mode'    => 'date',
			        'options'   => array(
			            'dateFormat' => 'yy-mm-dd',
			            //'timeFormat' => 'hh:mm',//'hh:mm tt' default
			        ),
			    )
				);
			    ?>
				<?php echo $form->error($applicant,'dateofbirth'); ?>
			</div>

			<div class="span6">
				<?php echo $form->labelEx($applicant,'placeofbirth'); ?>
				<?php echo $form->textField($applicant,'placeofbirth'); ?>
				<?php echo $form->error($applicant,'placeofbirth'); ?>
			</div>
		</div>


		<div class="row-fluid view">
			<?php echo $form->labelEx($applicant,'civilstatus'); ?>
			<?php echo $form->textField($applicant,'civilstatus'); ?>
			<?php echo $form->error($applicant,'civilstatus'); ?>
		</div>


	</div>
	<!-- end of form of applicant-->

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'station_id'); ?>
		<?php echo $form->textField($model,'station_id'); ?>
		<?php echo $form->error($model,'station_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'applicant_id'); ?>
		<?php echo $form->textField($model,'applicant_id'); ?>
		<?php echo $form->error($model,'applicant_id'); ?>
	</div> -->

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'certificate_no'); ?>
		<?php echo $form->textField($model,'certificate_no',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'certificate_no'); ?>
	</div> -->

	<div class="row-fluid view">
		<?php echo $form->labelEx($model,'purpose'); ?>
		<?php echo $form->textField($model,'purpose',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'purpose'); ?>
	</div>

	<div class="row-fluid view">
		<div class=" row-fluid">
			<div class="span6">
				<?php echo $form->labelEx($model,'residentcertnumber'); ?>
				<?php echo $form->textField($model,'residentcertnumber',array('size'=>60,'maxlength'=>200)); ?>
				<?php echo $form->error($model,'residentcertnumber'); ?>
			</div>
			<div class="span6">
				<?php echo $form->labelEx($model,'residentcertdateissued'); ?>
				<?php echo $form->textField($model,'residentcertdateissued',array('size'=>60,'maxlength'=>200)); ?>
				<?php echo $form->error($model,'residentcertdateissued'); ?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<?php echo $form->labelEx($model,'or_number'); ?>
				<?php echo $form->textField($model,'or_number',array('size'=>60,'maxlength'=>200)); ?>
				<?php echo $form->error($model,'or_number'); ?>
			</div>
			<div class="span6">
				<?php echo $form->labelEx($model,'amount'); ?>
				<?php echo $form->textField($model,'amount',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'amount'); ?>
			</div>
		</div>
	</div>

	
	<div class="row-fluid view">
		<div class="span6">
			<?php echo $form->labelEx($model,'investigator_id'); ?>
			<?php echo $form->textField($model,'investigator_id'); ?>
			<?php echo $form->error($model,'investigator_id'); ?>
		</div>

		<div class="span6">
			<?php echo $form->labelEx($model,'officer_id'); ?>
			<?php echo $form->textField($model,'officer_id'); ?>
			<?php echo $form->error($model,'officer_id'); ?>
		</div>
	</div>

	<div class="row-fluid view">
		<div class="span9">
			<?php echo $form->labelEx($model,'findings'); ?>
			<?php echo $form->textField($model,'findings',array('size'=>60,'maxlength'=>200)); ?>
			<?php echo $form->error($model,'findings'); ?>
		</div>
		<div class="span2 buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Print' : 'Save',array('class'=>'btn btn-xlarge btn-success')); ?>
		</div>
	</div>
<!-- 	<div class="row-fluid">
		<?php echo $form->labelEx($model,'datefiled'); ?>
		<?php echo $form->textField($model,'datefiled'); ?>
		<?php echo $form->error($model,'datefiled'); ?>
	</div> -->

	<!-- <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-xlarge')); ?>
	</div> -->

<?php $this->endWidget(); ?>

</div><!-- form -->