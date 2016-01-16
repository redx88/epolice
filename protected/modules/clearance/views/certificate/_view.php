<?php
/* @var $this ClearanceController */
/* @var $data Clearance */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('station_id')); ?>:</b>
	<?php echo CHtml::encode($data->station_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('applicant_id')); ?>:</b>
	<?php echo CHtml::encode($data->applicant_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clearance_no')); ?>:</b>
	<?php echo CHtml::encode($data->clearance_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purpose')); ?>:</b>
	<?php echo CHtml::encode($data->purpose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('or_number')); ?>:</b>
	<?php echo CHtml::encode($data->or_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('investigator_id')); ?>:</b>
	<?php echo CHtml::encode($data->investigator_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('officer_id')); ?>:</b>
	<?php echo CHtml::encode($data->officer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('findings')); ?>:</b>
	<?php echo CHtml::encode($data->findings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('residentcertnumber')); ?>:</b>
	<?php echo CHtml::encode($data->residentcertnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datefiled')); ?>:</b>
	<?php echo CHtml::encode($data->datefiled); ?>
	<br />

	*/ ?>

</div>