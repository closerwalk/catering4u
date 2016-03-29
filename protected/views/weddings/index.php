<?php
/* @var $this WeddingsController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Weddings',
);

$this->menu=array(
	array('label'=>'Create Weddings', 'url'=>array('create')),
	array('label'=>'Manage Weddings', 'url'=>array('admin')),
);*/
?>

<h1>Weddings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	 'summaryText'=> '',
	 'enablePagination'=>false,
)); ?>
