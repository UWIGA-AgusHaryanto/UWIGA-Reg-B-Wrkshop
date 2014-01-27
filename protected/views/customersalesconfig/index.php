<?php
/* @var $this CustomersalesconfigController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customersalesconfigs',
);

$this->menu=array(
	array('label'=>'Create Customersalesconfig', 'url'=>array('create')),
	array('label'=>'Manage Customersalesconfig', 'url'=>array('admin')),
);
?>

<h1>Customersalesconfigs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
