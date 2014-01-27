<?php
/* @var $this CustomersalesconfigController */
/* @var $model Customersalesconfig */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'custid'); ?>
		<?php echo $form->textField($model,'custid',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CreditLimit'); ?>
		<?php echo $form->textField($model,'CreditLimit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOP'); ?>
		<?php echo $form->textField($model,'TOP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DistrChannel'); ?>
		<?php echo $form->textField($model,'DistrChannel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Entryby'); ?>
		<?php echo $form->textField($model,'Entryby',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entryDate'); ?>
		<?php echo $form->textField($model,'entryDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastUpdated'); ?>
		<?php echo $form->textField($model,'lastUpdated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->