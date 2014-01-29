<?php
/* @var $this ProductpriceController */
/* @var $model Productprice */

$this->breadcrumbs=array(
	'Productprices'=>array('index'),
	$model->PriceId,
);

$this->menu=array(
	array('label'=>'List Productprice', 'url'=>array('index')),
	array('label'=>'Create Productprice', 'url'=>array('create')),
	array('label'=>'Update Productprice', 'url'=>array('update', 'id'=>$model->PriceId)),
	array('label'=>'Delete Productprice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PriceId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Productprice', 'url'=>array('admin')),
);
?>

<h1>View Productprice #<?php echo $model->PriceId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PriceId',
		'ProductId',
		'SalesPrice',
		'DatePeriodeFrom',
		'DatePeriodeTo',
	),
)); ?>
