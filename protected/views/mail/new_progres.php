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
		<td style="padding-left:20px" >
			<h2 style="color:white">Hello <?php echo $model[name] ?>  </h2>
			<p style="color:white">
				The team of vvfy just sent progress :
			</p>
			<table style="color:white;">
				<tr>
					<td>Project Name</td>
					<td>:</td>
					<td><?php echo $model[project_name] ?></td>
				</tr>
				<tr>
					<td>View Name</td>
					<td>:</td>
					<td><?php echo $model[view_name] ?></td>
				</tr>

			</table> 

		</td>
			</tr>
		
			<tr>
				<td>
					<div style="margin-left:20px;width:200px;height:40px;background:#F5B800;border-radius:10px;cursor:pointer">
						<a target="_blank" style="text-decoration:none;color:white;" 

href="<?php echo Yii::app()->createAbsoluteUrl('site/index') ?>"
							><div style="text-transform:uppercase;font-weight:bold;text-align:center;padding-top:10px;">CHECK</div></a>
					</div>
				</td>
			</tr>
			<tr >
				<td style="padding:10px 0 0 20px;color:white;">
				Please check it out, if you have comment, please comment it asap :) 
			
				<br>Find out more at <a style="color:white" href="http://vvfy.me">http://vvfy.me</a> or on twitter @vvfy
  </td>
			</tr>
			
		</table>
	</body>
</html>