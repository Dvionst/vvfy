<div id="form-set-user">
	<H3>SET USER ON THIS PROJECT
	<img id="loader-list-user" style="width:30px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif"></H3>
	<img class="hidemodal" style="width:20px;position:absolute;top:45px;right:25px;" src="<?php echo Yii::app()->request->baseurl; ?>/img/delete.ico">
	<form id="add-schedule-form">
		<table cellpadding="">
			<tr  style="display:none"><td>project id</td><td><input id="schedule_project_id" class="input-category" name="Calendar[project_id]" type="text" required ></td></tr>
			<tr style="display:none"><td>Date</td><td><input class="input-category" value="<?php echo date("Y-m-d"); ?>" name="Calendar[start_date]" type="date" required ></td></tr>
			<tr><td></td><td style="color:gray" id="chars"></td></tr>
			
			<thead>
			<tr>
				<td style="width:20px">No</td>
				<td>Name</td>
				<td  align="center">Task</td>
				<td  align="center">Action</td>
			</tr>
			</thead>
			<tbody  id="list-user-set">
			</tbody>
			
			<tr>
			<td>
			<img class="loader-form-add" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" style="width:20px" >
			<input type="button" id="add-list-user" value="add"></td>
			</tr>
		</table>
	</form>
</div>