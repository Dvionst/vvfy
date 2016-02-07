<hr>
<label for="clientID">Preview</label>
<?php 
	$dir = Yii::app()->basePath."/../img/comment";
	$listfile = scandir($dir, 1);
	$sql = "SELECT
	name_file,pch.datetime
	FROM
	project_comment_head pch
	INNER JOIN
	project_comment pc
	ON
	pch.id = pc.head_project_id
	WHERE
	pc.head_project_id = '$comment_id' ";
	$model = Yii::app()->db->createCommand($sql)->queryRow();
?>
<div class="wrapper-img-progres">
	<a class="swipebox" href="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo  $model['name_file']; ?>">
		<img class="img-progres" src="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo  $model['name_file']; ?>">
	</a>
	<div class="date">
		<?php echo date('d M Y H:i',strtotime($model[datetime]));?>
	</div>
</div>
