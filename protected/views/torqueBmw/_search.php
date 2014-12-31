<?php
/* @var $this TorqueBmwController */
/* @var $model TorqueBmw */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_torque'); ?>
		<?php echo $form->textField($model,'id_torque'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomor'); ?>
		<?php echo $form->textField($model,'nomor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_tool'); ?>
		<?php echo $form->textField($model,'no_tool'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'x1'); ?>
		<?php echo $form->textField($model,'x1',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'f10'); ?>
		<?php echo $form->textField($model,'f10',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'f25'); ?>
		<?php echo $form->textField($model,'f25',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'f30'); ?>
		<?php echo $form->textField($model,'f30',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pos'); ?>
		<?php echo $form->textField($model,'id_pos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'process_name'); ?>
		<?php echo $form->textField($model,'process_name',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'standard'); ?>
		<?php echo $form->textField($model,'standard'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade'); ?>
		<?php echo $form->textField($model,'grade',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimal'); ?>
		<?php echo $form->textField($model,'minimal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maximal'); ?>
		<?php echo $form->textField($model,'maximal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'assy_page'); ?>
		<?php echo $form->textField($model,'assy_page',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tool'); ?>
		<?php echo $form->textField($model,'id_tool'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ref_calibration'); ?>
		<?php echo $form->textField($model,'id_ref_calibration'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_by'); ?>
		<?php echo $form->textField($model,'update_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->