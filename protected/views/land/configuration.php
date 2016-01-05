<h1 style="border-bottom:2px thick black;letter-spacing:4px">
Configuration
</h1>

<div id="permission">
<fieldset>
	<legend>PERMISSION</legend>
		<table cellpadding="20">
			<tr>
				<td>User : </td>
				<td>
					<select style="padding:5px">
						<option value="" >Choose user</option>
						<?php foreach (User::model()->findAll() as $d): ?>
						<option value="<?php echo $d->username ?>" ><?php echo $d->username ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Rule :</td>
				<td>
						<label><input type="checkbox" value="financial page"> financial page</label>
						<label><input type="checkbox" value="financial page"> bussines dev page</label>
						<label><input type="checkbox" value="financial page"> setting page</label>
						<label><input type="checkbox" value="financial page"> create project</label>
						<label><input type="checkbox" value="financial page"> update project</label>
				</td>
			</tr>
		</table>
</fieldset>
</div>