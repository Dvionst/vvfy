<style type="text/css">
	body{
		font-family: arial;

		padding: 0px!important;
		margin: 0px!important;
		background-color: #161616;
	}
	#header{
		width: 100%;
		height: 100px;
		background-color: black;
	}
	
	#wrapper{
		margin: 0 auto;
		width: 900px;
		height: auto;
	}
	.warning{
		width: 100px;
	}
	.error{
		font-size: 25px;
		color: white;
	}
	a.link{
		color: #F5B800;
	}
	a.link:hover{
		text-decoration: none;
		color: white;
	}
	.logo_retina{
		display: none;
	}
</style>
<?php 
$this->renderPartial("application.views.layouts.left-menu");
?>
<a title="menu" href="javascript:void(0)"  class="control_toggle"> </a>


<div id="header">
	<!-- <img class="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png"> -->
</div>

<div id="wrapper">	
	<center>		
		<div class="error">
			<img class="warning" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Tango/warning.ico">
			<h2>Error <?php echo $code; ?></h2>
			<?php echo CHtml::encode($message); ?>
		</div>
		<br>
			<?php 
			$level = Yii::app()->user->level();
			// echo $level;
			if ($level==1 || $level==2){ ?>
				<a class="link" href="<?php echo Yii::app()->createUrl('land/dashboard',array()); ?>">Back Home</a>
			<?php }else{ ?>
				<a class="link" href="<?php echo Yii::app()->createUrl('client/index',array()); ?>">Back Home</a>
			<?php } ?>
	</center>
</div>