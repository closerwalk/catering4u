<?php
/* @var $this ServicesController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Services',
);

$this->menu=array(
	array('label'=>'Create Services', 'url'=>array('create')),
	array('label'=>'Manage Services', 'url'=>array('admin')),
);*/
?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
		 'summaryText'=> '',
	 'enablePagination'=>false,
)); ?>
