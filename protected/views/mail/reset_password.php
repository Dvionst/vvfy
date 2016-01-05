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
				<td style="padding:20px;color:white;">Hello,

				We were asked to reset your VVFY account. Follow the instructions below if this request comes from you.

				Ignore the E-Mail if the request to reset your password does not come from you. Don't worry, your account is safe.

				Click the following link to set a new password.</td>
			</tr>
		
			<tr>
				<td>
					<div style="margin-left:20px;width:200px;height:40px;background:#F5B800;border-radius:10px;cursor:pointer">
						<a target="_blank" style="text-decoration:none;color:white;" href="<?php echo Yii::app()->createAbsoluteUrl('user/recovery',array('token'=>$token)) ?>"><div style="text-transform:uppercase;font-weight:bold;text-align:center;padding-top:10px;">Change Password</div></a>
					</div>
				</td>
			</tr>
			<tr >
				<td style="padding:10px 0 0 20px;color:white;">
				If clicking the link doesn't work you can copy the link into your browser window or type it there directly.
  </td>
			</tr>
			
		</table>
	</body>
</html>