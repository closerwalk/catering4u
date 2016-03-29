<?php
/* @var $this MakeupController */
/* @var $model Makeup */

$this->breadcrumbs=array(
	'Makeups'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Makeup', 'url'=>array('index')),
	array('label'=>'Create Makeup', 'url'=>array('create')),
	array('label'=>'View Makeup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Makeup', 'url'=>array('admin')),
);
?>

<h1>Update Makeup <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>