<?php
/* @var $this SalestrxController */
/* @var $model Salestrx */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salestrx-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'trxdate'); ?>
		<?php echo $form->textField($model,'trxdate'); ?>
		<?php echo $form->error($model,'trxdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay_type 1=Cash/0=Credit'); ?>
		<?php echo $form->textField($model,'pay_type',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'pay_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'(pay_status)'); ?>
		<?php echo $form->textField($model,'pay_status'); ?>
		<?php echo $form->error($model,'pay_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Custid'); ?>
		<?php echo $form->textField($model,'Custid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Custid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->