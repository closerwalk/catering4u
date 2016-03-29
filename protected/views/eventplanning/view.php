<?php
/* @var $this EventplanningController */
/* @var $model Eventplanning */

$this->breadcrumbs=array(
	'Eventplannings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Eventplanning', 'url'=>array('index')),
	array('label'=>'Create Eventplanning', 'url'=>array('create')),
	array('label'=>'Update Eventplanning', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Eventplanning', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Eventplanning', 'url'=>array('admin')),
);
?>

<h1>View Eventplanning #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
