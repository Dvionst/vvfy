<div id="tbl-project" >
<div class="menu">
			<div class="filter" style="left: 25px;float: left;margin-top: -40px;margin-left: -50px;">
				<ul class="main-tab">
					<li  class="filter-title">PROJECTS</li	>
					<?php if (User::model()->findByPk(Yii::app()->user->id)->level==1):?>
					<li>
					
					<i style="color:black!important"  class="btn-add-project fa fa-plus fa-3x "  src="<?php echo Yii::app()->request->baseUrl; ?>/img/land-plus.png" ></i>

					</li>
					<?php endif; ?>
					<li  class="filter-title" >
						<select id="select-filter-project" style="font-size:20px;color:black">
							<option>SELECT</option>
							<?php $data = Status::model()->findAll(); 
							foreach ($data as $d){
							?>
								<option value="<?php echo $d['name']  ?>"><?php echo $d['name'] ?></option>
							<?php } ?>
						</select>
					</li>
				</ul>
			</div>
		</div>
	<img id="loader" style="width:20px;position:absolute;" src="<?php echo Yii::app()->request->baseUrl ?>/img/big-loader.gif">
	<div class="filter" style="display:none">
		<ul  class="filter-data">
			<?php $filter = Status::model()->findAll(); ?>
			<?php foreach ($filter  as $f ): ?>
			<li <?php if ($f->id==1) echo "class='default-filter'" ?> ><?php echo $f->name ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="total"></div>
	<input type="text" value="" style="display:none" id="primary" >
	<?php
		// $this->widget('editable.EditableField', array(
			// 'type'      => 'text',
			// // 'model'     => $models,
			// // 'attribute' => 'ov_title',
			// // 'url'       => $this->createUrl('mobil/update',array('id'=>'1')), 
			// // 'placement' => 'bottom',
		// ));
	?>
	<table class="table-project" border="1">
		<thead>
			<tr class="head">
				<td align="left"  class="row" style="width:10px;" value="id_member" ></td>
				<td align="center" class="row" value="project_name" >title</td>
				<td align="center" class="row" value="project_name" >Client</td>
				<td align="center" class="row" value="due_date">Due Date</td>
				<td style=""  class="row" value="username"><div style="display:inline;margin-left:10px;">User</div></td>
				<td  class="row" value="task"><div style="display:inline;margin-right:25px;">Task</div></td>
				<td  class="row" value="progres"><div style="display:inline;margin-right:5px;">%</div></td>
				<td align="center" class="row" value="priority" >Priority</td>
				<td align="center" class="row" value="status" >status</td>
				<td align="center" class="row" value="status" >+ USER</td>
				<td align="center" class="" ></td>
			</tr>
		</thead>
		<tbody id="barisbaru"></tbody>
	</table>
	<script>
		$(document).ready(function() {
			var a = 1;
			$(document).on('click', '.hide-content', function(e) {
				
				var index_g = $(this).closest('.group-box').index('.group-box');
				var index_m = $(this).closest('.wrapper-month').index('.wrapper-month');
				// alert(gb_count);
				// alert(index_m);
				// alert($('.wrapper-month').eq(index_m).find('.content').hide());
				// $(this).closest('.wrapper-month').index('.wrapper-month');
				$('.group-box').eq(index_g).find('.content').toggleClass('content-hide');
				$('.icon-add').eq(index_g).toggleClass('icon-remove');
				var gb_count = $('.wrapper-month').eq(index_m).find('.content').length;
				var gbh_count = $('.wrapper-month').eq(index_m).find('.content-hide').length;
				if (gb_count==gbh_count){
					$('.wrapper-month').eq(index_m).find('.content').hide();
					// alert('masuk');
					// $('.group-box').eq(index_g).find('.content').hide();
				}else{
					$('.wrapper-month').eq(index_m).find('.content').show();
				
				}
				
			});
			
		});
	</script>
	<!--
	<div id="project-calendar">
		<div id="header">CALENDAR</div>
		<div id="body">
			<div class="wrapper-month may">
				<div class="month-name">MAY 2015</div>
				<div class="group-box">
					<div class="head">TODAY(22)
						<div class="hide-content" >
							<div class="icon-add"></div>
						</div></div>
						<div class="content">
							<ul>
								<li>Final Render Maitama <img class="ceklis" src="<?php echo Yii::app()->request->baseUrl; ?>/img/check.png"></li>
								<li>Test Render P07</li>
								<li>DJA Coordination session</li>
							</ul>
						</div>
				</div>
				<div class="group-box">
					<div class="head">FRIDAY(22)
						<div class="hide-content" >
							<div class="icon-add"></div>
						</div></div>
						<div class="content">
							<ul>
								<li>Final Render Maitama <img class="ceklis" src="<?php echo Yii::app()->request->baseUrl; ?>/img/check.png"></li>
								<li>Test Render P07</li>
								<li>DJA Coordination session</li>
							</ul>
						</div>
				</div>
				<div class="group-box">
					<div class="head">TUESDAY(26)
						<div class="hide-content" >
							<div class="icon-add"></div>
						</div></div>
						<div class="content">
							<ul>
								<li>Final Render Maitama <img class="ceklis" src="<?php echo Yii::app()->request->baseUrl; ?>/img/check.png"></li>
								<li>Test Render P07</li>
								<li>DJA Coordination session</li>
							</ul>
						</div>
				</div>
				
			</div>
			<div  class="wrapper-month june">
				<div style="background:#827B00" class="month-name">JUNE 2015</div>
				<div class="group-box">
					<div class="head">TODAY(19)
						<div class="hide-content" >
							<div class="icon-add"></div>
						</div></div>
						<div class="content">
							<ul>
								<li>Final Render Maitama <img class="ceklis" src="<?php echo Yii::app()->request->baseUrl; ?>/img/check.png"></li>
								<li>Test Render P07</li>
								<li>DJA Coordination session</li>
							</ul>
						</div>
				</div>
				<div class="group-box">
					<div class="head">TODAY(19)
						<div class="hide-content" >
							<div class="icon-add"></div>
						</div>
					</div>
					<div class="content">
						<ul>
							<li>Final Render Maitama <img class="ceklis" src="<?php echo Yii::app()->request->baseUrl; ?>/img/check.png"></li>
							<li>Test Render P07</li>
							<li>DJA Coordination session</li>
						</ul>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
	-->
	<div id="project-calendar"></div>
</div>
