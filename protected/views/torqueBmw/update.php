<?php
/* @var $this TorqueBmwController */
/* @var $model TorqueBmw */

$this->breadcrumbs=array(
	'Torque Bmw'=>array('admin'),
	$model->id_torque=>array('view','id'=>$model->id_torque),
	'Update',
);



$this->menu=array(
	//array('label'=>'List TorqueBmw', 'url'=>array('index')),
	array('label'=>'Create TorqueBmw', 'url'=>array('create')),
	array('label'=>'View TorqueBmw', 'url'=>array('view', 'id'=>$model->id_torque)),
	array('label'=>'Manage TorqueBmw', 'url'=>array('admin')),
);
?>

<?php
foreach (Yii::app()->user->getFlashes() as $key => $message) {
	echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
}
?>


<h4>Update Torque Bmw <?php echo $model->id_torque; ?></h4>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>