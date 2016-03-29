<?php
/* @var $this MenuitemsController */
/* @var $dataProvider CActiveDataProvider */

/*$this->breadcrumbs=array(
	'Menuitems',
);*/

/*$this->menu=array(
	array('label'=>'Create Menuitems', 'url'=>array('create')),
	array('label'=>'Manage Menuitems', 'url'=>array('admin')),
);*/
?>


<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/samplemenu.JPG"  style="position:absolute;top:480px;"/>

<?php 
	$this->counter = 1;
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	 'summaryText'=> '', // to remove the 
        //'template'=>'{items}', // this code display pager, item, sorter etc
         'enablePagination'=>false,
		 // to remove pager from the page use this code and remove above line
)); ?>