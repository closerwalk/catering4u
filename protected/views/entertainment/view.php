<?php
/* @var $this EntertainmentController */
/* @var $model Entertainment */

$this->breadcrumbs=array(
	'Entertainments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Entertainment', 'url'=>array('index')),
	array('label'=>'Create Entertainment', 'url'=>array('create')),
	array('label'=>'Update Entertainment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Entertainment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Entertainment', 'url'=>array('admin')),
);
?>

<h1>View Entertainment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
	),
)); ?>
