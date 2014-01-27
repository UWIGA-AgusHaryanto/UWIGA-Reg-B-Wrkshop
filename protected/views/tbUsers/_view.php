<?php
/* @var $this TbUsersController */
/* @var $data TbUsers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datecreated')); ?>:</b>
	<?php echo CHtml::encode($data->datecreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastupdated')); ?>:</b>
	<?php echo CHtml::encode($data->lastupdated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roles_id')); ?>:</b>
	<?php echo CHtml::encode($data->roles_id); ?>
	<br />


</div>