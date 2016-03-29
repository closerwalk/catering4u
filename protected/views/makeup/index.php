<?php
/* @var $this MakeupController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Makeups',
);
*/
/*$this->menu=array(
	array('label'=>'Create Makeup', 'url'=>array('create')),
	array('label'=>'Manage Makeup', 'url'=>array('admin')),
);*/
?>

<h1>Makeups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'summaryText'=> '',
	 'enablePagination'=>false,
)); ?>
