<?php
/* @var $this SalesController */
/* @var $data Sales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('salesid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->salesid), array('view', 'id'=>$data->salesid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trxdate')); ?>:</b>
	<?php echo CHtml::encode($data->trxdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('custid')); ?>:</b>
	<?php echo CHtml::encode($data->custid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productid')); ?>:</b>
	<?php echo CHtml::encode($data->productid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />


</div>