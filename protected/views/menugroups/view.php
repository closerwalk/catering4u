<?php
/* @var $this MenugroupsController */
/* @var $model Menugroups */

$this->breadcrumbs=array(
	'Menugroups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Menugroups', 'url'=>array('index')),
	array('label'=>'Create Menugroups', 'url'=>array('create')),
	array('label'=>'Update Menugroups', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Menugroups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menugroups', 'url'=>array('admin')),
);
?>

<h1>View Menugroups #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'menugroup',
	),
)); ?>
