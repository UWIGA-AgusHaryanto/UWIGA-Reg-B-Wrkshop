<?php
/* @var $this SalestrxdetailController */
/* @var $model Salestrxdetail */

$this->breadcrumbs=array(
	'Salestrxdetails'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salestrxdetail', 'url'=>array('index')),
	array('label'=>'Create Salestrxdetail', 'url'=>array('create')),
	array('label'=>'View Salestrxdetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Salestrxdetail', 'url'=>array('admin')),
);
?>

<h1>Update Salestrxdetail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>