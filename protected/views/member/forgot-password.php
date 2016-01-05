<html>
	<head>
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme.css" type="text/css" media="all" />
	
		<style>
		body{
			background:black;
			padding:20px;
		}
		#body-fp tr td h1{
			color:white;
		}
		</style>
	</head>
	<body>
		
		<table id="body-fp" >
			<tr><td><h1>REQUEST FORGET PASSWORD</h1></tr>
			<tr><td><input type="text" placeholder="email" ></td></tr>
			<tr><td><input style="background:#F5B800;color:black" type="submit" placeholder="email"value="send " ></td></tr>
		</table>
	</body>
</html>