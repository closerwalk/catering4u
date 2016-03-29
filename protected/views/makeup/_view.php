<?php
/* @var $this MakeupController */
/* @var $data Makeup */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->
    
	
	<b><?php //echo CHtml::encode($data->getAttributeLabel('description')); ?></b>
	<h2><?php echo CHtml::encode($data->description); ?></h2>
	
	<p>CS4U believes our customers' needs are of the utmost importance. Our team is committed to meeting those needs. As a result, a high percentage of our business is from 	repeat customers and referrals. 
    WE are professional and on time </p><br/>
	<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/makeup.jpg"  width="410" />
</div>