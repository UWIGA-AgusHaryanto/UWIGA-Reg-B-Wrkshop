<?php
/* @var $this ProductpriceController */
/* @var $data Productprice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PriceId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PriceId), array('view', 'id'=>$data->PriceId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProductId')); ?>:</b>
	<?php echo CHtml::encode($data->ProductId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SalesPrice')); ?>:</b>
	<?php echo CHtml::encode($data->SalesPrice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DatePeriodeFrom')); ?>:</b>
	<?php echo CHtml::encode($data->DatePeriodeFrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DatePeriodeTo')); ?>:</b>
	<?php echo CHtml::encode($data->DatePeriodeTo); ?>
	<br />


</div>