<div id="body-content">
		<div id="second">
			<div class="menu">
				<div class="filter">
				<ul class="main-tab ">
					<li style="margin-left:-150px;margin-top:-14px;position:absolute" class="filter-title">PROJECT</li	>
					<li><img  class="btn-add-project"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/land-plus.png" style="width:40px;height:auto;"></li>
				</ul>
				</div>
			</div>
			<div id="wrapper-circle" style="height:150px">
					<?php 
					$data = Yii::app()->db->createCommand()
					->select("*,categories_main.color,head_categories.name as namahe")
					->from('head_categories,categories_main')
					->where('head_categories.id_mc = categories_main.id')
					->queryAll();
					?>
					<div id="mn-project" style="margin-left:0px" id=""  class="category-value"  >
						<div style="border:9px solid #FCDE18" class="circle-parent">
							<div style="border:5px solid black"  class="circle-child cir growth">
								<p>PROJECT</p>
							</div>
						</div>
					</div>
					
					<div  id="mn-calendar" style="margin-left:120px" id=""  class="category-value"  >
						<div class="circle-parent">
							<div style="border:5px solid black"  class="circle-child cir growth">
								<p>CALENDAR</p>
							</div>
						</div>
					</div>
					<div  id="mn-client" style="margin-left:240px;display:none" id=""  class="category-value"  >
						<div class="circle-parent">
							<div style="border:5px solid black"  class="circle-child cir growth">
								<p>CLIENT</p>
							</div>
						</div>
					</div>
					<div  id="mn-user" style="margin-left:240px" id=""  class="category-value"  >
						<div class="circle-parent">
							<div style="border:5px solid black"  class="circle-child cir growth">
								<p>USER</p>
							</div>
						</div>
					</div>
					
					
			</div>
			
			<div id="third">
					<style>
					.default-filter{
						background: rgb(96,108,136)!; /* Old browsers */
						background: -moz-linear-gradient(top,  rgba(96,108,136,1) 0%, rgba(48,58,81,1) 57%); /* FF3.6+ */
						background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(96,108,136,1)), color-stop(57%,rgba(48,58,81,1))); /* Chrome,Safari4+ */
						background: -webkit-linear-gradient(top,  rgba(96,108,136,1) 0%,rgba(48,58,81,1) 57%); /* Chrome10+,Safari5.1+ */
						background: -o-linear-gradient(top,  rgba(96,108,136,1) 0%,rgba(48,58,81,1) 57%); /* Opera 11.10+ */
						background: -ms-linear-gradient(top,  rgba(96,108,136,1) 0%,rgba(48,58,81,1) 57%); /* IE10+ */
						background: linear-gradient(to bottom,  rgba(96,108,136,1) 0%,rgba(48,58,81,1) 57%); /* W3C */
						filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#606c88', endColorstr='#303a51',GradientType=0 ); /* IE6-9 */

					}
					</style>
					<div id="tbl-project" >
				
						<div class="filter">
							    <img id="loader-row" style="width:20px;height:auto;margin-top:3px;position:absolute" src="<?php echo Yii::app()->request->baseUrl ?>/img/big-loader.gif">
							<ul  class="filter-data">
								<?php $filter = Status::model()->findAll(); ?>
								<?php foreach ($filter  as $f ): ?>
								<li <?php if ($f->id==1) echo "class='default-filter'" ?> ><?php echo $f->name ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="total">
						
						</div>
						<input type="text" value="" style="display:none" id="primary" >

						<table class="table-project" border="1">
							<thead>
							<tr class="head">
								<td class="row" value="id_member" >Client</td>
								<td class="row" value="project_name"  >Project</td>
								<td class="row" value="due_date">Due</td>
								<td class="row" value="username">Users</td>
								<td class="row" value="task">Task</td>
								<td class="row" value="progres">Progres</td>
								<td class="row" value="priority" >Priority</td>
								<td class="row" value="status" >status</td>
								<td class="" >time </td>
								<td class="" >action</td>
							</tr>
							</thead>
							<tbody id="barisbaru">
							
							
							
							</tbody>
							
							
							
						</table>
						
					</div>
					<div id="tbl-task"></div>
					<div id="tbl-calendar">
					<div style="margin-left:20px;" id='calendar'></div>
					</div>
					<div id="tbl-client">
						<div class="filter" style="visibility:hidden">
							<ul class="filter-data">
								<li>Non-Active</li>
								<li>Active</li>
							</ul>
						</div>
						<div class="total">
							TOTAL CLIENT  :  2
						
						</div>
						<table border="1">
							<tr class="head">
								<td>No</td>
								<td>client Name</td>
								<td>project</td>
							</tr>
							<tr>
								<td >1</td>
								<td ><div class="project-name">CLIENT 2</div></td>
								<td style="width:20%">	<ul>
										<li>MALL LEBANON</li>
										<li>APPARTEMENT</li>
										<li>SOHO</li>
									</ul></td>
							</tr>
							<tr>
								<td >2</td>
								<td ><div class="project-name">CLIENT 2</div></td>
								<td style="width:20%">	<ul>
										<li>MALL LEBANON</li>
										<li>APPARTEMENT</li>
										<li>SOHO</li>
									</ul></td>
							</tr>
							
							
						</table>

						
					</div>
					<div id="tbl-user">
						<div class="filter">
							<ul class="filter-data">
								<li>Non-Active</li>
								<li>Active</li>
							</ul>
						</div>
						<div class="total">
							TOTAL USER  :  2
						
						</div>
						
						<table border="1">
							<tr class="head">
								<td>No</td>
								<td >Name</td>
								<td align="center">image</td>
								<td align="left">project</td>
								<td>status</td>
							</tr>
							<tr>
								<td style="width:5%">
								1
								</td>
								<td style="width:40%">
									<div class="project-name">
										MAJD FENERGI
									</div>
									
								
								</td>
								<td align="center">
									<img width="40" src="<?php echo Yii::app()->request->baseUrl ?>/img/user.jpg">
								</td>
								<td>
									<ul>
										<li>MALL LEBANON</li>
										<li>APPARTEMENT</li>
										<li>SOHO</li>
									</ul>
								</td>
								<td style="width:15%">active</td>
							</tr>
						
						</table>
					</div>
					<div id="tbl-team"></div>
			</div>
				
			<style>
				</style>
		
			</div>
	</div>
	