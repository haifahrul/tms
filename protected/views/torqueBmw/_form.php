<?php
/* @var $this TorqueBmwController */
/* @var $model TorqueBmw */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'torque-bmw-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<?php
/*	<div class="row">
		<?php echo $form->labelEx($model,'nomor'); ?>
		<?php echo $form->textField($model,'nomor'); ?>
		<?php echo $form->error($model,'nomor'); ?>
	</div>*/
?>
	<div class="row">
		<?php echo $form->labelEx($model,'no_tool'); ?>
		<?php echo $form->textField($model,'no_tool'); ?>
		<?php echo $form->error($model,'no_tool'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'x1'); ?>
		<?php echo $form->checkBox($model,'x1',array('value'=>'Y', 'uncheckValue'=>'N')); ?>
		<?php echo $form->error($model,'x1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'f10'); ?>
		<?php echo $form->checkBox($model,'f10',array('value'=>'Y', 'uncheckValue'=>'N')); ?>
		<?php echo $form->error($model,'f10'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'f25'); ?>
		<?php echo $form->checkBox($model,'f25',array('value'=>'Y', 'uncheckValue'=>'N')); ?>
		<?php echo $form->error($model,'f25'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'f30'); ?>
		<?php echo $form->checkBox($model,'f30',array('value'=>'Y', 'uncheckValue'=>'N')); ?>
		<?php echo $form->error($model,'f30'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pos'); ?>
		<?php echo CHtml::activeDropDownList($model, 'id_pos',
				CHtml::listData(Pos::model()->findAll(), 'id_pos', 'nm_pos'),
					array('empty'=>'Pilih Pos')); ?>
		<?php echo $form->error($model,'id_pos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'process_name'); ?>
		<?php echo $form->textField($model,'process_name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'process_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'standard'); ?>
		<?php echo $form->textField($model,'standard'); ?>
		<?php echo $form->error($model,'standard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade'); ?>
		<?php echo $form->textField($model,'grade',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'grade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minimal'); ?>
		<?php echo $form->textField($model,'minimal'); ?>
		<?php echo $form->error($model,'minimal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maximal'); ?>
		<?php echo $form->textField($model,'maximal'); ?>
		<?php echo $form->error($model,'maximal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assy_page'); ?>
		<?php echo $form->textField($model,'assy_page',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'assy_page'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tool'); ?>
		<?php echo CHtml::activeDropDownList($model,'id_tool',
				CHtml::listData(Tool::model()->findAll(),'id_tool','nm_tool'),
					array('empty'=>'Pilih Tool')); ?>
		<?php echo $form->error($model,'id_tool'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ref_calibration'); ?>
		<?php echo CHtml::activeDropDownList($model,'id_ref_calibration',
				CHtml::listData(RefCalibration::model()->findAll(),'id_ref_calibration','nm_ref_calibration'),
					array('empty'=>'Pilih Ref Calibration')); ?>
		<?php echo $form->error($model,'id_ref_calibration'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->