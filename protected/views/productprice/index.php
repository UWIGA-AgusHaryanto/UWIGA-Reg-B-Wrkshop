<?php
/* @var $this ProductpriceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productprices',
);

$this->menu=array(
	array('label'=>'Create Productprice', 'url'=>array('create')),
	array('label'=>'Manage Productprice', 'url'=>array('admin')),
);
?>

<h1>Productprices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
