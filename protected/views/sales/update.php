<?php
/* @var $this SalesController */
/* @var $model Sales */

$this->breadcrumbs=array(
	'Sales'=>array('index'),
	$model->salesid=>array('view','id'=>$model->salesid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sales', 'url'=>array('index')),
	array('label'=>'Create Sales', 'url'=>array('create')),
	array('label'=>'View Sales', 'url'=>array('view', 'id'=>$model->salesid)),
	array('label'=>'Manage Sales', 'url'=>array('admin')),
);
?>

<h1>Update Sales <?php echo $model->salesid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>