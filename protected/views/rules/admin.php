<style type="text/css">

	.table-rules{	
		/*border:1px solid black;*/
	}
	
	.table-rules tr td{
		border:1px solid black;
		padding: 5px;
	}
	.table-rules tr td input[type="checkbox"]{
		cursor: pointer;
	}
	#wrapper-rules{
		/*width: 100%;*/
		overflow-x:auto 
	}
	#wrapper-rules .fa-cog{
		display: none;
		/*opacity: 0;*/
	}
	
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on("click",".cek-rules",function(e){
			// alert("masuk");
			// alert($(this).val());
			var i = $('.cek-rules').index(this);
			var user= $(this).attr("data-user");
			var per_id = $(this).attr("data-per");
			var bool;
			if ($(this).is(":checked"))
				bool = true;
			else
				bool = false;

			// alert(bool);

			$.ajax({
				url : '<?php echo Yii::app()->createUrl('rules/setpermission') ?>',
				data : {
					user : user,
					per_id : per_id,
					bool : bool
				},
				cache : false,
				beforeSend : function(data){
					$(".fa-cog").eq(i).show();
					$('.cek-rules').eq(i).hide();
				},
				success : function(data){
					// alert(data);
					$('.cek-rules').eq(i).show();
					$(".fa-cog").eq(i).hide();
					// $(".fa-cog").eq(i).hide();
					// $(this).show();

				},
				error :function(d){
					alert(JSON.stringify(d));
					window.location.reload();
				}
			});
		});
	});
</script>
<?php 
$permission = MasterPermission::model()->findAll();
$user = User::model()->findAll("level = 1 or level=2");
$no = 1;
?>
<div id="wrapper-rules">
	<table class="table-rules table">
		<thead>
			<tr>
				<td>No</td>
				<td style="width:250px;">name</td>
				<?php foreach ($permission as $p) {?>
					<td><?php echo $p->value ?></td>
				<?php }  ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($user as $u) {?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $u->username; ?></td>
				<?php foreach ($permission as $p) {?>

					<td align="center" style="position:relative">
						<?php //echo $p->id ?>
						<?php 
						// $cek =  Permission::model()->count("permission_id = '$p->id' and username = '$u->username' ");
						$cek = Yii::app()->db->createCommand("select * from permission where permission_id = '$p->id' and username = '$u->username' and status = 1 ")->queryAll();
						// echo "<pre>";
						// print_r($cek);
						// echo "</pre>";
						$cek = count($cek);
						// echo $cek;
						if ($cek==0)
							$checked = " ";
						else
							$checked = " checked ";
						?>
						<input <?php echo $checked ?>  data-per="<?php echo $p->id ?>" data-user="<?php echo $u->username ?>" type="checkbox"  class="cek-rules">
						<i class="fa fa-cog fa-spin" style="color:black"></i>
					</td>
				<?php }  ?>
			</tr>

			<?php 
			$no++;
			}?>
		</tbody>
	</table>
</div>
