<?php

/* @var $this MenuitemsController */

/* @var $model Menuitems */

/* @var $form CActiveForm */

?>



<div class="form">



<?php $form=$this->beginWidget('CActiveForm', array(

	'id'=>'menuitems-form',

	// Please note: When you enable ajax validation, make sure the corresponding

	// controller action is handling ajax validation correctly.

	// There is a call to performAjaxValidation() commented in generated controller code.

	// See class documentation of CActiveForm for details on this.

	'enableAjaxValidation'=>false,

)); ?>



	<p class="note">Fields with <span class="required">*</span> are required.</p>



	<?php echo $form->errorSummary($model); ?>

	<div class="row">

		<?php echo $form->labelEx($model,'Group'); ?>

	<!--	<?php echo $form->textField($model,'menu_group_id'); ?>

		<?php echo $form->error($model,'menu_group_id'); ?>

      <!-- <?php echo $form->textField($model,'menu_group_id'); ?>---->

		<?php echo $form->dropDownList($model, 'menu_group_id', CHtml::listData(Menugroups::model()->findAll(), 'id', 'menugroup'),array('prompt' => 'Select a Group')); ?>





	</div>

	<div class="row">

		<?php echo $form->labelEx($model,'entree'); ?>

		<?php echo $form->textArea($model,'entree',array('rows'=>6, 'cols'=>50)); ?>

		<?php echo $form->error($model,'entree'); ?>

	</div>


	<div class="row">

		<?php echo $form->labelEx($model,'descriptions'); ?>

		<?php echo $form->textArea($model,'descriptions',array('rows'=>6, 'cols'=>50)); ?>

		<?php echo $form->error($model,'descriptions'); ?>

	</div>
	
	<div class="row">

		<?php echo $form->labelEx($model,'price'); ?>

		<?php echo $form->textField($model,'price'); ?>

		<?php echo $form->error($model,'price'); ?>

	</div>


	<div class="row buttons">

		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

	</div>



<?php $this->endWidget(); ?>



</div><!-- form -->