<?php
/* @var $this TorqueBmwController */
/* @var $model TorqueBmw */

$this->breadcrumbs=array(
	//'Torque Bmw'=>array('admin'),
	'Manage Torque Bmw',
);

$this->menu=array(
	//array('label'=>'List TorqueBmw', 'url'=>array('index')),
	array('label'=>'Create Torque Bmw', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#torque-bmw-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4>Manage Torque Bmw</h4>

<p>
    Anda dapat secara bebas memilih operator perbandingan (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>).
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'torque-bmw-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
            //'header'=>'nomor',    
            'name'=>'nomor',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
		'no_tool',
		'x1',
		'f10',
		'f25',
		'f30',
		array(
			'name'=>'id_pos',
			'value' => '$data->idPos->nm_pos',
            'filter'=>CHtml::listData(Pos::model()->findAll(),'id_pos', 'nm_pos'),
		),
		'process_name',
		'standard',
		'grade',
		'minimal',
		'maximal',
		'assy_page',
		array(
			'name'=>'id_tool',
			'value'=>'$data->idTool->nm_tool',
			'filter'=>CHtml::listData(Tool::model()->findAll(),'id_tool','nm_tool'),
		),
		array(
			'name'=>'id_ref_calibration',
			'value'=>'$data->idRefCalibration->nm_ref_calibration',
			'filter'=>CHtml::listData(RefCalibration::model()->findAll(),'id_ref_calibration','nm_ref_calibration'),
		),
		array(
			'name'=>'create_by',
			'value'=>'$data->idUser->username',
		),
		array(
			'name'=>'create_time',
			'value'=>'$data->create_time',
			'type'=>'date',
		),
		array(
			'name'=>'update_by',
			'value'=>'$data->idUser->username',
		),
		array(
			'name'=>'update_time',
			'value'=>'$data->update_time',
			'type'=>'date',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
