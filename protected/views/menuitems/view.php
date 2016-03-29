<?php

/* @var $this MenuitemsController */

/* @var $model Menuitems */



/*$this->breadcrumbs=array(

	'Menuitems'=>array('index'),

	$model->id,

);*/



/*$this->menu=array(

	array('label'=>'List Menuitems', 'url'=>array('index')),

	array('label'=>'Create Menuitems', 'url'=>array('create')),

	array('label'=>'Update Menuitems', 'url'=>array('update', 'id'=>$model->id)),

	array('label'=>'Delete Menuitems', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),

	array('label'=>'Manage Menuitems', 'url'=>array('admin')),

);*/

?>







<?php 



$this->widget('zii.widgets.CDetailView', array(

	'data'=>$model,

	

	'attributes'=>array(

		'id',

		'entree',

		'menu_group_id',

		

	),

)); 





?>

