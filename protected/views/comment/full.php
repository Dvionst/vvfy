<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<style type="text/css">
	body{
		margin:0!important;
		padding:0!important;
	}
	.close-dialog,.text-mail{
		width: 20px;
		position: absolute;
		top:5px;
		right: 5px;
		cursor: pointer;
		z-index: 1;
	}
	.text-mail{
		right: 30px;
		width: 25px;
		margin-top: -3px;
	}
	.close-text{
		right: 0px;
		width: 25px;
		margin-top: -3px;
	}
	#comment-text{
		position: absolute;
		background-color: rgba(1,1,1,0.8);
		width: 100vw;
		height: 100vh;
		z-index: 2;
		display: none;
		color: white;
		padding: 10px;
		box-sizing:border-box;
	}
	#comment-text table{
		border:1px solid white;
		border-collapse: collapse;
		width: 100%;
	}
	#comment-text table tr td{
		padding: 5px;
		color: white;
		box-sizing:border-box;

	}
	.gambar{
		margin:0 auto;
		width:60%;
		height:auto;
		background-size:100% 100%;
		background-image:url('<?php echo Yii::app()->request->baseUrl."/img/comment/$file" ?>');

	}

</style>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('click','.text-mail',function(e){
			e.preventDefault();
			$('#comment-text').show();
		});
		$(document).on('click','.close-text',function(e){
			e.preventDefault();
			$('#comment-text').hide();
		});


	});
</script>
<div id="comment-text">
	<img style="position:fixed" class="close-dialog close-text"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch White/delete.ico" alt="" >
	<h1>List Comment</h1>
	<table border="1" >
		<tr>
			<td style="width:10%">No</td>
			<td>Description</td>
			<td>Action</td>
		</tr>
		<?php 
		$no = 1;
		foreach (MemberCommentDetail::model()->findAll("head_id = '$id'") as $key) { ?>
		<tr>
			<td><?php echo $key[no]; ?></td>	
			<td><?php echo $key[description]; ?></td>	
			<td><img style="width:20px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/IcoJam 16/action_check.png"></td>	
		</tr>
		<?php  
		$no++;
		} ?>
	</table>
</div>

<a href="<?php echo Yii::app()->createUrl('land/uploaded'); ?>">
	<img style="position:fixed" class="close-dialog close"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png" alt="" >
</a>

<a href="<?php echo Yii::app()->createUrl('land/uploaded'); ?>">
	<img style="position:fixed" class="close-dialog close text-mail"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/RedCons/Mail.ico" alt="" >
</a>

<img class="gambar" src="<?php echo Yii::app()->request->baseUrl."/img/revisi/$id.png"?> ">