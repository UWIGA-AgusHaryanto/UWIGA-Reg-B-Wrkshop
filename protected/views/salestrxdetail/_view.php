<?php
/* @var $this SalestrxdetailController */
/* @var $data Salestrxdetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salestrxid')); ?>:</b>
	<?php echo CHtml::encode($data->salestrxid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productid')); ?>:</b>
	<?php echo CHtml::encode($data->productid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty')); ?>:</b>
	<?php echo CHtml::encode($data->qty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</b>
	<?php echo CHtml::encode($data->discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtotal')); ?>:</b>
	<?php echo CHtml::encode($data->subtotal); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('PriceId')); ?>:</b>
	<?php echo CHtml::encode($data->PriceId); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PriceId')); ?>:</b>
	<?php echo CHtml::encode($data->PriceId); ?>
	<br />

	*/ ?>

</div>