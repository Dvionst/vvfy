<style type="text/css">
	.img-progres{
		width: 100%;
	}
	.wrapper-img-progres{
		height: 200px;
		overflow: hidden;
	}
</style>
<label for="clientID">Download</label>
<?php 
$dir = Yii::app()->basePath."/../img/comment";
$listfile = scandir($dir, 1);
$listfile = ProjectComment::model()->find("head_project_id=$comment_id");

?>
<div class="wrapper-img-progres">
	<a class="swipebox" href="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo  $listfile['name_file']; ?>">
		<img class="img-progres" src="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo  $listfile['name_file']; ?>">
	</a>
</div>

<!-- <select id="data-comment" name="cars" style="width:100%" multiple>
	<?php foreach($listfile as $dd){ ?>
		<option value="<?php echo $dd->name_file; ?>"><?php echo substr($dd->name_file,11); ?></option>
	<?php }?>
</select>

 -->