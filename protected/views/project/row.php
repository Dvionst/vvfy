<?php 
	$ids = Status::model()->find("name='$_REQUEST[status]'")->id;
	// echo "id: ".$ids."<br>";
	$level  = User::model()->findByPk(Yii::app()->user->id)->level;
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
foreach ($data as $de):

$count_d = ProjectDetail::model()->count("project_id = $de[id]");

?>

<tr class="baris" style='border-bottom:1px solid black;padding:0px!important' onmousemove="
$('#primary').val(<?php echo $de[id]?>);
$('#project_id').val(<?php echo $de[id]?>);
$('#progres_project_id').val(<?php echo $de[id]?>);
$('#schedule_project_id').val(<?php echo $de[id]?>);
">
	<td class="primary" style="display:none">
		<?php echo $de->id ?>
	</td>
	<td style="font-weight:bold;width:50px;font-size:15px" >
		<p style="margin-top:30px;">	<?php echo "ID-".$de[id] ?></p>
	</td>
	<td align="center">
		<div class="wrapper-name-project">
			<!--<div class="project-name">LEBANON MALL CITY</div>-->
			
				<?php 
				if ($level==1){ 
				?>
				<p style="margin-top:25px" class="p-project-name"><?php echo $de[project_name] ;?></p>
				
				<textarea title="double click for update project name" style="display:none;width:100px;margin-top:-9x;height:50px" type="text"  class="editable-name" value=""><?php echo $de[project_name]  ?></textarea>
				<?php }else{ ?>
				<?php echo $de[project_name] ; ?>
			<?php } ?>
		</div>
		<div class="project-btn-wrapper" style="margin-top:12px;display:none">
			<div type="button" id="sub-comment" class="sub sub-comment" >Comment</div>
			<div type="button" id="sub-progres" class="sub sub-progress" >Progres</div>
		</div>
		
	</td>
	<td align="center"><?php echo $de[id_member] ?></td>
	<td align="center" style="font-size:15px;width:1px!important">
		<?php if ($level==1){ ?>
			<input class="editable-due" type="date" style="margin-left:50px;width:140px;margin-top:12px;" value="<?php echo $de[due_date] ?>" >
			<?php }else{ ?>
			<input disabled class="editable-due" type="date" style="margin-left:50px;width:140px;margin-top:12px;" value="<?php echo $de[due_date] ?>" >
		<?php } ?>
	</td>
	&nbsp;
	<td colspan="3" align="center" style="width:auto;"  >
		<?php if ($level==1 or $level==2 ){ ?>
			
			
			
			
<table style="margin-top:2px;">
<?php $detail = ProjectDetail::model()->findAll("t.project_id = $de[id] ");  
	$no=1;
	$total =  count($detail);
foreach ($detail as $d):
?>
<?php $img = Team::model()->findByPk($d->worker_id)->image;  ?>
<tr class="additional-team" <?php //if ($no==$total) echo "style='border-bottom:1px solid black'" ?> >	


	<!-- row for user -->
	<td style="width:90px;">
		<?php //if ($level==1): ?>
		<img style="width:10px;cursor:pointer;display:inline;" idw="<?php echo $d->id ?>" class="del-worker" src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png" class="img-folder" title="delete" >
		<?php //endif; ?>
		<?php

		 $filename =Yii::app()->basePath."/../img/icon-team/$img";
		if (file_exists($filename)){
		?>		
		<img style="width:30px;" src="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo $img; ?>" >
		<?php }else{ ?>
		<img style="width:30px;" src="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/notfound.jpg ">
		<?php } ?>
	</td>



	<td style="width:100px;">
		<?php if ($level==1){ ?>
		<select style="position:relative;top:-4px;left:-17px" class="combo-t-list-user" idw="<?php echo $d->id ?>" >
			<option>choose<option>						
			<?php
				foreach (Task::model()->findAll() as $x){ ?>
				<option <?php if ($x->id==$d->task_id) echo "selected";   ?> value="<?php echo $x->id ?>"><?php echo $x->name ?></option>
			<?php }?>
		</select>
		<?php }else {
				 echo Task::model()->findByPk($d->task_id)->name;
			}
		 ?>

	</td>
	<td style="width:60px;">	
	<div title="<?php echo $d->progres."% "?>" style="margin-bottom:-10px;width:50px" class="progresbar pro-bar-container color-belize-hole">
		
		<div class="pro-bar bar-<?php echo $d->progres  ?> color-peter-river" data-pro-bar-percent="100" data-pro-bar-delay="200">
			<div class="pro-bar-candy candy-ltr"></div>
		</div>
		
		<div class="editable-progress" >
			<select class="select-progress" idpd="<?php echo $d->id ?>" idw="<?php echo $d->progres ?>">
				<?php
					
					// $progres = Project::model()->findByPk($de['id'])->progres;
					$a = 0; while ($a<=100){?>
					<option <?php if ($d->progres==$a) echo "selected";   ?>><?php echo $a; ?>%</option>
				<?php $a=$a+10;}?>	
			</select>
		</div>
	
	</div>
	</td>
</tr>

<?php 
	$no++;
	endforeach; ?>
			</table>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

			<div class="editable-user" style="display:none">
				<select class="select-user" name="payments" style="width:250px;">
					<option value="0" >add user</option>
					<?php 
						$user = Project::model()->findByPk($de[id])->worker;
					foreach (Team::model()->findAll() as $tim) :?>
						<?php 
						$filename =Yii::app()->basePath."/../img/icon-team/<?php echo $tim->image";
						if ((file_exists($filename))&&($d['image']!="")) {
						?>
						<option value="<?php echo $tim->id ?>" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo $tim->image ?>" data-description=""></option>
						<?php }else{ ?>
						
						<option value="<?php echo $tim->id ?>" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/img/blog/notfound.jpg" data-description=""></option>
						
						<?php } ?>
					<?php endforeach ;?>
					<!--
						<option selected value="Discover" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/rizki-new.jpg" data-description=""></option>
						<option value="cash" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/yuda-new.jpg" data-description="" ></option>
					-->
				</select>
				
			</div>
			<?php 
				
				// foreach (ProjectDetail::model()->findAll("project_id = $de[id]") as $pd):
				// $imgname = Team::model()->findByPk($pd->worker_id)->image;
			?>	
			<div style="display:none"> 
				<img class="del-worker" idw="<?php echo $pd->id; ?>" style="float:left;width:10px;position:relative;" src="<?php echo Yii::app()->request->baseUrl ?>/img/red-delete.png" >
				<img style="margin-left:2px;float:left" src="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo $imgname ?>" >
			</div>
			<?php 
				// endforeach;
			?>
			<select class="select-user" name="payments" style="width:250px;display:none">
				<option value="0" >ADD</option>
				<?php 
					$user = Project::model()->findByPk($de[id])->worker;
				foreach (Team::model()->findAll() as $tim) :?>
				<option value="<?php echo $tim->id ?>" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo $tim->image ?>" data-description=""></option>
				<?php endforeach ;?>
				<!--
					<option selected value="Discover" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/rizki-new.jpg" data-description=""></option>
					<option value="cash" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/yuda-new.jpg" data-description="" ></option>
				-->
			</select>
			<?php } //else{ ?>
			<img  style="display:none"src="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo Team::model()->findByPk($de[worker])->image ?>" alt="no user" >
		<?php //} ?>
	</td>

	<td align="center" >
		<?php if ($level==1){ ?>
			<select class="combo-p" >
				<?php 
					$priority = Project::model()->findByPk($de[id])->priority;
					foreach (Priority::model()->findAll() as $d){ ?>
					<option <?php if ($priority==$d[id]) echo "selected";  ?> value="<?php echo $d[id] ?>"><?php echo $d[name] ?></option>
				<?php }?>
				<?php } else {?>
				<?php echo Priority::model()->findByPk($de[priority])->name  ?>
			<?php } ?>
		</select>
		
	</td>
	<td align="center" >
		<?php if ($level==1){ ?>
			<select  class="combo-s" >
				<?php 
					$status = Project::model()->findByPk($de[id])->status;
					foreach (Status::model()->findAll() as $d){ ?>
					<option <?php if ($status==$d[id]) echo "selected";  ?> value="<?php echo $d[id] ?>"><?php echo $d[name] ?></option>
				<?php }?>
			</select>
			<?php }else{ ?>
			<?php echo Status::model()->findByPk($de[status])->name  ?>
		<?php }?>
	</td>
	<td align="center">
		<select class="select-user-tambah" name="payments" style="width:250px;display:block">
			<option value="0" >ADD</option>
			<?php 
				$user = Project::model()->findByPk($de[id])->worker;
				foreach (Team::model()->findAll("position = 2") as $tim) :?>
				
				<?php 
						$filename =Yii::app()->basePath."/../img/icon-team/$tim->image";
						// $filename =Yii::app()->getBasePath()."\..\img\icon-team\<?php echo $tim->image";
						// echo $filename;
						if ((file_exists($filename))) {
						?>
						<option value="<?php echo $tim->id ?>" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo $tim->image ?>" data-description=""></option>
						<!-- <option value="<?php echo $tim->id ?>" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo $tim->image ?>" data-description=""></option> -->
						<?php }else{ ?>
						
						<option value="<?php echo $tim->id ?>" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/notfound.jpg" data-description=""></option>
						
						<?php } ?>
				<?php endforeach ;?>
			<!--
				<option selected value="Discover" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/rizki-new.jpg" data-description=""></option>
				<option value="cash" data-image="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/yuda-new.jpg" data-description="" ></option>
			-->
		</select>
		<img class="loader-select-user" style="width:30px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" >
		

	</td>
	<td>
		<?php //if ($level==1){ ?>
			<!-- <img style="width:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icon-folder.png" class="img-folder" title="see files" > -->
			
		<?php //} ?>
		
		<?php //if ($level==2){ ?>
		<!-- <img style="width:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/upload.ico" class="img-upload" title="upload" >		 -->
		<!-- <img style="width:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/RedCons/Plus.ico" class="btn-add-views" title="Add views" >		 -->
		<i class=" fa fa-plus-circle btn-add-views"></i>
		<?php //} ?>
			<!-- <img style="width:20px;;height:18px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/schedule.png" class="img-schedule" title="add schedule" > -->
		<i class="fa fa-calendar img-schedule"></i>
		<!-- <a href="<?php echo Yii::app()->createUrl('project/view',array('id'=>$de[id])) ?>"> -->
			<!-- <img style="width:20px;;height:18px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/RedCons/Magnifier.ico"  title="see details" > -->
			<i style="color:black" class="fa fa-search"></i>
		<!-- </a> -->
		
		<!-- <?php if ($level==1){ ?><img class="img-del" style="width:15px;margin-top:10px;" title="delete project" src="<?php echo Yii::app()->request->baseurl ?>/img/red-delete.png"><?php } ?> -->
		<i class="fa-times fa img-del"></i>
		<?php if ($level==1 || $level==2 ){ ?>
		<!-- <img class="img-set-user" style="width:15px;margin-top:10px;height:18px" title="set user" src="<?php echo Yii::app()->request->baseurl ?>/img/red-user.png"> -->
		<?php } ?>
	</td>
</tr>

<?php endforeach; ?>
