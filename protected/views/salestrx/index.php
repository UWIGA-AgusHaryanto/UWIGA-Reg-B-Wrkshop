<?php
/* @var $this SalestrxController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salestrxes',
);

$this->menu=array(
	array('label'=>'Create Salestrx', 'url'=>array('create')),
	array('label'=>'Manage Salestrx', 'url'=>array('admin')),
);
?>

<h1>Salestrxes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
