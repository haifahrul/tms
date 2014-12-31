<?php
$this->breadcrumbs=array(
	'User'=>array('admin'),
	$model->id_user,
);

$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id_user)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h4>View User <?php echo $model->username; ?></h4>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_user',
		'no_user',
		'nip',
		'username',
		//'password',
		//'salt_password',
        //'id_akses',
		array(
			'name'=>'hak_akses',
			'value'=>$model->idAkses->nm_akses,
		), 
		'login_date',
	),
)); ?>
