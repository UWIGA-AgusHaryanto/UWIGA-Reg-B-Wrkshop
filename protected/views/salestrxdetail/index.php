<?php
/* @var $this SalestrxdetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salestrxdetails',
);

$this->menu=array(
	array('label'=>'Create Salestrxdetail', 'url'=>array('create')),
	array('label'=>'Manage Salestrxdetail', 'url'=>array('admin')),
);
?>

<h1>Salestrxdetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
