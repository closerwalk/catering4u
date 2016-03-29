<?php
/* @var $this MenuitemsController */
/* @var $model Menuitems */

$this->breadcrumbs=array(
	'Menuitems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Menuitems', 'url'=>array('index')),
	array('label'=>'Manage Menuitems', 'url'=>array('admin')),
);
?>

<h1>Create Menuitems</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>