<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?
// if (Yii::app()->user->isGuest) {
	// $this->redirect(array('Site/login'));
	// }
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	  <link rel="SHORTCUT ICON" href="<?php echo Yii::app()->request->baseUrl;?>/images/home.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<?php Yii::app()->bootstrap->register(); ?>
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <?php Yii::app()->getClientScript()->registerCoreScript('jquery.ui'); ?>
	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/bootstrap.min.css'); ?>
	
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

<body bgcolor="red">
<br>
<br>
<div class="container" id="page" style="border:none">

	<div id="header" style="border:none;margin-top:-18px;">
	</div><!-- header -->

	<div id="mainmenus" style="display:block">	

	<script>//alert('try'+'<?=$hak_akses['hak_akses']?>')</script>

	<?php $this->widget('bootstrap.widgets.TbNavbar', array(

    'type'=>'', // null or 'inverse'
    // 'brand'=>Yii::app()->name,
	 'brand' => '<img style="width:280px;height:40px;margin-left:-10px" src ="' . Yii::app()->request->baseUrl . '/images/logo.gif" />',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index&mn=home'), "active" => $menu == "home"),
                array('label'=>'Profil',  'url'=>array('/site/profil&mn=profil'), "active" => $menu == "profil"),
                array('label'=>'layanan', 'url'=>array('/site/layanan&mn=layanan'), "active" => $menu == "layanan"),
                array('label'=>'Jadwal', 'url'=>array('/site/jadwal&mn=jadwal'), "active" => $menu == "jadwal"),
                array('label'=>'Kontak', 'url'=>array('/site/kontak&mn=kontak'), "active" => $menu == "kontak"),
                //array('label'=>'Link', 'url'=>'#'),
                // array('label'=>'Master','visible'=>$pengguna['hak_akses'] == 2, 'url'=>'#', 'items'=>array(
                    // array('label'=>'Bus', 'url'=>array('/Bus/index')),
                    // array('label'=>'Kategori', 'url'=>array('/Kategori/index')),
                    // array('label'=>'Jadwal', 'url'=>array('/Rute/admin')),
                    // array('label'=>'Pengguna', 'url'=>array('/Pengguna/index')),
                    // array('label'=>'Pelanggan', 'url'=>array('/Pelanggan/index')),
       
	   // '---',
                    // array('label'=>'NAV HEADER'),
                    // array('label'=>'Separated link', 'url'=>'#'),
                    // array('label'=>'One more separated link', 'url'=>'#'),
                // )),  
				// array('label'=>'Pemesanan Tiket', 'url'=>array('/rute/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Akun', 'url'=>array(''),'visible'=>$pengguna==1,
					'items'=>array(
						array('label'=>'Laporan Pemesanan', 'url'=>array('/site/laporan')),
						array('label'=>'Ganti Password', 'url'=>array('/site/update')),
						array('label'=>'Dataku', 'url'=>array('/site/dataku')),
										
					)
				
				),
				 
				// array('label'=>'Laporan','visible'=>$pengguna['hak_akses'] == 2, 'url'=>'#', 'items'=>array(
                    // array('label'=>'Bulanan', 'url'=>array('/Pemesanan/index')),
				// )),
				// 'items'=>array(
                    // array('label'=>'Pemesanan Tiket',  'url'=>array('/pemesanan/index')),
                    // // array('label'=>'Tunggakan', 'url'=>array('/pelanggan/tunggakan')),
                    // //array('label'=>'Pembayaran', 'url'=>array('/bayar/create')),
               
                // )),
				array('label'=>'', 'url'=>array('/bayar/bayarlangsung'),'visible'=>!Yii::app()->user->isGuest)
				
				
	//			,
            ),
        ),
		
        //'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
             array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>
	
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	
</div><!-- page -->

</body>
</html>
