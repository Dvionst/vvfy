<html>
	<head>
	</head>
	<body>
		
		<table style="width:100%;background:black;font-family:arial;color:white;padding:30px;" >
			<tr>
				<td><img src="http://vvfy.me/img/gambar.png"></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
		<td style="padding:20px;color:white;">
		<h2>Hello</h2>
		You are invited by <?php echo $name; ?> (your manager) for join vvfy 

		</td>
			</tr>
		
			<tr>
				<td>
					<div style="margin-left:20px;width:200px;height:40px;background:#F5B800;border-radius:10px;cursor:pointer">
						<a target="_blank" style="text-decoration:none;color:white;" 

href="<?php echo Yii::app()->createAbsoluteUrl('employee/new',array('email'=>$email)) ?>"
							><div style="text-transform:uppercase;font-weight:bold;text-align:center;padding-top:10px;">JOIN</div></a>
					</div>
				</td>
			</tr>
			<tr >
				<td style="padding:10px 0 0 20px;color:white;">
				Thanks in advance for giving vvfy a try ! 
			
				<br>Find out more at <a style="color:white" href="http://vvfy.me">http://vvfy.me</a> or on twitter @vvfy
  </td>
			</tr>
			
		</table>
	</body>
</html>