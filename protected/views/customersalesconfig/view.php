<?php
/* @var $this CustomersalesconfigController */
/* @var $model Customersalesconfig */

$this->breadcrumbs=array(
	'Customersalesconfigs'=>array('index'),
	$model->custid,
);

$this->menu=array(
	array('label'=>'List Customersalesconfig', 'url'=>array('index')),
	array('label'=>'Create Customersalesconfig', 'url'=>array('create')),
	array('label'=>'Update Customersalesconfig', 'url'=>array('update', 'id'=>$model->custid)),
	array('label'=>'Delete Customersalesconfig', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->custid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customersalesconfig', 'url'=>array('admin')),
);
?>

<h1>View Customersalesconfig #<?php echo $model->custid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'custid',
		'CreditLimit',
		'TOP',
		'DistrChannel',
		'Entryby',
		'entryDate',
		'lastUpdated',
	),
)); ?>
