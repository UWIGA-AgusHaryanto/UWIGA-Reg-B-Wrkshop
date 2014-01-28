<?php
/* @var $this SalestrxdetailController */
/* @var $model Salestrxdetail */

$this->breadcrumbs=array(
	'Salestrxdetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salestrxdetail', 'url'=>array('index')),
	array('label'=>'Manage Salestrxdetail', 'url'=>array('admin')),
);
?>

<h1>Create Salestrxdetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>