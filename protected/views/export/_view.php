<?php
/* @var $this TorqueBmwController */
/* @var $data TorqueBmw */

?>


<div class="view" align="center">

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_tool')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->no_tool), array('view', 'id'=>$data->no_tool)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor')); ?>:</b>
	<?php echo CHtml::encode($data->nomor); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pos')); ?>:</b>
	<?php echo CHtml::encode($data->idPos->nm_pos); ?>
	<br />
        <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('process_name')); ?>:</b>
	<?php echo CHtml::encode($data->process_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('std')); ?>:</b>
	<?php echo CHtml::encode($data->std); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</b>
	<?php echo CHtml::encode($data->grade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimal')); ?>:</b>
	<?php echo CHtml::encode($data->minimal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maxsimal')); ?>:</b>
	<?php echo CHtml::encode($data->maxsimal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assy_page')); ?>:</b>
	<?php echo CHtml::encode($data->assy_page); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tool')); ?>:</b>
	<?php echo CHtml::encode($data->idTool->nm_tool); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ref_calibration')); ?>:</b>
	<?php echo CHtml::encode($data->idRefCalibration->nm_ref_calibration); ?>
	<br />
        -->
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_calibration')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_calibration); ?>
	<br />
        
        <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('lapse')); ?>:</b>
	<?php echo CHtml::encode($data->lapse); ?>
	<br />
        -->
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('next_calibration')); ?>:</b>
	<?php echo CHtml::encode($data->next_calibration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status')); ?>:</b>
	<?php echo CHtml::encode($data->idStatus->nm_status); ?>
	<br />
        
        Export to Excel :
        
        <a href="<?php echo $this->createUrl("export/toExcel/fileName/reportExcel"); ?>" Ms. Excel <a>

</div>