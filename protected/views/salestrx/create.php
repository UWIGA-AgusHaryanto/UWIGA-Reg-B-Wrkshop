<?php
/* @var $this SalestrxController */
/* @var $model Salestrx */

$this->breadcrumbs=array(
	'Salestrxes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salestrx', 'url'=>array('index')),
	array('label'=>'Manage Salestrx', 'url'=>array('admin')),
);
?>

<h1>Create Salestrx</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>