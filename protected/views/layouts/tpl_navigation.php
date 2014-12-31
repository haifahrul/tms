<section id="navigation-main">  
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="nav-collapse">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'htmlOptions' => array('class' => 'nav'),
                        'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                        'itemCssClass' => 'item-test',
                        'encodeLabel' => false,
                        'items' => array(
                            array('label' => 'Beranda', 'url' => array('/site/index')),
                            
                            array('label' => 'Profil <span class="caret"></span>', 'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Struktur Organisasi', 'url' => "javascript:chooseStyle('style', 60)",
                                        'url'=>array('/site/page','view'=>'struktur_organisasi')),
                                    array('label' => 'Visi dan Misi', 'url' => "javascript:chooseStyle('style', 60)",
                                        'url'=>array('/site/page','view'=>'visi_dan_misi')),
                                )),
                            
                            array('label' => 'Tentang Kami <span class="caret"></span>', 'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Sejarah', 'url' => array('/site/page', 'view' => 'sejarah')),
                                    array('label' => 'Arti Lambang', 'url' => array('/site/page', 'view' => 'arti_lambang')),
                                    array('label' => 'Prasetya', 'url' => array('/site/page', 'view' => 'prasetya')),
                                    array('label' => 'Jenjang Tingkatan', 'url' => array('/site/page', 'view' => 'jenjang_tingkatan')),
                                )),
                            array('label' => 'Galeri Kegiatan <span class="caret"></span>', 'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                                'items' => array(
                                    array('label' => 'Kolosal', 'url' => array('/site/page', 'view' => 'kolosal')),
                                    array('label' => 'Pendadaran', 'url' => array('/site/page', 'view' => 'pendadaran')),
                                )),
                            array('label' => 'Jadwal Latihan', 'url' => array('/site/page', 'view' => 'jadwal_latihan')),
                            array('label' => 'Data Anggota', 'url' => array('/dataAnggota/admin'), 'visible' => Yii::app()->user->getLevel()<=2),
                            array('label' => 'Data User', 'url' => array('/user/admin'), 'visible' => Yii::app()->user->getLevel()<=1),
                            array('label' => 'Kontak Kami', 'url' => array('/site/contact', 'view' => 'contact')),
                            //array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- /#navigation-main -->