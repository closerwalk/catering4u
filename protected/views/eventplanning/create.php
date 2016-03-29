<?php
/* @var $this EventplanningController */
/* @var $model Eventplanning */

$this->breadcrumbs=array(
	'Eventplannings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Eventplanning', 'url'=>array('index')),
	array('label'=>'Manage Eventplanning', 'url'=>array('admin')),
);
?>

<h1>Create Eventplanning</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>