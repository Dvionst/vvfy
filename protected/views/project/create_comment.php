<hr>
<label>Phase</label>
	<select name="phase_id" required>
		<option value="">Select Phase</option>
		<?php foreach(Phase::model()->findAll() as $ps):?>
			<option value="<?php echo $ps->id ?>"><?php echo $ps->name ?></option>
		<?php endforeach ?>
	</select>
<label>Add files</label>
<input required id="file-comment" name="file-comment"  type="file" >
<div class="formrow buttons">
	<input type="submit" value="Save" class="button updateprojects">
	<div class="formloading"></div>
</div>		

