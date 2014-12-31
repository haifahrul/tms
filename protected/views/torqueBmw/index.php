<?php
/* @var $this TorqueBmwController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Torque Bmws',
);

$this->menu=array(
	array('label'=>'Create TorqueBmw', 'url'=>array('create')),
	array('label'=>'Manage TorqueBmw', 'url'=>array('admin')),
);
?>

<h1>Torque Bmws</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
