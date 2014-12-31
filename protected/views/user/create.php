<?php
$this->breadcrumbs=array(
	'User'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h4>Create User</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>