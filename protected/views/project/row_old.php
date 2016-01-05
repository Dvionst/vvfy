
<?php 
// echo "status".$status;
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
$ids = Status::model()->find("name='$_REQUEST[status]'")->id;
// echo "id: ".$ids."<br>";

if ($ids==''){
$data = Yii::app()->db->createCommand()
->select("*")
->from('project')
->where("status = 1")
->order("id asc")
->queryAll();
}
else{
	// $data = Project::model()->findAll("status=$ids");
$data = Yii::app()->db->createCommand()
->select("*")
->from('project')
->where("status = $ids")
->order("$sortby $ascdesc")
->queryAll();
					
}
	
foreach ($data as $de):?>

	<tr onmousemove="
	$('#primary').val(<?php echo $de[id]?>);
	$('#project_id').val(<?php echo $de[id]?>);
	$('#progres_project_id').val(<?php echo $de[id]?>);
	">
		<td class="primary" style="display:none">
			<?php echo $de->id ?>
		</td>
	<td >
	<div class="circle-user-color" style="background:<?php echo Member::model()->findByPk($de[id_member])->color ?>"	></div>
	</td>
	<td >
		<div class="wrapper-name-project">
		<!--<div class="project-name">LEBANON MALL CITY</div>-->
		<input title="double click for update project name" type="text" disabled class="editable-name" value="<?php echo $de[project_name]  ?>">
		</div>
		<div class="project-btn-wrapper" style="margin-top:10px">
			<div type="button" id="sub-comment" class="sub sub-comment" >Comment</div>
			<div type="button" id="sub-progres" class="sub sub-progress" >Progres</div>
		</div>
	
	</td>
	<td style="font-size:15px;width:20px;margin-top:12px;">
	
		<input class="editable-due" type="date" value="<?php echo $de[due_date] ?>" style="width:140px;border:none" >
	
	</td>
	<td align="center">
		<div class="editable-user">
				<!--
			<img class="img-user" width="40" src="<?php echo Yii::app()->request->baseUrl ?>/img/user.jpg">
				<select class="select-user"style="margin-top:10px;margin-left:-14px">
					<option><img  src="<?php echo Yii::app()->request->baseUrl ?>/img/user.jpg" >Arif</option>
					<option><img  src="<?php echo Yii::app()->request->baseUrl ?>/img/user.jpg" >Yuda</option>
					<option><img  src="<?php echo Yii::app()->request->baseUrl ?>/img/user.jpg" >Riki</option>
				</select>
				-->
				<select class="select-user" name="payments" style="width:250px;">
					<option value="" >select user</option>
					<?php 
					$user = Project::model()->findByPk($de[id])->worker;
					foreach (Team::model()->findAll() as $tim) :?>
					<option <?php if ($user==$tim[id]) echo "selected";   ?> value="<?php echo $tim->id ?>" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo $tim->image ?>" data-description=""></option>
					<?php  endforeach ;?>
					<!--
					<option selected value="Discover" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/rizki-new.jpg" data-description=""></option>
					<option value="cash" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/yuda-new.jpg" data-description="" ></option>
					-->
				</select>
			</div>
	</td>
	<td >
			
		<select class="combo-t" style="display:inline">
		<?php
			$task = Project::model()->findByPk($de[id])->task;
			foreach (Task::model()->findAll() as $d){ ?>
			<option <?php if ($task==$d[id]) echo "selected";   ?> value="<?php echo $d->id ?>"><?php echo $d->name ?></option>
			<?php }?>

		</select>
		
	</td>
	<td class="baris-progres">
		
		<div style="margin-top:30px" class="progresbar pro-bar-container color-belize-hole">
			<div class="pro-bar bar-<?php echo $de['progres']  ?> color-peter-river" data-pro-bar-percent="100" data-pro-bar-delay="200">
				<div class="pro-bar-candy candy-ltr"></div>
			</div>
			<style>
				
			</style>
			<div class="editable-progress">
				<select class="select-progress"style="margin-top:10px;margin-left:-7px">
					<?php
					$progres = Project::model()->findByPk($de['id'])->progres;
					$a = 0; while ($a<=100){?>
					<option <?php if ($progres==$a) echo "selected";   ?>><?php echo $a; ?>%</option>
					<?php $a=$a+10;}?>	
				</select>
			</div>
		</div>
	</td>
	<td >
		<select class="combo-p" style="display:inline">
			<?php 
			$priority = Project::model()->findByPk($de[id])->priority;
			foreach (Priority::model()->findAll() as $d){ ?>
			<option <?php if ($priority==$d[id]) echo "selected";  ?> value="<?php echo $d[id] ?>"><?php echo $d[name] ?></option>
			<?php }?>
		</select>
		<img style="width:20px;display:none" src="<?php echo Yii::app()->request->baseUrl; ?>/img/setting.png" >
	</td>
	<td >
		<select  class="combo-s" style="display:inline">
			<?php 
			$status = Project::model()->findByPk($de[id])->status;
			foreach (Status::model()->findAll() as $d){ ?>
			<option <?php if ($status==$d[id]) echo "selected";  ?> value="<?php echo $d[id] ?>"><?php echo $d[name] ?></option>
			<?php }?>
		</select>
	</td>
	<td>
		<div class="stopwatch">00:00:00</div>
		<button  onclick="" class="img-start" style="border-radius:20px;font-size:15px;margin-top:30px">start</button>
	</td>
	<td>
		<img class="img-del" style="width:20px;margin-top:10px;" title="delete project" src="<?php echo Yii::app()->request->baseurl ?>/img/delete.ico">
		<img style="width:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/setting.png" >

	</td>
</tr>

<?php endforeach; ?>
