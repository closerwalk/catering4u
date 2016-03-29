<?php
/* @var $this WeddingsController */
/* @var $model Weddings */

$this->breadcrumbs=array(
	'Weddings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Weddings', 'url'=>array('index')),
	array('label'=>'Manage Weddings', 'url'=>array('admin')),
);
?>

<h1>Create Weddings</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>