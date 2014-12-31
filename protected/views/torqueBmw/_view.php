<?php
/* @var $this TorqueBmwController */
/* @var $data TorqueBmw */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_torque')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_torque), array('view', 'id'=>$data->id_torque)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor')); ?>:</b>
	<?php echo CHtml::encode($data->nomor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_tool')); ?>:</b>
	<?php echo CHtml::encode($data->no_tool); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('x1')); ?>:</b>
	<?php echo CHtml::encode($data->x1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('f10')); ?>:</b>
	<?php echo CHtml::encode($data->f10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('f25')); ?>:</b>
	<?php echo CHtml::encode($data->f25); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('f30')); ?>:</b>
	<?php echo CHtml::encode($data->f30); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pos')); ?>:</b>
	<?php echo CHtml::encode($data->id_pos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('process_name')); ?>:</b>
	<?php echo CHtml::encode($data->process_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('standard')); ?>:</b>
	<?php echo CHtml::encode($data->standard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimal')); ?>:</b>
	<?php echo CHtml::encode($data->minimal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maximal')); ?>:</b>
	<?php echo CHtml::encode($data->maximal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assy_page')); ?>:</b>
	<?php echo CHtml::encode($data->assy_page); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tool')); ?>:</b>
	<?php echo CHtml::encode($data->id_tool); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ref_calibration')); ?>:</b>
	<?php echo CHtml::encode($data->id_ref_calibration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>