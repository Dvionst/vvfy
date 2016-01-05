<style type="text/css">
	#all-project-client{
		background-color: white;
		width: 100%;
		height: 100%;
		position: fixed;
		top: 0px;
		bottom: 0px;
		left: 0px;
		right: 0px;
		display: none;
		z-index: 70;
	}
	#all-project-client table {
		width: 800px;
		margin: 0 auto;
		margin-top:70px;
	}
	#all-project-client h1{
		text-align: center;
	}
	#all-project-client table tr td{
		border:1px solid black;
		padding: 10px;
	} 
</style>
<?php 
$all_project_client = Yii::app()->db->createCommand()
->select("*")
->from('project')
->where("STATUS =1 and id_member = '$id_member' ")
->queryAll();
?>
<div id="all-project-client">
	<img class="close-dialog close"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/close.png" alt="" >

<h1>LIST PROJECT</h1>
	<table>
		<tr>
			<td style="width:20px;">No</td>
			<td>Project Name</td>
			<td>action</td>
			<!-- <td>Status</td> -->
		</tr>
		<?php 
		$no = 1;
		foreach ($all_project_client as $apc) {?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $apc[project_name]; ?></td>
			<td>
				<a href="<?php echo Yii::app()->createUrl('project/view',array('id'=>$apc['id'])) ?>">
					<img style="width:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch Black/search.ico">
				</a>
			</td>
		</tr>
		<?php 
		$no++;
		} ?>
	</table>
</div>