<?php
/* @var $this EventplanningController */
/* @var $data Eventplanning */
?>

<div class="view">
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->

	<b><?php //echo CHtml::encode($data->getAttributeLabel('description')); ?></b>
	<h2><?php echo CHtml::encode($data->description); ?></h2>
	
	<p>CS4U is helping people all over Los Angeles County with event planning, promotion, and management. We're working with organizers who are creating gatherings of all kinds—whether they're putting together a massive concert or an intimate class. CS4U is the go-to resource for event planning, creation, and promotion. See how CS4U can help you with your event planning and management needs.</p>
    <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/events.gif"  width="600" />
	<br />

</div>