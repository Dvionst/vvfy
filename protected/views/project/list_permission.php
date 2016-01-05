<td>Permission :</td>
<td>
	<?php 
		
		foreach (MasterPermission::model()->findAll() as $mp): 
			$jumlah = Permission::model()->count("username='$id' and permission_id=$mp->id");
		?>
			<label style="text-transform:uppercase;margin-right:10px;letter-spacing;10px;">&nbsp;<input username="" <?php if($jumlah>=1) echo "checked" ?> name="permission" class="dash-check-permission"   type="checkbox" value="<?php echo $mp->id ?>"><?php echo $mp->value ?></label>
	
	<?php endforeach; ?>
</td>