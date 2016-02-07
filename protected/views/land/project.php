<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/land.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/progress/normalize.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/progress/pro-bars.min.css" rel="stylesheet" type="text/css" media="all" /> -->
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/progress/style.min.css" rel="stylesheet" type="text/css" media="all" />

<!--
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/smoothscroll.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/appear.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/backbone.js" type="text/javascript"></script>
-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/pro-bars.min.js" type="text/javascript"></script>
<!--
<link  href='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/fullcalendar.css' rel='stylesheet' />
<link  href='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/fullcalendar.print.css' rel='stylesheet' media='print' />
-->

<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/lib/moment.min.js'></script>
<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/msdropdown/jquery.dd.min.js'></script>
<!--s
<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/fullcalendar.min.js'></script>
<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.timer.js'></script>
-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/dd.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/sprite.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/skin2.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/sprite.css" />

<style type="text/css">
	.p-project-name{
		width: 100px;
	}
	.loader-select-user{
		display: none;
	}
	#form-set-user table{
		width:500px;
	}
	#form-set-user table thead tr td{
		border-bottom:1px solid black ;
		
	}
	#form-set-user{
		-webkit-border-radius:10px;
		-moz-border-radius:10px;
		border-radius:10px;
		width:600px;
		position:fixed;
		z-index  :909;
		top:100px;
		left:30%;
		right:30%;
		background:white;
		border:1px solid black;
		padding:20px;
		display:none;
	}
	#loader-list-user{
		display:none
	}
	.additional-team td{	
		padding:0px!important;
	}

	.loader-form-add{
		display:none;
	}
</style>
<div id="overlay"></div>

<?php $this->renderPartial('form/form_add_views');?>
<?php $this->renderPartial('form/form-project');?>
<?php $this->renderPartial('form/form_add_schedule');?>
<?php $this->renderPartial('form/form_set_user');?>
<?php $this->renderPartial('form/form_comment');?>
<?php $this->renderPartial('form/form_progress');?>

</div>

<div id="status"></div>
<div id="form-add"></div>
<div id="wrapper">
	<?php $this->renderPartial('content');?>
	<?php //include('content.php') ?>	
</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.swipebox.js"></script>	
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/swipebox.css">

