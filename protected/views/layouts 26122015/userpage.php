<html>
	<head>
		
	<title>Client page</title>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Vfy.me is an Art And Tech  Studio dedicated to incorporate The Latest  Visual Inventions in form of services for Architects And Designers, Our Team is a Mix Of Architects, Designer, 3D Artists and Developers, Our Business is founded in  Beirut - Lebanon And operates from Bandung - Indonesia ">
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/scrollTo/jquery.scrollTo.min.js"></script>

		<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/isotope-docs.min.js"></script>
		-->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/slides/jquery.slides.min.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/blog.css" type="text/css" />
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/zabuto/zabuto_calendar.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/zabuto/zabuto_calendar.min.css">

		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/modernizr.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jcarousel.transitions.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jcarousel.transitions.css">
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/carousel/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate/animate.min.css">


		<!-- jQuery UI -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/jquery.ui.core.1.10.3.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/jquery.ui.widget.1.10.3.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/jquery.ui.mouse.1.10.3.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/jquery.ui.draggable.1.10.3.min.js"></script>

		<!-- wColorPicker -->
		<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/wColorPicker.min.css" />
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/wColorPicker.min.js"></script>

		<!-- wPaint -->
		<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/src/wPaint.css" />
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/src/wPaint.utils.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/src/wPaint.js"></script>

		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/plugins/main/wPaint.menu.main.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/plugins/text/wPaint.menu.text.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/plugins/shapes/wPaint.menu.main.shapes.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/plugins/file/wPaint.menu.main.file.min.js"></script>
		
		<!-- Toast -->
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/toast/src/main/javascript/jquery.toastmessage.js"></script>
		<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/toast/src/main/resources/css/jquery.toastmessage.css" />

		<!-- slider of pik -->
		<!--
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/lib/jquery.touchwipe.min.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/piko/styles/bottom.css" type="text/css" />
		<!-- end of slider -->

		<!--
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slipry/dist/slippry.min.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/slipry/dist/slippry.css" type="text/css" />
		-->
		<!-- news -->
        <!--
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/news/jquery.smartmarquee.js"></script>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/news/jquery.smartmarquee.css" type="text/css" />
		
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor-simple/ckeditor.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/adapter.js"></script>
		-->
		
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

	

	<body>
	<?php 
		// $this->renderPartial('application.views.layouts.left-menu');
	?>
	<div id="menu-form">
		
	</div>
	<header class="top-header">
		<div id="header-center">
			<div  class="control_toggle"></div>
			
			<div id="menu">
				<ul>
					<li><a href="#home" >HOME</a></li>
					<li><a style="color:red" href="#calendar">PROJECTS</a></li>
					<li><a href="#project">NEWS FEED</a></li>
					<li><a href="<?php echo Yii::app()->createUrl('site/logout') ?>">LOGOUT</a></li>
				</ul>
			</div>
		</div>
		<a class="logo" href="<?php echo Yii::app()->createUrl('blog/index') ?>">
			<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png">
		</a>
	</header>
		 <div id="wrapper-appcomment" >
		 	<div class="full"></div>
		 	<div class="modal-comment">
		 		<h1>Insert the comment</h1>
		 		<form id="form-appcomment" >
			 		<textarea required id="appcomment-text"></textarea>
			 		<input type="submit" value="Send">
		 		</form>
		 	</div>
			<?php $this->renderPartial('appcomment'); ?>
		</div>
		<style type="text/css">
		#body-full{
			position: fixed;
			z-index: 206;
			width: 100vw;
			height: 100vh;
			background-color: black;
			display: none;
		}
		</style>
		<div id="body-full"></div>
		<?php	$this->renderPartial("form_add_project"); ?>

	<div id="wrapper">
		<?php  echo $content;?>
	</div>

	</body>
	<html>	