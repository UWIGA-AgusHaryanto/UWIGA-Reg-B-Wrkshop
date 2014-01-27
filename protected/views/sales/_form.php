<?php
/* @var $this SalesController */
/* @var $model Sales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sales-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'salesid'); ?>
		<?php echo $form->textField($model,'salesid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'salesid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trxdate'); ?>
		<?php echo $form->textField($model,'trxdate'); ?>
		<?php echo $form->error($model,'trxdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'custid'); ?>
		<?php echo $form->textField($model,'custid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'custid'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->