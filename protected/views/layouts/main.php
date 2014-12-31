<!DOCTYPE html PUBLIC`` "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <?php Yii::app()->bootstrap->registerAllCss(); ?>
        <?php //Yii::app()->theme->basePath ?>

        <div class="container" id="page">

            <div id="header" align="center">
                <h3>Torque Management System</h3>
                <?php //echo CHtml::encode(Yii::app()->name); ?>                
            </div><!-- header -->
            
            <div id="mainmenu"  class="jqueryslidemenu">	
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => 'Home', 'url' => array('/site/Welcome'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Data Users', 'url' => array('/user/admin'), 'visible' => Yii::app()->user->getLevel()<=1),
                        //array('label' => 'Data Pengguna', 'url' => array('/user/admin'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Data Torque', 'url' => array('/torqueBmw/admin'), 'visible' => Yii::app()->user->getLevel()<=2),
                        array('label' => 'Kalibrasi', 'url' => array('/calibration/admin'), 'visible' => Yii::app()->user->getLevel()<=2),
                        array('label' => 'Cetak Laporan', 'url' => array('/export/index'), 'visible' => Yii::app()->user->getLevel()<=2),
                        //array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ));
                ?>                
            </div><!-- mainmenu -->

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>
            <!---                
                            <h3 align="center"> Welcome in Application </h3>
                            <h3 align="center"> Torque Mangement System </h3>
            -->                
            
            <div id="content">
                <?php echo $content; 
                
                ?><!-- content -->
            </div>
                        
            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>