<!DOCTYPE html>
<html>
	<head>
		
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Vfy.me is an Art And Tech  Studio dedicated to incorporate The Latest  Visual Inventions in form of services for Architects And Designers, Our Team is a Mix Of Architects, Designer, 3D Artists and Developers, Our Business is founded in  Beirut - Lebanon And operates from Bandung - Indonesia ">

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" media="all">


		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
		
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/slides/jquery.slides.min.js"></script>
		
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/modernizr.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jcarousel.transitions.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jcarousel.transitions.css">
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jquery.jcarousel.min.js"></script>

		<!-- slider of pik -->
		<!--
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.touchwipe.min.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/styles/bottom.css" type="text/css" />
		<!-- end of slider -->

		
        
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/slipry/dist/slippry.css" type="text/css" />

		<!-- news -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/news/jquery.smartmarquee.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/news/jquery.smartmarquee.css" type="text/css" />

		
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor-simple/ckeditor.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/adapter.js"></script>
		
		<!-- responsive slider -->
		<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/respon/responsiveslides.css">
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/respon/responsiveslides.js"></script>
		 -->
		<!-- <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog-mobile400.css" type="text/css" media="only screen and (max-width: 399px) and (min-width: 10px)" /> -->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog-mobile.css" type="text/css" media="only screen and (max-width: 768px) and (min-width: 10px)" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog-tab.css" type="text/css" media="only screen and (max-width: 960px) and (min-width: 768px)" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog-computer.css" type="text/css" media="only screen and (min-width: 960px) and (max-width: 10000px)" />
		<!--[if lt IE 9]>
		  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog-computer.css"/>
		<![endif]-->
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/left-menu.css" type="text/css" />
	</head>
	<style>
	
	</style>
	
	

	<body>

	<?php 
		include 'left-menu.php';
	?>
	<a title="menu" style="background-image : url('<?php echo Yii::app()->baseUrl?>/img/diamond_sprite.png')" href="javascript:void(0)"  class="control_toggle"> 
	</a>
	<div id="header">
		<div id="header-center">
		
			<div id="menu">
				<ul>
					<li><a href="<?php echo Yii::app()->createUrl('site/index') ?>">HOME</a></li>
					<li><a href="#">|</a></li>
					<li><a class="active all" href="<?php echo Yii::app()->createAbsoluteUrl('blog/index',array('category'=>'')) ?>" id="a2">ALL</a></li>
					<li><a class="design" href="<?php echo Yii::app()->createAbsoluteUrl('blog/index',array('category'=>'design')) ?>" id="a2">DESIGN</a></li>
					<li><a class="business" href="<?php echo Yii::app()->createAbsoluteUrl('blog/index',array('category'=>'business')) ?>" id="a2">BUSINESS</a></li>
					<li ><a class="digitization" href="<?php echo Yii::app()->createAbsoluteUrl('blog/index',array('category'=>'digitization')) ?>" id="a2">DIGITIZATION</a></li>
				</ul>
			</div>
		</div>
		<a class="logo-blog" href="<?php echo Yii::app()->createUrl('blog/index') ?>">
			<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png">
		</a>

	</div>
	<?php
		include('overlay.php');
	?>
	<div id="wrapper">
		<?php  echo $content;?>
	</div>


	<script>
		$(document).ready(function(){	
			$('html,body').css({'overflow':'hidden'});
			$('#wrapper').imagesLoaded( function(){
				// alert('sukses');
				$('#overlay').fadeOut();
				$('html,body').css({'overflow':'visible'});
			});

			var didScroll;
			var lastScrollTop = 0;
			var delta = 5;
			var navbarLimit = 400;

			function hasScrolled() {
			    var st = $(this).scrollTop();

			    // Make sure they scroll more than delta
			    if(Math.abs(lastScrollTop - st) <= delta)
			        return;
			    
			    // If they scrolled down and are past the navbar, add class .nav-up.
			    // This is necessary so you never see what is "behind" the navbar.
			    if (st > lastScrollTop && st > navbarLimit){
			        // Scroll Down
			        $('#header').removeClass('nav-down').addClass('nav-up');
			    } else {
			        // Scroll Up
			        if(st<navbarLimit) { //st + $(window).height() < $(document).height()
			            $('#header').removeClass('nav-up').addClass('nav-down');
			        }
		    	}
		    	lastScrollTop = st;
			}

			$(window).scroll(function(event){
				didScroll = true;
			});

			setInterval(function() {
			    if (didScroll) {
			        hasScrolled();
			        didScroll = false;
			    }
			}, 250);	

		});

	</script>
	</body>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slipry/dist/slippry.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/packery-mode.pkgd.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseurl; ?>/js/imagesloaded.pkgd.min.js"></script>
	<html>	


