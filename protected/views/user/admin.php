<?php
$this->breadcrumbs = array(
    //'User' => array('admin'),
    'User',
    //'Manage',
);

$this->menu = array(
    //array('label' => 'List User', 'url' => array('index')),
    array('label' => 'Create User', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4>Manage Users</h4>

<p>
    Anda dapat secara bebas memilih operator perbandingan (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>).
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'user-grid',
    'dataProvider' => $model->search(),
    'filter'=>$model,
    'columns' => array(
        //'id_user',
        //'no_user',
        array(
            //'header'=>'no_user',    
            'name'=>'no_user',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
        'nip',
        'username',
        //'password',
        //'salt_password',
        //'id_akses',
        array(
            'name' => 'id_akses',
            'value' => '$data->idAkses->nm_akses',
            'filter'=>CHtml::listData(Akses::model()->findAll(),'id_akses', 'nm_akses'),
        ),
        'login_date',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
