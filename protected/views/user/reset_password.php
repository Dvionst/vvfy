<style>
body{
	background:#161616;
	margin:0px;
	overflow: hidden;
}
#content a {
	color:white;
}
#content{
	width:100%;
	height:auto;
	background:transparent;
	color:white;
	padding:20px;
	font-family:arial;
}

#header{
    position: relative;
    width: 100%;
    height: 100px;
    background: black;
    margin: 0px;
}

input[type="password"]{
	background-color: rgba(77,77,77,1)!important;
    border: 1px solid #191919;
    padding:7px;
}

input[type="submit"]{
	background-color: #F5B800;
    border: none;
    padding:7px;
    cursor: pointer;
}


</style>
<div id="header"><img src="http://vvfy.me/img/gambar.png"></div>
<div id="content">
	<?php 
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'reset-form',
		'method' => 'POST',     
	)); ?>

	<?php echo $form->passwordField($model,'new_password',array("placeholder"=>"Password")); ?>
	<br><br>

	<?php echo $form->passwordField($model,'new_password_repeat',array("placeholder"=>"Confirm Password")); ?>
	<br><br>

	<input style="background:#F5B800;color:black" type="submit" placeholder="email"value="SUBMIT" >
	<br><br>
	<?php echo $form->error($model,'new_password'); ?>
	<?php $this->endWidget(); ?>
</div>