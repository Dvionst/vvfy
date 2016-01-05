<?php 
$id = Yii::app()->user->id;
if (Yii::app()->user->level()=='3'){		
	$id_member = Member::model()->find("TRIM(email) = '$id'")->id;
}else{
	$id_member = MemberSub::model()->find("TRIM(email) = '$id'")->id_member;
}
?>
<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/close.png" alt="" class="close-dialog">
<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" alt="" class="loader">
	<h2>List your Employee </h2>
	<table >
		<tr>
			<th>no</th>
			<th>name</th>
			<th>join date</th>
			<th>email</th>
			<th>email invitation</th>
			<th>status</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach (MemberSub::model()->findAll("id_member = '$id_member'") as $ms):  ?>
			<!-- # code... -->
		<tr>
			<td ><?php echo $no ?></td>
			<td><?php echo $ms->name ?></td>
			<td><?php echo $ms->date_invite ?></td>
			<td><?php echo $ms->email ?></td>
			<td><?php 
				if ($ms->status_email==0)
					echo "not sent";
				else
					echo "sent";
			?></td>
			<td><?php 
			if ($ms->status==0)
				echo "un-registered";
			else
				echo "registered";

			?></td>
			<td>
				<img submember='<?php echo $ms->id ?>'  class="delete action"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png" alt="" >
					<?php 
				if ($ms->status_email==0){
					?>
						<a email='<?php echo $ms->email ?>' class="resend-invitation">
							<img  title="resend email" class="resend action"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch Black/envelope.png" alt="" >
						</a>
							<img  title="" class="loader"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" alt="" >
					<?php 
				}

				$no++;
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>