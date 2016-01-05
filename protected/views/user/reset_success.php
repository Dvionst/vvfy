<style>
body{
	background:black;
}
#notification a {
	color:white;
}
#notification{
	width:50%;
	height:200px;
	background:black;
	color:white;
	padding:20px;
	font-family:arial;
}

</style>

<div id="notification">
	<img src="http://vvfy.me/img/gambar.png">
	<h2>
	Congratulations! Your password has been changed
	</h2>
	<a  href="<?php echo Yii::app()->createurl('site/index') ?>">back login</a>
</div>