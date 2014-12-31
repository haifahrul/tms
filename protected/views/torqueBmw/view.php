<?php
/* @var $this TorqueBmwController */
/* @var $model TorqueBmw */

$this->breadcrumbs=array(
	'View Torque Bmw'=>array('admin'),
	$model->no_tool,
);

$this->menu=array(
	//array('label'=>'List TorqueBmw', 'url'=>array('index')),
	array('label'=>'Create Torque Bmw', 'url'=>array('create')),
	array('label'=>'Update Torque Bmw', 'url'=>array('update', 'id'=>$model->id_torque)),
	array('label'=>'Delete Torque Bmw', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_torque),'confirm'=>'Anda yakin ingin menghapus data ini?')),
	array('label'=>'Manage Torque Bmw', 'url'=>array('admin')),
);
?>

<h4>View Torque Bmw </h4> <?php //echo $model->no_tool; ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_torque',
		'nomor',
		'no_tool',
		'x1',
		'f10',
		'f25',
		'f30',
		array(
			'name'=>'id_pos',
			'value'=>$model->idPos()->nm_pos,
		),
		'process_name',
		'standard',
		'grade',
		'minimal',
		'maximal',
		'assy_page',
		array(
			'name'=>'id_tool',
			'value'=>$model->idTool->nm_tool,
		),
		array(
			'name'=>'id_ref_calibration',
			'value'=>$model->idRefCalibration->nm_ref_calibration,
		),
		//'create_by',
		array(
			'name'=>'create_by',
			'value'=>$model->idUser->username,
		),
		'create_time',
		//'update_by',
		array(
			'name'=>'create_by',
			'value'=>$model->idUser->username,
		),
		'update_time',
	),
)); ?>
