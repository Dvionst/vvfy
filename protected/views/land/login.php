<link rel="SHORTCUT ICON" href="<?php echo Yii::app()->request->baseUrl;?>/img/gambar.png"/>
<title>
	Login
</title>
<style>
	input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
	  /*background-color: rgb(250, 255, 189);*/
	  background-color: red!important;
	  background-image: none;
	  /*color: rgb(0, 0, 0);*/
	}
	::-webkit-scrollbar {
	width: 7px;
	height: 7px;
	}
	@font-face{
    font-family: ebrima;
    src: url('<?php echo Yii::app()->request->baseUrl; ?>/css/font/ebrima.ttf');
	}
	*{font-family:ebrima ;}
	body{margin:0px!important;}
	.well{
	box-sizing:border-box;
	background:black;
	width:100%;
	height:100%;
	border-radius:5px;
	color:white;
	font-family:ebrima;
	padding:40px 0 0 0px;
	}
	.well input{
	padding:10px;
	border:none;
	}
	.well table td{
	border:none!important;
	}
	.well .red{
	border:none;
	background:red;
	}
	.bold-upper{
	font-weight:bold;
	text-transform:uppercase;
	}
	.well .title{
	color:white;
	}
	.well input[type="password"],.well input[type="text"]{
	color:white;
	background:red;
	font-weight:bold;
	}
	.well input[type="submit"]{
	text-transform:uppercase;
	width:50px;
	background:Red;
	color:white;
	}
	.row {
	background:Red;
	width:400px;
	}
	.row label{
	margin-left:5px;
	}
	.row input[type="password"]{
	}
	#tag{
		font-size:25px;
		position:absolute;
	
	}
	.company{
		font-size:60px;
		margin-left:40px;
	}
	.register{
		background:black;
		color:white;
		border:0px;
		float:right;
		display: none;
	}
	.wrapper{
		width: 1100px;
		background-color: transparent;
		margin:0 auto;
	}
	.wrapper-tag{
		float: left;
		width: 40%;
		position: relative;
	}
	.wrapper-login{
		width:50%;
		float: left;
	}
	.container-login{
		width: 100%;
		background-color: black;
	}
</style>
<style type="text/css">
.wrapper-tag p{
	font-size: 30px;
	color:white;
}
</style>
<h1 class="company">VVFY.land</h1>

	<div class="container-login">
		<div class="wrapper">
			<div class="wrapper-login well">
				
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'login-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
					'validateOnSubmit'=>true,
					),
				)); ?>
				<div class="row">
				<label style="margin-left:10px" for="LoginForm_username" class="required">Username <span class="required"></span></label>
					<?php //echo $form->labelEx($model,'username',array('style'=>'margin-left:10px')); ?>
					<?php echo $form->textField($model,'username',array('style'=>'margin-left:5px')); ?>
				</div>
				<?php echo $form->error($model,'username'); ?>
				<br>
				<div class="row">
				<label style="margin-left:10px" for="LoginForm_password" class="required">Password <span class="required"></span></label>
					
					<?php echo $form->passwordField($model,'password',array('style'=>'margin-left:9px;')); ?>
					<?php echo CHtml::submitButton('LOGIN',array('style'=>'margin-left:35px;cursor:pointer')); ?>
				</div>
				<?php echo $form->error($model,'password'); ?>
				
				<div class="row" style="background:black;">
					<label><?php echo $form->labelEx($model,'password',array('style'=>'visibility:hidden')); ?></label>
				</div>
				<div class="row buttons" style="">
				</div>
				
				<?php $this->endWidget(); ?>
			</div><!-- form -->

			
			<div class="wrapper-tag">
				<p>VVFY.me STRATEGY & OPERATION UNIT</p>
				
			</div>
			<div style="clear:both"></div>
		</div>
	</div>


