<?php
/* @var $this SalesController */
/* @var $model Sales */

$this->breadcrumbs=array(
	'Sales'=>array('index'),
	$model->salesid,
);

$this->menu=array(
	array('label'=>'List Sales', 'url'=>array('index')),
	array('label'=>'Create Sales', 'url'=>array('create')),
	array('label'=>'Update Sales', 'url'=>array('update', 'id'=>$model->salesid)),
	array('label'=>'Delete Sales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->salesid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sales', 'url'=>array('admin')),
);
?>

<h1>View Sales #<?php echo $model->salesid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'salesid',
		'trxdate',
		'custid',
		'productid',
		'qty',
	),
)); ?>
