<?php
/* @var $this CustomersalesconfigController */
/* @var $model Customersalesconfig */

$this->breadcrumbs=array(
	'Customersalesconfigs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Customersalesconfig', 'url'=>array('index')),
	array('label'=>'Manage Customersalesconfig', 'url'=>array('admin')),
);
?>

<h1>Create Customersalesconfig</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>