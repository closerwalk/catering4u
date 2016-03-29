<?php
/* @var $this EventplanningController */
/* @var $model Eventplanning */

$this->breadcrumbs=array(
	'Eventplannings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Eventplanning', 'url'=>array('index')),
	array('label'=>'Create Eventplanning', 'url'=>array('create')),
	array('label'=>'View Eventplanning', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Eventplanning', 'url'=>array('admin')),
);
?>

<h1>Update Eventplanning <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>