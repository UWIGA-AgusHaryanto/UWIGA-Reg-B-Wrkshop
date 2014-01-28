<?php
/* @var $this SalestrxController */
/* @var $model Salestrx */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'salestrxId'); ?>
		<?php echo $form->textField($model,'salestrxId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trxdate'); ?>
		<?php echo $form->textField($model,'trxdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_type 1=Cash/0=Credit'); ?>
		<?php echo $form->textField($model,'pay_type',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay_status'); ?>
		<?php echo $form->textField($model,'pay_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Custid'); ?>
		<?php echo $form->textField($model,'Custid',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->