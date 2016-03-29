<?php
/* @var $this WeddingsController */
/* @var $data Weddings */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
-->
	<b><?php //echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<h2><?php echo CHtml::encode($data->description); ?></h2>
	
	<p>Our team of professionals has one goal – that every detail of every wedding is taken care of seamlessly, so that our brides and grooms enjoy every minute of their day without a worry or care in the world. We have all worked together for so long that there is never a concern that each of our weddings will be anything less than perfect..</p><br />
    <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/weddings.jpg"  width="600" />

</div>