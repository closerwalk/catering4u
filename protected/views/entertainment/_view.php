<?php
/* @var $this EntertainmentController */
/* @var $data Entertainment */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->

	<b><?php //echo CHtml::encode($data->getAttributeLabel('description')); ?></b>
	<h2><?php echo CHtml::encode($data->description); ?></h2>
	
	<p>CS4U is has the entertainment to make your event the talk of the town.  We do more than just food, we provide the fun that you will remember. We have professional, young and energenic entertainment that will be the polish of your event.</p><br />
    <img src="<?php echo Yii::app()->theme->baseUrl;?>/images/dj.jpg"  width="600" />
	<br />

</div>