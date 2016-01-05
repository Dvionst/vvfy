<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
	<link rel="SHORTCUT ICON" href="<?php echo Yii::app()->request->baseUrl;?>/img/gambar.png"/>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/land.css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/progress/normalize.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/progress/pro-bars.min.css" rel="stylesheet" type="text/css" media="all" />
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/smoothscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/appear.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/pro-bars.min.js" type="text/javascript"></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/msdropdown/jquery.dd.min.js'></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/te/jquery-te-1.4.0.css" />
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/te/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/sumo/jquery.sumoselect.js'></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js'></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/adapter.js'></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/sumo/sumoselect.css" />

	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/tag-editor/jquery.caret.min.js'></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/tag-editor/jquery.tag-editor.min.js'></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/tag-editor/jquery.tag-editor.css" />

	<!-- plugin chart  -->
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/chart/Chart.js'></script>
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/isotope-docs.min.js"></script>

	<!-- swipebox  -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.swipebox.js"></script>	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/swipebox.css">

		<!--
	<link  href='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/fullcalendar.css' rel='stylesheet' />
	<link  href='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/fullcalendar.print.css' rel='stylesheet' media='print' />
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/lib/moment.min.js'></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/fullcalendar.min.js'></script>
	-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/dd.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/sprite.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/skin2.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/sprite.css" />
	
	
	<title><?php echo "VVFY register as employee " ?></title>
<style>
	body{
		background-color: black;
	}
	.form,h1,p{
		color: white;
	}

	.filter{
	float:right;
	}
	.total{
	font-weight:bold;
	}
	.editable-progress{
	width:50px;
	position:absolute;
	display:none;
	}
	.editable-user{
	width:50px;
	}
	.editable-name{
	margin-bottom:10px;
	}
	#overlay{
	width:100%;
	height:100%;
	position:fixed;
	display:none;
	}
	#loader-row,.loader-row-form{
	display:none;
	}
	#form-add-schedule{
		display:none;
		border-radius:10px;
		webkit-border-radius:10px;
		moz-border-radius:10px;
		border:1px solid black;
		background:white;
		width:300px;
		position:fixed;
		z-index:99;
		top: 20%;
		left: 50%;
		margin-top: -100px;
		margin-left: -250px;
		padding:20px;
	}
	#form-add-schedule textarea,#form-add-schedule input,#form-add-schedule select{
		border:1px solid gray;
	}
	input[type="date"]{
		border-radius:8px;
	}
	.img-action{
		cursor:pointer;
	}
	.mintop{
		top:-70px;
		position:relative;
	}
	.nav-up {	
   	 display: none;
	}
	.nav-down {	
   	 display: block;
	}
	</style>
	

</head>
<body>

<div id="full-screen"></div>
<!-- HAHAH -->
<?php include('dist/jquery.php') ?>
	<div id="wrapper" style="margin-left:auto;margin-right:auto">
		<header style="margin-bottom:20px">
			<div class="title">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" style="width:200px;height:auto">
			</div> 
			<div class="categori-tab">
				<ul class="main-tab" style="margin-top: 25px;">
					
				</ul>
			</div>
		</header>
		<?php echo $content; ?>
	</div>
	</body>
</html>
	