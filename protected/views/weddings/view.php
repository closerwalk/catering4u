<?php
/* @var $this WeddingsController */
/* @var $model Weddings */

$this->breadcrumbs=array(
	'Weddings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Weddings', 'url'=>array('index')),
	array('label'=>'Create Weddings', 'url'=>array('create')),
	array('label'=>'Update Weddings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Weddings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Weddings', 'url'=>array('admin')),
);
?>

<h1>View Weddings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
