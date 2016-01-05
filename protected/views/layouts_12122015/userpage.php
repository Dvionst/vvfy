<html>
	<head>
		
	<title>Client page</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Vfy.me is an Art And Tech  Studio dedicated to incorporate The Latest  Visual Inventions in form of services for Architects And Designers, Our Team is a Mix Of Architects, Designer, 3D Artists and Developers, Our Business is founded in  Beirut - Lebanon And operates from Bandung - Indonesia ">
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/isotope-docs.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/slides/jquery.slides.min.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog.css" type="text/css" />
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/zabuto/zabuto_calendar.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/zabuto/zabuto_calendar.min.css">

		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/modernizr.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jcarousel.transitions.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jcarousel.transitions.css">
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate/animate.min.css">

		<!-- slider of pik -->
		<!--
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.touchwipe.min.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/styles/bottom.css" type="text/css" />
		<!-- end of slider -->

		
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slipry/dist/slippry.min.js"></script>
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

	</head>
	<style>
	html {
		text-rendering: optimizeLegibility !important;
		-webkit-font-smoothing: antialiased !important;
	}
	</style>
	<script>
	// function reload(){
	// 	var $container = $('#wrapper-post').isotope({
	// 		itemSelector: '.post',
	// 		masonry: {
	// 			columnWidth: 3
	// 		}
	// 		});
	// 	}
	// jQuery(document).ready(function(){
	//   jQuery('#demo1').slippry();
	//   // reload();

	// });


	// var didScroll;
	// var lastScrollTop = 0;
	// var delta = 5;
	// var navbarHeight = $('header').outerHeight();

	// $(window).scroll(function(event){
 //  	  didScroll = true;
 //  	  reload();
	// });

	// setInterval(function() {
	//     if (didScroll) {
	//         hasScrolled();
	//         didScroll = false;
	//     }
	// }, 250);

	// function hasScrolled() {
	//     var st = $(this).scrollTop();
	    
	//     // Make sure they scroll more than delta
	//     if(Math.abs(lastScrollTop - st) <= delta)
	//         return;
	    
	//     // If they scrolled down and are past the navbar, add class .nav-up.
	//     // This is necessary so you never see what is "behind" the navbar.
	//     if (st > lastScrollTop && st > navbarHeight){
	//         // Scroll Down
	//         $('header').removeClass('nav-down').addClass('nav-up');
	//     } else {
	//         // Scroll Up
	//         if(st + $(window).height() < $(document).height()) {
	//             $('header').removeClass('nav-up').addClass('nav-down');
	//         }
 //    }
    
 //    lastScrollTop = st;

	// }


	// $(document).ready(function() {
	// 	$("#news").smartmarquee();

	// 	$(document).on('click', '.hamburger', function(e) {
	// 		$('#full').show();
	// 		$('#menu-form').slideToggle();
	// 	});

	// 	// $("#pikame").PikaChoose({carousel:true,carouselOptions:{wrap:'circular'}});
	// 	// $('.simple-editor').ckeditor();
	// 	// $("header").headroom();

	//   // $("#blog-slider").responsiveSlides({
	// 	 // speed: 500, 
	// 	 //  nav: true, 
	// 	 //  timeout: 6000,  
	// 		// pause: false,  
	// 		// // Boolean: Pause on hover, true or false
	// 		// pauseControls: true,    // Boolean: Pause when hovering controls, true or false
	// 		// prevText: " ",   // String: Text for the "previous" button
	// 		// nextText: " ",  

	//   // });
	// 	// 	reload();
	// 	// $( window ).scroll(function() {
	// 	// 	// reload(); 	
	// 	// });
	
	// });
	</script>
	

	<body>
	<?php 
		// $this->renderPartial('application.views.layouts.left-menu');
	?>
	<div id="menu-form">
		
	</div>
	<header class="top-header">
		<div id="header-center">
			<div id="menu-icon"></div>
			
			<div id="menu">
				<ul>
					<li><a href="<?php echo Yii::app()->createUrl('site/index') ?>">HOME</a></li>
					<li><a style="color:red" href="#">PROJECTS</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('blog/index') ?>">BLOG</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('site/logout') ?>">LOGOUT(<?php echo Yii::app()->user->name ?>)</a></li>
				</ul>
			</div>
		</div>
		<a class="logo" href="<?php echo Yii::app()->createUrl('blog/index') ?>">
			<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png">
		</a>
	</header>
 
	<div id="wrapper">
		<?php  echo $content;?>
	</div>

	</body>
	<html>	