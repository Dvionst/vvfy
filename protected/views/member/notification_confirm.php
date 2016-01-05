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
	Thank You! A Confirmation Email has Been Sent to Your Email, Please Click on the verify 
	</h2>
	<p>
	Just one more step!  Please check your email and confirm your subscription then you will be emailed
	</p>
	<a  href="<?php echo Yii::app()->request->baseUrl ?>">back</a>
</div>