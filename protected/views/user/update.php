<?php
$this->breadcrumbs=array(
	'User'=>array('admin'),
	$model->id_user=>array('view','id'=>$model->id_user),
	'Update',
);

$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id_user)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h4>Update User <?php echo $model->id_user; ?></h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>