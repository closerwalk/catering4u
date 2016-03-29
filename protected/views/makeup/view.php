<?php
/* @var $this MakeupController */
/* @var $model Makeup */

$this->breadcrumbs=array(
	'Makeups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Makeup', 'url'=>array('index')),
	array('label'=>'Create Makeup', 'url'=>array('create')),
	array('label'=>'Update Makeup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Makeup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Makeup', 'url'=>array('admin')),
);
?>

<h1>View Makeup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
