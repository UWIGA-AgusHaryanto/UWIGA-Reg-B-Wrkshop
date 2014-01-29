<?php
/* @var $this ProductpriceController */
/* @var $model Productprice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PriceId'); ?>
		<?php echo $form->textField($model,'PriceId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ProductId'); ?>
		<?php echo $form->textField($model,'ProductId',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SalesPrice'); ?>
		<?php echo $form->textField($model,'SalesPrice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DatePeriodeFrom'); ?>
		<?php echo $form->textField($model,'DatePeriodeFrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DatePeriodeTo'); ?>
		<?php echo $form->textField($model,'DatePeriodeTo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->