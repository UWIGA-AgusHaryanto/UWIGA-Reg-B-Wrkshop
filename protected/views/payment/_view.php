<?php
/* @var $this PaymentController */
/* @var $data Payment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->paymentid), array('view', 'id'=>$data->paymentid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paydate')); ?>:</b>
	<?php echo CHtml::encode($data->paydate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salestrxid')); ?>:</b>
	<?php echo CHtml::encode($data->salestrxid); ?>
	<br />


</div>