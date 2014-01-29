<?php
/* @var $this SalestrxdetailController */
/* @var $model Salestrxdetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salestrxdetail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'salestrxid'); ?>
		<?php echo $form->textField($model,'salestrxid'); ?>
		<?php echo $form->error($model,'salestrxid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productid'); ?>
		<?php echo $form->textField($model,'productid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'productid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty'); ?>
		<?php echo $form->textField($model,'qty'); ?>
		<?php echo $form->error($model,'qty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discount'); ?>
		<?php echo $form->textField($model,'discount'); ?>
		<?php echo $form->error($model,'discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtotal'); ?>
		<?php echo $form->textField($model,'subtotal'); ?>
		<?php echo $form->error($model,'subtotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PriceId'); ?>
		<?php echo $form->textField($model,'PriceId'); ?>
		<?php echo $form->error($model,'PriceId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->