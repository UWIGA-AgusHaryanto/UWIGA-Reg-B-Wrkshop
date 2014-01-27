<?php
/* @var $this CustomersalesconfigController */
/* @var $model Customersalesconfig */

$this->breadcrumbs=array(
	'Customersalesconfigs'=>array('index'),
	$model->custid=>array('view','id'=>$model->custid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Customersalesconfig', 'url'=>array('index')),
	array('label'=>'Create Customersalesconfig', 'url'=>array('create')),
	array('label'=>'View Customersalesconfig', 'url'=>array('view', 'id'=>$model->custid)),
	array('label'=>'Manage Customersalesconfig', 'url'=>array('admin')),
);
?>

<h1>Update Customersalesconfig <?php echo $model->custid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>