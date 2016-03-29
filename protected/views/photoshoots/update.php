<?php
/* @var $this PhotoshootsController */
/* @var $model Photoshoots */

$this->breadcrumbs=array(
	'Photoshoots'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Photoshoots', 'url'=>array('index')),
	array('label'=>'Create Photoshoots', 'url'=>array('create')),
	array('label'=>'View Photoshoots', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Photoshoots', 'url'=>array('admin')),
);
?>

<h1>Update Photoshoots <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>