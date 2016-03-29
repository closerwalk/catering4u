<?php
/* @var $this EventplanningController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Eventplannings',
);*/

/*$this->menu=array(
	array('label'=>'Create Eventplanning', 'url'=>array('create')),
	array('label'=>'Manage Eventplanning', 'url'=>array('admin')),
);*/
?>

<h1>Eventplannings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	 'summaryText'=> '',
	 'enablePagination'=>false,
)); ?>
