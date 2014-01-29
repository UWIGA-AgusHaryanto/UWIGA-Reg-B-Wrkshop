<?php
/* @var $this ProductpriceController */
/* @var $model Productprice */

$this->breadcrumbs=array(
	'Productprices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Productprice', 'url'=>array('index')),
	array('label'=>'Manage Productprice', 'url'=>array('admin')),
);
?>

<h1>Create Productprice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>