<div id="form-add-schedule">
	<H3>ADD SCHEDULE ON THIS PROJECT</H3>
	<img class="close-form-add-category" style="width:20px;position:absolute;top:45px;right:25px;" src="<?php echo Yii::app()->request->baseurl; ?>/img/delete.ico">
	<form id="add-schedule-form">
		<table cellpadding="">
			<tr  style="display:none"><td>project id</td><td><input id="schedule_project_id" class="input-category" name="Calendar[project_id]" type="text" required ></td></tr>
			<tr><td>Date</td><td><input class="input-category" value="<?php echo date("Y-m-d"); ?>" name="Calendar[due_date]" type="date" required ></td></tr>
			<tr style="display:none"><td>Date</td><td><input class="input-category" value="<?php echo date("Y-m-d"); ?>" name="Calendar[start_date]" type="date" required ></td></tr>
			<tr><td>Description</td><td><textarea id="proj-sch-textarea" style="width:170px" maxlength="20" max="20" class="textarea-category" name="Calendar[description]"  required ></textarea></td></tr>
			<tr><td></td><td style="color:gray" id="chars"></td></tr>
			<tr><td>
			<img class="loader-form-add" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" style="width:20px" >
			<input type="submit" id="submit-add-schedule" value="save"></td></tr>
		</table>
	</form>
</div>
