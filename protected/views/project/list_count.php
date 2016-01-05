<?php 
$dir = Yii::app()->basePath."/../img/comment";
$listfile = scandir($dir, 1);

$sql = "SELECT pch.*,pc.name_file, pch.id id_pch
FROM
project_comment_head pch
INNER JOIN
project_comment pc
ON 
pch.id = pc.head_project_id
where 
project_id = '$project_id'
and 
type='$type' 
and 
pch.project_views_id = '$view_id'
order by datetime asc
";
// echo $sql;
$listfile = Yii::app()->db->createCommand($sql)->queryAll();
// $listfile = ProjectCommentHead::model()->findAll(" ",array("order"=>"datetime asc"));
// print_r($listfile);
 ?>
<select name="cars" style="width:100%" multiple>
	<option value="new">pilih</option>
	<?php 
		$no = 0;
		foreach($listfile as $dd){ 
		?>
		<option src="<?php echo $dd[name_file]; ?>" value="<?php echo $dd[id_pch]; ?>"><?php echo $no; ?></option>
	<?php
		$no++;
	}?>
	<option value="new">new</option>
</select>
