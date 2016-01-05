<?php
	$sql = "SELECT pv.id id, pv.view_name, pv.created_date,
			COUNT(pch.id) total
			FROM project_views pv LEFT JOIN 
			project_comment_head pch ON pch.project_views_id = pv.id 
			where  pv.project_id = '$id'
			GROUP BY pv.id
			ORDER BY pv.id

		";

	$model = Yii::app()->db->createCommand($sql)->queryAll();
	$no = 1;
?>
<?php foreach ($model as $key ) { ?>
	<tr vid="<?php echo $key['id'] ?>" class="table-views-rows">
		<td><?php echo $no; ?></td>
		<td><?php echo $key['view_name']; ?></td>
		<td><?php echo $key['created_date']; ?></td>
		<td align="right"><?php echo $key['total']; ?></td>
		<td>
			<img vid="<?php echo $key['id'] ?>" style="width:15px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/upload.ico" class="btn-action img-upload" title="upload" >		
			<img vid="<?php echo $key['id'] ?>" style="width:15px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png" class="btn-action img-delete" title="Delete" >		
			<img vid="<?php echo $key['id'] ?>" style="width:21px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/rsz_feedback.png" class="btn-action img-feedback" title="Feedback" >		
		</td>
	</tr>
<?php $no++;} ?>


