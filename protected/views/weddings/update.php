<?php
/* @var $this WeddingsController */
/* @var $model Weddings */

$this->breadcrumbs=array(
	'Weddings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Weddings', 'url'=>array('index')),
	array('label'=>'Create Weddings', 'url'=>array('create')),
	array('label'=>'View Weddings', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Weddings', 'url'=>array('admin')),
);
?>

<h1>Update Weddings <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>