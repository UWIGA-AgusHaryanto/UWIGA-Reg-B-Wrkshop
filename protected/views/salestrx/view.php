<?php
/* @var $this SalestrxController */
/* @var $model Salestrx */

$this->breadcrumbs=array(
	'Salestrxes'=>array('index'),
	$model->salestrxId,
);

$this->menu=array(
	array('label'=>'List Salestrx', 'url'=>array('index')),
	array('label'=>'Create Salestrx', 'url'=>array('create')),
	array('label'=>'Update Salestrx', 'url'=>array('update', 'id'=>$model->salestrxId)),
	array('label'=>'Delete Salestrx', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->salestrxId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salestrx', 'url'=>array('admin')),
);
?>

<h1>View Salestrx #<?php echo $model->salestrxId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'salestrxId',
		'trxdate',
		'total',
		'pay_type',
		'pay_status',
		'Custid',
	),
)); ?>
