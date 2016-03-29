<?php
/* @var $this PhotoshootsController */
/* @var $data Photoshoots */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />-->
	<b>
  
	<b><?php //echo CHtml::encode($data->getAttributeLabel('description')); ?></b>
	<?php echo '<h2>'.CHtml::encode($data->description).'</h2>'; ?>
      <p>
    Here at CS4U we offer a full entertainment package, it is our aim to provide the services you need to make your event the best it can be.
    We have professional Photographers on staff to meet your event needs.
    </p>
    <br />
	<br />
	<img src="<?php echo Yii::app()->theme->baseUrl;?>/images/photoshoot.jpg" />

</div>