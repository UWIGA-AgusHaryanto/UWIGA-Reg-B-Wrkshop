<?php
/* @var $this CustomersalesconfigController */
/* @var $model Customersalesconfig */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customersalesconfig-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'custid'); ?>
		<?php echo $form->textField($model,'custid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'custid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CreditLimit'); ?>
		<?php echo $form->textField($model,'CreditLimit'); ?>
		<?php echo $form->error($model,'CreditLimit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOP'); ?>
		<?php echo $form->textField($model,'TOP'); ?>
		<?php echo $form->error($model,'TOP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DistrChannel'); ?>
		<?php echo $form->textField($model,'DistrChannel'); ?>
		<?php echo $form->error($model,'DistrChannel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Entryby'); ?>
		<?php echo $form->textField($model,'Entryby',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'Entryby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entryDate'); ?>
		<?php echo $form->textField($model,'entryDate'); ?>
		<?php echo $form->error($model,'entryDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastUpdated'); ?>
		<?php echo $form->textField($model,'lastUpdated'); ?>
		<?php echo $form->error($model,'lastUpdated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->