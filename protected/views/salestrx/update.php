<?php
/* @var $this SalestrxController */
/* @var $model Salestrx */

$this->breadcrumbs=array(
	'Salestrxes'=>array('index'),
	$model->salestrxId=>array('view','id'=>$model->salestrxId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salestrx', 'url'=>array('index')),
	array('label'=>'Create Salestrx', 'url'=>array('create')),
	array('label'=>'View Salestrx', 'url'=>array('view', 'id'=>$model->salestrxId)),
	array('label'=>'Manage Salestrx', 'url'=>array('admin')),
);
?>

<h1>Update Salestrx <?php echo $model->salestrxId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>