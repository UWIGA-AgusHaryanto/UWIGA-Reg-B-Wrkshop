<?php
/* @var $this SalestrxdetailController */
/* @var $model Salestrxdetail */

$this->breadcrumbs=array(
	'Salestrxdetails'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Salestrxdetail', 'url'=>array('index')),
	array('label'=>'Create Salestrxdetail', 'url'=>array('create')),
	array('label'=>'Update Salestrxdetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Salestrxdetail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salestrxdetail', 'url'=>array('admin')),
);
?>

<h1>View Salestrxdetail #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'salestrxid',
		'productid',
		'qty',
		'price',
		'discount',
		'subtotal',
	),
)); ?>
