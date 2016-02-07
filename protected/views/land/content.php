<div id="body-content">
		<div id="second">
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
				<div  id="mn-user" style="margin-left:120px" id=""  class="category-value"  >
					<div class="circle-parent">
						<div style="border:5px solid black"  class="circle-child cir growth">
							<p>USER</p>
						</div>
					</div>
				</div>
				<div  id="mn-archive" style="margin-left:240px" id=""  class="category-value"  >
					<div class="circle-parent">
						<div style="border:5px solid black"  class="circle-child cir growth">
							<p>ARCHIVES</p>
						</div>
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
				<?php $this->renderPartial('page/page-project');?>
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
					<?php $this->renderPartial('page/page-user');?>
				</div>
				<div id="tbl-team"></div>
				<div id="tbl-archive">
					<table class="table-project" border="1">
						<thead>
							<tr class="head">
								<td align="left"  class="row" style="width:10px;" value="id_member" ></td>
								<td align="center" class="row" value="project_name"  >title</td>
								<td align="center" class="row" value="due_date">Due Date</td>
								<td style=""  class="row" value="username"><div style="display:inline;margin-left:10px;">User</div></td>
								<td  class="row" value="task"><div style="display:inline;margin-right:25px;">Task</div></td>
								<td  class="row" value="progres"><div style="display:inline;margin-right:5px;">%</div></td>
								<td align="center" class="row" value="priority" >Priority</td>
								<td align="center" class="row" value="status" >status</td>
								<td align="center" class="" ></td>
							</tr>
						</thead>
						<tbody id="barisbaru"></tbody>
					</table>
				</div>
		</div>
	
</div>
	