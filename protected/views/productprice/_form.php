<?php
/* @var $this ProductpriceController */
/* @var $model Productprice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productprice-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ProductId'); ?>
		<?php echo $form->textField($model,'ProductId',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ProductId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SalesPrice'); ?>
		<?php echo $form->textField($model,'SalesPrice'); ?>
		<?php echo $form->error($model,'SalesPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DatePeriodeFrom'); ?>
		<?php echo $form->textField($model,'DatePeriodeFrom'); ?>
		<?php echo $form->error($model,'DatePeriodeFrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DatePeriodeTo'); ?>
		<?php echo $form->textField($model,'DatePeriodeTo'); ?>
		<?php echo $form->error($model,'DatePeriodeTo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->