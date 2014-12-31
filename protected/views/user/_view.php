<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id_user), array('view', 'id' => $data->id_user)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
    <?php echo CHtml::encode($data->nip); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
    <?php echo CHtml::encode($data->username); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('id_akses')); ?>:</b>
    <?php echo CHtml::encode($data->id_akses); ?>
    <?php //echo CHtml::encode($data->id_akses->nm_akses); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('login_date')); ?>:</b>
    <?php echo CHtml::encode($data->login_date); ?>
    <br />

</div>