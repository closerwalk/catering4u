<?php
/* @var $this PhotoshootsController */
/* @var $model Photoshoots */

$this->breadcrumbs=array(
	'Photoshoots'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Photoshoots', 'url'=>array('index')),
	array('label'=>'Create Photoshoots', 'url'=>array('create')),
	array('label'=>'Update Photoshoots', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Photoshoots', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Photoshoots', 'url'=>array('admin')),
);
?>

<h1>View Photoshoots #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
