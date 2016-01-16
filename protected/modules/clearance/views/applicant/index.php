<?php
/* @var $this ApplicantController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Applicants',
);

$this->menu=array(
	array('label'=>'Create Applicant', 'url'=>array('create')),
	array('label'=>'Manage Applicant', 'url'=>array('admin')),
);
?>

<h1>Applicants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
