<style type="text/css">
#full-loader{
	top: 0px;
	left: 0px;
	right: 0px;
	left: 0px;
	width: 100vw;
	height: 100vh;
	background-color: black;
	position: fixed;
	z-index: 1000;
	display: none;
}
#full-loader img{
	margin: 0 auto;
	/*width: 100px;*/
}
</style>
<div id="full-loader">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
	<!-- <div class="loader"> -->
		 <img style="width:120px;height:70px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="Loading" /><br>
		 <img style="width:40px;height:40px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" alt="Loading" />
	<!-- </div> -->

	<!-- <img style="width:150px;height:auto" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif">	 -->
</center>
</div>
<!-- news -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.swipebox.js"></script>	
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/swipebox.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bjqs/js/bjqs-1.3.min.js"></script>	
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/bjqs/bjqs.css">

<!--
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/brush/jquery.jqscribble.js"></script>	
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/brush/jqscribble.extrabrushes.js"></script>	
-->

<!-- jQuery UI -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/jquery.ui.core.1.10.3.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/jquery.ui.widget.1.10.3.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/jquery.ui.mouse.1.10.3.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/jquery.ui.draggable.1.10.3.min.js"></script>

<!-- wColorPicker -->
<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/wColorPicker.min.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/lib/wColorPicker.min.js"></script>

<!-- wPaint -->
<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/src/wPaint.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/src/wPaint.utils.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/src/wPaint.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/plugins/main/wPaint.menu.main.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/plugins/text/wPaint.menu.text.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/plugins/shapes/wPaint.menu.main.shapes.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/paint/plugins/file/wPaint.menu.main.file.min.js"></script>

<?php
$this->renderPartial('style-userme');
$this->renderPartial('js-userme');

?>
<!-- <a href="javascript:void(0)" style="" class="control_toggle blink_me" title="menu"> </a> -->
<div class="about" >
		<div class="content-left">
			<div class="content-text">
				<div class="header signin">
					<?php //echo "company code : ".Member::model()->findByAttributes(array('email'=>Yii::app()->user->name))->code?>
				</div>
			</div>	
			<div class="content-primary">
				
			</div>
				<img style="margin-top:-230px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_def">
		</div>
		<div class="content-center">
			<div class="content-text">
				<div class="header signin">
					USER INFORMATION
				</div>
			</div>	
			<!--<div class="line">&nbsp;</div>-->
			<div class="tengah">
			    <li class="fa-boot"><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo Yii::app()->user->name;?></a></li>
				<li class="fa-boot"><a id="btn-setting" href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
				<li class="fa-boot" ><a href="<?php echo Yii::app()->createAbsoluteUrl("site/logout"); ?>"><i class="fa fa-sign-out fa-fw"></i>Logout </a></li>
			</div>
		</div>
		<!-- service and icon -->
		
		<div class="right">
	
			<div

			<?php
			if (Yii::app()->user->level()=='4')
				echo "style='visibility:hidden'";
			?>

			 class="content-rigth">
						<div class="content-text" >
							<div class="header">
								EMPLOYEES
							</div>
						</div>	
					<div style="margin-left:20px">	
                        <li class="fa-boot">
                            <a href="#" id="invite-employee">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>
                                     invite employee
                                   <!--  <span class="pull-right text-muted small">4 minutes ago</span> -->
                                </div>
                            </a>
                        </li>
                          <li class="fa-boot">
                            <a href="#"  id="btn-list-employee">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>
                                     List employee
                                   <!--  <span class="pull-right text-muted small">4 minutes ago</span> -->
                                </div>
                            </a>
                        </li>
                  
					</div>
			</div>
	</div>
</div>
	
	<div  id="wrapper-dashboard-first" >
		<div id="sp" style="height:310px;" >
			<div class="filter-proses">					
				CURRENT PROJECTS
			</div>
			<?php 
				$id = Yii::app()->user->id;
				if (Yii::app()->user->level()=='3'){		
					$id_member = Member::model()->find("TRIM(email) = '$id'")->id;
				}else{
					$id_member = MemberSub::model()->find("TRIM(email) = '$id'")->id_member;

				}
				$redbox = Yii::app()->db->createCommand()
				->select("p.*, pcm.phase")
				->from(' project p, project_comment_head pcm')
				->where("p.id = pcm.project_id and STATUS =1 and id_member = '$id_member' ")
				->group("p.id")
				->limit('4')
				->queryAll();

			?>
			<table class="dashboard-project" >

				<thead style="margin-bottom:15px;">						
					<tr>
						<th style="text-align:left;font-size:15px;padding-bottom:15px;">NAME</th>
						<th style="padding-bottom: 15px;font-size:15px;">DUE DATE</tdh>
						<th styole="font-size:15px;padding-bottom: 15px;">UPCOMING</th>
					</tr>
				</thead>
				<?php
					foreach($redbox as $b):
				?>
				<tr>
					<td style="text-align:left"><?php echo $b['project_name'];?></td>
					<td><?php echo date('d-m-y',strtotime($b['due_date']));?></td>
					<td><?php echo Phase::model()->findByPk($b['phase'])->name ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
			<div class="view-projects btn-all-projects"><a href="#">VIEW ALL</a></div>	
		</div>
		<?php if (User::model()->findByPk(Yii::app()->user->id)->level==1): ?>
		<H1
		style="
		position: absolute;
		bottom: -400px;
		text-align: center;
		color:gray;
		font-weight:bold;
		margin-left:30px;
		font-size:33px;
		display:none;
		"
		>Latest sUpload</H1>
	<?php endif; ?>
	<div id="cp">
		<table cellpadding="10">
			<thead><tr><td>PROJECTS</td><td align="">DUE</td></tr ></thead>
			<tbody>
				<?php 
				// $id = Yii::app()->user->id;
				// $id_member = Member::model()->find("email = '$id'")->id;
				$black = Yii::app()->db->createCommand()
				->select("*")
				->from('project')
				->where("STATUS =1 and id_member = '$id_member' ")
				->limit('3')
				->queryAll();
				// print_r($black);
				foreach($black as $b):
				?>
				<tr>
					<td><?php echo $b['project_name'];?></td>
					<td><?php echo $b['due_date'];?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="btn view-calendar"><a href="#">VIEW CALENDAR</a></div>
	</div>
	

	
		
		<!-- <img class="img-upload" src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" > -->
		<!-- <img class="img-upload" src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg" > -->
	


	<style type="text/css">
		
	</style>
	<form id="form-filter-progres" class="filter-progres" >
			<!-- <div style="position: relative;top: 50px;"  class="filter-progres"> -->

				<label>
					<?php if (isset($_REQUEST['project_id']) && $_REQUEST['project_id']!='PROJECT NAME'){?>
					<div class="label upload"><?php echo Project::model()->findByPk($_REQUEST['project_id'])->project_name;  ?></div>
					<?php }else{ ?>
					<div class="label upload">LATEST UPLOAD</div>

					<?php } ?>
						<input type="hidden" name="r" value="land/userme">
						<select style="text-transform:uppercase" name="project_id" class="filter-progres-select">
							<!-- <option>PROJECT NAME</option> -->
							<?php foreach ($redbox as $key) {?>
								<option  <?php if ($_REQUEST['project_id']==$key['id']) echo "selected"    ?> value="<?php echo $key['id']; ?>" ><?php echo $key['project_name']; ?></option>
							<?php 
							} 
							?>
						</select>
						<select style="text-transform:uppercase" name="project_phase" class="filter-progres-select">
							<!-- <option>PHASE</option> -->
							<?php foreach(Phase::model()->findAll() as $ps):?>
								<option 
								value="<?php echo $ps->id ?>"
								<?php
								if ($_REQUEST['project_phase']==$ps->id)
									echo "selected";
								?>

								><?php echo $ps->name ?></option>
							<?php endforeach ?>
						} 
							?>
						</select>
						<input value="<?php
						 if (isset($_REQUEST['date']))
							 echo $_REQUEST['date'];
						else
							 echo date('Y-m-d');



						  ?>" type="date" name="date" class="filter-progres-select">
							<!-- <option>DATE</option> -->
							<!-- <option>OLD TO NEW</option> -->
							<!-- <option>NEW TO OLD</option> -->
							
						<!-- </select> -->
					<!-- <img class="img-pick-select" src="<?php echo Yii::app()->request->baseUrl; ?>/img/down.png"> -->
				</label>
				<!-- <input type="text" name="try" value="cinta"> -->

			<!-- </div> -->
	</form>

		<div id="term" 	style="">
		<?php //if (User::model()->findByPk(Yii::app()->user->id)->level==1){echo "style='margin-top:80px'";} 
		?> 
		<!-- <button class="next">baru</button> -->			
		<ul class="bjqs" >
				<?php

				$a=1; 
				if (isset($_REQUEST['project_id']) and $_REQUEST['project_id']!='PROJECT NAME' )
					$filter = "and ph.project_id = '$_REQUEST[project_id]' and date(ph.datetime) ='$_REQUEST[date]' and ph.phase = '$_REQUEST[project_phase]' 
                 ";
				else
					$filter = "  ";

				$sqls = "SELECT ph.datetime, ph.project_id, 
	          		pdm.name_file,
	          		SUBSTRING_INDEX(pdm.name_file,'.',-1) AS ext
                FROM
                project  as p                    
                inner join 
                project_comment_head AS ph on p.id = ph.project_id
                INNER JOIN
                project_comment AS pdm
                ON pdm.head_project_id = ph.id
                where 
                p.id_member = $id_member

                and
                pdm.status = 1 
                and

                SUBSTRING_INDEX(pdm.name_file,'.',-1) in ('jpg','png','gif','PNG','JPG','GIF')
				$filter                   

                ";
                // echo $sqls;
        	    $jumlah = Yii::app()->db->createCommand($sqls)->queryAll();
        	    // echo "<h1>count($jumlah)</h1>";
        	    $jumlah = ceil(count($jumlah)/6);
        	    // echo "<h1>$jumlah</h1>";

				$limit = 0;

				for ($a=1;$a<=$jumlah;$a++):
				?>
				<li class="container">
<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg"  > -->
				<?php
	 	           $sql = "SELECT 
	 	            pdm.id phid,
	 	            alias_name,
	 	           	ph.datetime as datetime, ph.project_id, 
	          		pdm.name_file,
	          		SUBSTRING_INDEX(pdm.name_file,'.',-1) AS ext
	                FROM
	                project  as p                    
	                inner join 
	                project_comment_head AS ph on p.id = ph.project_id
	                INNER JOIN
	                project_comment AS pdm
	                ON pdm.head_project_id = ph.id
	                where 
	                p.id_member = $id_member
	                and
	                pdm.status = 1 
	                and
	                SUBSTRING_INDEX(pdm.name_file,'.',-1) in ('jpg','png','gif','PNG','JPG','GIF')
					$filter
					limit 6 OFFSET $limit                    
	                ";
	                // echo $sql;
        	    $comment = Yii::app()->db->createCommand($sql)->queryAll();

				foreach($comment as $kom){ 
					// $path = Yii::app()->baseurl."/img/comment/$kom[name_file]";
					// $ext = pathinfo($path, PATHINFO_EXTENSION);
					// $allow = array('png','jpg','gif');
		   //            		if (in_array($ext,$allow )){

          			?>
						<div class="img-progres">
							<div class="hint-progres">
								<h3>
									<?php 


									// echo  Project::model()->findByPk($kom['project_id'])->project_name; 
									if ($kom['alias_name']!='')
										echo  $kom['alias_name']; 
									else
										echo "NO NAME";

									?>

								</h3>									
								<?php echo "Uploaded at ".date('d M Y H:i',strtotime($kom['datetime']))?>
								<?php
								// echo "haha".$kom['datetime'];

								?>
							<br>
							<img id_comment="<?php echo $kom['phid']?>" phid="<?php echo $kom['name_file']?>" class="icon-comment" style="width:20px;margin-top:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch White/comment.ico" >
							</div>
							<a class="" href="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo $kom[name_file] ?>">
								<img style="width:100%" class="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo $kom[name_file] ?>">		
							</a>
						</div>
					<?php 

					
				} ?>	
				</li>
				<?php 
				$limit = $limit + 6;
				endfor;?>
	
			</ul>

					
	</div>
	<?php 
        // echo "ini adalah ".$sql;
    ?>

	<div id="rnd" class="box" style="float:left">
		<h2 class="h2-white position-rnd">Perks + R & D</h2>
	</div>



	<div id="blog" class="box">
		<h2 class="h2-white">Lastest Blog</h2>
		<div class="container-box" id="news">
			<ul class="container" >
				<?php foreach (Blog::model()->findAll() as $key) { ?>
				<li >
					<a href="<?php echo Yii::app()->createUrl("blog/index") ?>" style=""><?php echo substr($key->title,0,40).".. - ".date('d M Y, H:i:s',strtotime($key->datetime)) ?> </a>
					<br>
					<a></a>
				</li>
				<?php } ?>
				
			</ul>	
			
		</div>
	</div>	
</div>

<div id="wrap-invite">
<h3>Input Employee's Email</h3>
<img class="action  loader"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" alt="" >		
<img class="close-dialog close"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/close.png" alt="" >
<!-- <form id="form-invite-employee" action="<?php echo Yii::app()->createUrl('member/sendinvite'); ?>" > -->
<?php 
$model  = new MemberSub;
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'form-invite-employee',
	'enableAjaxValidation'=>false,
	'action'=>Yii::app()->createUrl('member/sendinvite'),
)); 
?>	
	Email  : <?php echo $form->textfield($model,'email',array('name'=>'email')) ?> 
	<!-- <input type="email" name="email" required > -->
	<!-- <input type="submit" value="Send"> -->
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Send' : 'Save',array('id'=>'submit-invite')); ?>
	<div class="error-invite"></div>
	<div class="succes-invite"></div>
<?php $this->endWidget(); ?>
</div>	
<div id="wrap-list-employee"></div>
<div id="wrap-setting"></div>
<div id="wrap-comment">
<!-- <div class="tools">
	 <a href="#image-comment" data-tool="marker">Marker</a>
	 <a href="#image-comment" data-tool="eraser">Eraser</a>
</div> -->
<img style="position:fixed" class="close-dialog close"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png" alt="" >
<!-- <h2 style="text-decoration:underline">New Comment</h2>
<center>
	<canvas  id="image-comment" ></canvas>
</center>
	
 -->
<center>
	<div id="wPaint" style="
	width:80%; 
	height:80%; 
	position:relative;
	margin:70px auto 20px auto;
	background-color:#7a7a7a; 
	"></div>
</center>

</div>
<img src="" id="sky" style="display:none" width="250" alt="Cloudy Sky">
<div id="wrap-image-desc">
	
<!-- <input id="cek-file" type="file" value="cek"> -->
<!--
input id="remove" type="button" value="remove">
-->

<img class="toggle-show" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch White/compose-3.ico">
<div style="margin-left:44px;">
	<button id="select-ok">select oke</button>
	<button style="display:none" id="btn-add-comment">Add Comment</button>
	<button id="btn-save-comment" >Save & Send Comment </button>
</div>

<table id="wrap-text-comment" ></table>
</div>

<!-- tes brush -->
<div id="tools-brush" style="">
<div class="column-right links">
	<strong>COLORS:</strong>
	<a href="#" class="gantiwarna" warna="rgba(0,0,0,1)">Black</a>
	<a href="#" class="gantiwarna" warna="rgba(255,0,0,1)" >Red</a>
	<a href="#" class="gantiwarna" warna="rgba(0,255,0,1)" onclick='gantiWarna("rgba(0,0,255,1)")'>Green</a>
	<a href="#" class="gantiwarna" warna="rgba(0,0,255,1)">Blue</a>
</div>
<div class="links" style="display:none;margin-top: 5px;">
	<strong>OPTIONS:</strong>
	<a href="#" onclick='$("#image-comment").data("jqScribble").clear();'>Clear</a>
</div>
</div>

<canvas width="500" height="500" id="canvas-test" style="border: 1px solid red;background:white"></canvas> 



<?php 
	$this->renderPartial('client_all_project',array('id_member'=>$id_member));
?>