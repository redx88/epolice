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

<h1>New Police Clearance Record</h1>
<div class="row-fluid">
	<div class="span10">
	<?php $this->renderPartial('_form', array('model'=>$model,'applicant'=>$applicant)); ?>
	</div>
	<div class="span2">
		<h4>EXTRA WINDOW</h4>
	</div>
</div>