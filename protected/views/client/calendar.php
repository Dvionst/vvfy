<style type="text/css">
	.nav-cal{
		background-size: 100% 100%;
		width: 13px;
		height: 20px;
		position: absolute;
		top: 50%;
		cursor: pointer;
	}
	.nav-right{
		right: -30px;
	}
	.nav-left{
		left: -30px;
		
	}
</style>
<div class="section" id="calendar">
	<div class="center-user">
		<div class="real-calendar">
			<div class="content-calendar">
				<div id="zabuto_calendar_1rex_nav-next" class="nav-cal nav-right" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/img/baru/user/right-btn-calendar.PNG)"></div>
				<div id="zabuto_calendar_1rex_nav-prev" class="nav-cal nav-left" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/img/baru/user/left-btn-calendar.PNG)"></div>
				<div id="my-calendar">
					
				</div>
			</div>
		</div>
		<div class="project-list">
			<div class="title-project">
				PROJECTS
			</div>
			<ul>
				<?php 
				$redbox = Yii::app()->db->createCommand()
				->select("*")
				->from(' project p')
				->where("STATUS =1 and id_member = '$id_member' ")
				// ->limit('4')
				->queryAll();
				$count_rb = count($redbox);c
				?>
			
				<?php foreach ($redbox as $key) {?>
					<li class="project" pid="<?php echo $key[id] ?>"  ><?php echo $key['project_name']; ?></li>
				<?php } ?>			
			</ul>
			<?php if ($count_rb==4): ?>
			<div class="project-load-more">
				<img class="img-reload" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/reload.PNG">
				<p class="lbl-load-more">LOAD MORE</p>
			</div>
			<?php endif; ?>

		</div>
		<div class="project-info">
			<div class="title-project">
				PROJECTS INFO
			</div>
			<div class="table">
				<div class="row">
					<div class="label" style="color:rgba(232,155,1,1)">DUE DATE</div>
					<div class="separator-table">:</div>
					<div class="value" column='due_date' style="color:rgba(2	32,155,1,1)">-</div>
				</div>
				<div class="row">
					<div class="label" style="color:rgba(230,194,132,1)"> LATEST UPLOAD</div>
					<div class="separator-table">:</div>
					<div class="value" column='latest-upload'  style="color:rgba(230,194,132,1)">-</div>
				</div>
				<div class="row">
					<div class="label">AMMOUNT</div>
					<div class="separator-table">:</div>
					<div class="value" column='budget'>-</div>
				</div>
				<div class="row">
					<div class="label">NUMBER OF VIEWS</div>
					<div class="separator-table">:</div>
					<div class="value" column='number_views' >-</div>
				</div>
				<div class="row">
					<div class="label">STATUS</div>
					<div class="separator-table">:</div>
					<div class="value" column='status'>-</div>
				</div>
				<div class="row">
					<div class="label">WORKING TEAM</div>
					<div class="separator-table">:</div>
					<sdiv class="value column='team'">-</div>
				</div>
				<!-- <div style="clear:both"></div> -->
				<div class="project-info-btn">
					GO TO PROJECT
				</div>
			</div>
			<div style="clear:both"></div>
		</div>
	<div style="clear:both"></div>
</div>
