<?php
/* @var $this ProductpriceController */
/* @var $model Productprice */

$this->breadcrumbs=array(
	'Productprices'=>array('index'),
	$model->PriceId=>array('view','id'=>$model->PriceId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productprice', 'url'=>array('index')),
	array('label'=>'Create Productprice', 'url'=>array('create')),
	array('label'=>'View Productprice', 'url'=>array('view', 'id'=>$model->PriceId)),
	array('label'=>'Manage Productprice', 'url'=>array('admin')),
);
?>

<h1>Update Productprice <?php echo $model->PriceId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>