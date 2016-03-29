<?php
/* @var $this MakeupController */
/* @var $model Makeup */

$this->breadcrumbs=array(
	'Makeups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Makeup', 'url'=>array('index')),
	array('label'=>'Manage Makeup', 'url'=>array('admin')),
);
?>

<h1>Create Makeup</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>