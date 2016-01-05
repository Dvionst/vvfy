<?php $detail = ProjectDetail::model()->findAll("t.project_id = $id ");  
$no=1;
foreach ($detail as $d):

?>
<tr>
	<?php ?>
	<td style="width:20px"><?php echo $no; ?></td>
	<td>
		<?php $img = Team::model()->findByPk($d->worker_id)->image;  ?>
		<img src="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo $img; ?>" >
	<!--
	<select class="select-user" name="payments" style="width:250px;">
		<option value="0" >select user</option>
	<?php 
		$user = Project::model()->findByPk($de[id])->worker;
		foreach (Team::model()->findAll() as $tim) :?>
		<option <?php if ($d->worker_id==$tim[id]) echo "selected";   ?> value="<?php echo $tim->id ?>" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo $tim->image ?>" data-description=""></option>
	<?php endforeach ;?>

	</select>
	-->
	</td>
	<td align="center">
	<select  class="combo-t-list-user" >
		<option >select</option>
		<?php
		$task = Project::model()->findByPk($de[id])->task;
		foreach (Task::model()->findAll() as $x){ ?>
		<option <?php if ($d->task_id==$x[id]) echo "selected";   ?> value="<?php echo $x->id ?>"><?php echo $x->name ?></option>
		<?php }?>
	</select>

	</td>
	<td align="center">
		<img style="width:10px;cursor:pointer" idw="<?php echo $d->id ?>" class="del-worker" src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png" class="img-folder" title="see files" >
	</td>
</tr>
<?php 
$no++;
endforeach; ?>