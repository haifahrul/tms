<?php
/* @var $this TorqueBmwController */
/* @var $model TorqueBmw */

$this->breadcrumbs=array(
	'Torque Bmw'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List TorqueBmw', 'url'=>array('index')),
	array('label'=>'Manage Torque Bmw', 'url'=>array('admin')),
);
?>

<?php
/*foreach (Yii::app()->user->getFlashes() as $key => $message) {
	echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
 } */
?>

<h4>Create Torque Bmw</h4>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>