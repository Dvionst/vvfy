		<?php if (User::model()->findByPk(Yii::app()->user->id)->level==2): ?>
		<div  id="sp">
			<div class="left">
				<br>
				<b style="font-size:20px">WORKING ON</b>
				<br>
				<p style="text-transform:uppercase" class="project-name" >
				<?php 
					// echo Yii::app()->user->id;
					$userid = Team::model()->find("username='".Yii::app()->user->id."'")->id;

					// $userid;
					$pd = ProjectDetail::model()->find("worker_id='$userid'")->project_id;
					// echo $pd;
					echo Project::model()->findByPk($pd)->project_name;
				?></p>
			</div>
			<div class="right">
			<?php 
			$liststatus = Task::model()->findAll() ;
			$id = Yii::app()->user->id;
			$idt = Team::model()->find("username = '$id'")->id;
			$idp = Project::model()->find("worker=$idt and status!=5")->id;
			$name = Project::model()->find("worker=$idt and status!=5")->username;
			$ids = Project::model()->find("worker=$idt and status!=5")->task;
			?>
				<br>
				<b style="font-size:20px;display:none;">set by : (<?php echo $name ?>) 
				</b>				
					
				<div class="btn view-project" >	
					<div class="status-work" style="visibility:hidden">
						
						<select project_id="<?php echo $idp ?>" class="dash-select-status" style="background:#ED1C24;border:none;color:white;margin-top:40px;">
							<OPTION value="0">choose</OPTION>
							<?php foreach ($liststatus as $d): ?>
							<option <?php if ($d->id==$ids) echo "selected"; ?> style="background:#ED1C24;color:white;" value="<?php echo $d['id'] ?>"><?php echo $d['name'] ?></option>
						<?php endforeach; ?>
						</select>
						<?php //echo Status::model()->findByPk(Project::model()->find("username='$userid' and status <>5")->status)->name; ?>

					</div>
					
					
				<div style="position:relative;top:20px;display:inline;cursor:pointer"><a  style="color:white;text-decoration:none" href="<?php echo Yii::app()->createAbsoluteUrl('land/project'); ?>">VIEW ALL PROJECTS</a></div>
				</div>
			</div>
			<H1
			style="
			position: absolute;
			bottom: -105px;
			left:150px;
			text-align: center;
			color:gray;
			font-weight:bold;
			"
			>STRATEGY AND OPERATIONS</H1>
		</div>
		<?php  else : //jika level 1 ?>
		<div  id="sp" style="height:310px">
			<div style="width:720px;">
				<div style="display:inline;float:left;margin:20px;margin-left:40px;font-size:20px">
					TEAM ON <div id="edit-team" style="cursor:pointer;display:inline;font-size:12px;boz-sizing:border-box;margin-left:10px">EDIT
					<img class="loader" style="width:20px;position:absolute;top:20px;left:170px" src="<?php echo Yii::app()->request->baseUrl;?>/img/big-loader.gif">	
					</div>
				</div>
				<div style="display:inline;float:right;margin:20px;margin-right:60px">
				
			</div>
			<style>
		
			</style>
			<script type="text/javascript">
				$(document).ready(function(){
					// $('select[multiple]').multiselect();
					$('#wrapper-redbox').bind('mousewheel DOMMouseScroll', function(e) {
					    var scrollTo = null;
					    // alert("masuk");
					    if (e.type == 'mousewheel') {
					        scrollTo = (e.originalEvent.wheelDelta * -1);
					    }
					    else if (e.type == 'DOMMouseScroll') {
					        scrollTo = 40 * e.originalEvent.detail;
					    }

					    if (scrollTo) {
					        e.preventDefault();
					        $(this).scrollTop(scrollTo + $(this).scrollTop());
					    }
					});


				});
			</script>
			<div id="wrapper-redbox">				
				<table style="text-align:center;color:white;width:90%;font-size:22px" >
						<?php 
					$dataProvider = Yii::app()->db->createCommand()
					->select('t.id idt,p.id idp,t.name namew,p.project_name,p.username, p.due_date,p.status sp,pd.task_id pts')
					->from('project_detail pd')
					->rightjoin('team t',' t.id = pd.worker_id   ')
					->leftjoin('project p',' p.id = pd.project_id and p.status = 1  ')
					->where('t.position = 2')
					->group('t.id')
					->queryAll();

					
					$listproject = Project::model()->findAll('t.status=1');
					$liststatus  = Status::model()->findAll();
					?>
					<?php foreach ($dataProvider as $d):
					$array = array();
					$sql = "select * from project_detail pd,project p where worker_id = '$d[idt]' and p.id = pd.project_id  ";
					// echo $sql;
					$proyek_user = Yii::app()->db->createCommand($sql)->queryAll();
					// echo "jumlah proyek ".count($proyek_user);
					// ECHO "<PRE>";
					// print_r($proyek_user);
					// ECHO "</PRE>";
					foreach ($proyek_user as $pu) {
						array_push($array,$pu[project_id]);
						// echo $pu[project_id]." ,";
					}
					// print_r($array);
					?>
					<tr class="size-15" style="" >
						<td style="width:30px">&nbsp;<?php echo $d['namew'] ?></td>
						<td>
							<?php foreach ($proyek_user as $pu):  ?>
							<div style="" class="dash-non-editabble-project" >
								<?php echo $pu['project_name']; ?>
							</div>
						<?php endforeach; ?>
								
							<div class="dash-editabble-project" >
							<?php 
								if ($d['due_date']!=''): 
								// echo $d['idp'];
								?>
								<select multiple="" manager="<?php echo Yii::app()->user->id; ?>" worker = "<?php echo $d['idt'] ?>" class='dash-proj-name' style="background:transparent;border:none;color:white">
									<option class="option" value="0">choose</option>
									<?php foreach ($listproject as $l):  ?>
										<option <?php if (in_array($l->id, $array)) echo "selected" ?>  value="<?php echo $l->id;?>" <?php if ($l->id==$d['idp']) echo "selected"; ?> class="option" ><?php echo $l->project_name ?></option>
									<?php endforeach; ?>
								</select>
							<?php else:?>

								<select  manager="<?php echo Yii::app()->user->id; ?>" worker = "<?php echo $d['idt'] ?>" class='dash-proj-name' style="background:transparent;border:none;color:white">
									<option  class="option" value="0">choose</option>
									<?php foreach ($listproject as $l):  ?>
										<option   class="option" value="<?php echo $l->id;?>"><?php echo $l->project_name ?></option>
									<?php endforeach; ?>
								</select>

							<?php endif;?>
							</div>
						</td>
						<td>
						
							<!-- <div class="dash-editabble-date" > -->
								<?php //if ($d['due_date']!=''): ?>
								<!-- <input  style="background:transparent;border:none;color:white"  type="date" value="<?php echo $d['due_date']; ?>"><?php //endif;?> -->
							<!-- </div> -->
							<!-- <div class="dash-non-editabble-date" ><?php //if ($d['due_date']!=''):// echo $d['due_date']; ?><?php //endif;?></div> -->

						</td>
						<td>
							<?php //echo Task::model()->findByPk($d['pts'])->name; ?>
						<!--
							<?php 
								// echo $d['sp'];
							if ($d['due_date']!=''): ?>
								<select style="background:transparent;border:none;color:white" disabled>
									<option class="option" value="0">choose</option>
									<?php foreach ($liststatus as $l):  ?>
										<option value="<?php echo $l->id; ?>" <?php if ($l->id==$d['sp']) echo "selected";else echo "eror" ?> class="option" value="0"><?php echo $l->name?></option>
									<?php endforeach; ?>
								</select>
							<?php else: ?>
								<select style="background:transparent;border:none;color:white" disabled>
									<option class="option" value="0">choose</option>
									<?php foreach ($liststatus as $l):  ?>
										<option value="<?php echo $l->id; ?>"  class="option" value="0"><?php echo $l->name?></option>
									<?php endforeach; ?>
								</select>

							<?php endif;?>
						-->
						</td>
					<td>
					<?php// echo 'by '. $d['username']?>
					</td>
					</tr>
					<?php endforeach; ?>
				
				</table>
			</div>


			<div class="btn view-project">	
				<div class="status-work">
					<?php// echo Status::model()->findByPk(Project::model()->find("username='$userid' and status <>5")->status)->name; ?>
				</div>
				<div><a  style="bottom:-80px;color:white;text-decoration:none;right:50px;position:absolute;" href="<?php echo Yii::app()->createAbsoluteUrl('land/project'); ?>">VIEW ALL PROJECTS</a></div>
			</div>
			
		</div>
		
		<?php endif; ?>
<script type="text/javascript">
$(document).ready(function(){
// alert($('.dash-proj-name').attr("multiple"));
$('.dash-proj-name').select2();
});
</script>