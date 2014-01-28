<?php
/* @var $this SalestrxController */
/* @var $data Salestrx */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('salestrxId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->salestrxId), array('view', 'id'=>$data->salestrxId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trxdate')); ?>:</b>
	<?php echo CHtml::encode($data->trxdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('(1=Cash/0=Credit)')); ?>:</b>
	<?php echo CHtml::encode($data->pay_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay_status')); ?>:</b>
	<?php echo CHtml::encode($data->pay_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Custid')); ?>:</b>
	<?php echo CHtml::encode($data->Custid); ?>
	<br />


</div>