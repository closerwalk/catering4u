<?php
/* @var $this PhotoshootsController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Photoshoots',
);*/

/*$this->menu=array(
	array('label'=>'Create Photoshoots', 'url'=>array('create')),
	array('label'=>'Manage Photoshoots', 'url'=>array('admin')),
);*/
?>

<h1>Photoshoots</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	 'summaryText'=> '',
	 'enablePagination'=>false,
)); ?>
