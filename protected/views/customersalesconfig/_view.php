<?php
/* @var $this CustomersalesconfigController */
/* @var $data Customersalesconfig */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('custid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->custid), array('view', 'id'=>$data->custid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CreditLimit')); ?>:</b>
	<?php echo CHtml::encode($data->CreditLimit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TOP')); ?>:</b>
	<?php echo CHtml::encode($data->TOP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DistrChannel')); ?>:</b>
	<?php echo CHtml::encode($data->DistrChannel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Entryby')); ?>:</b>
	<?php echo CHtml::encode($data->Entryby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entryDate')); ?>:</b>
	<?php echo CHtml::encode($data->entryDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->lastUpdated); ?>
	<br />


</div>