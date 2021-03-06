<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>114)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'password2'); ?>
		<?php echo $form->passwordField($model,'password2',array('size'=>60,'maxlength'=>114)); ?>
		<?php echo $form->error($model,'password2'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'id_akses'); ?>
                <?php echo $form->dropDownList($model,'id_akses', CHtml::listData(Akses::model()->findAll(), 'id_akses',
                        'nm_akses'), array('empty'=>'-- Pilih Hak Akses --')); ?> 
		<?php echo $form->error($model,'id_akses'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->