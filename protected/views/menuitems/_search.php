<?php
/* @var $this MenuitemsController */
/* @var $model Menuitems */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entree'); ?>
		<?php echo $form->textArea($model,'entree',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_group_id'); ?>
		<?php echo $form->textField($model,'menu_group_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->