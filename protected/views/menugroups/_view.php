<?php
/* @var $this MenugroupsController */
/* @var $data Menugroups */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menugroup')); ?>:</b>
	<?php echo CHtml::encode($data->menugroup); ?>
	<br />


</div>