<?php
/* @var $this PhotoshootsController */
/* @var $model Photoshoots */

$this->breadcrumbs=array(
	'Photoshoots'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Photoshoots', 'url'=>array('index')),
	array('label'=>'Manage Photoshoots', 'url'=>array('admin')),
);
?>

<h1>Create Photoshoots</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>