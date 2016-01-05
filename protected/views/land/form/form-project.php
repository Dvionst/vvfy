
<div id ="form-project" class="modal content clearfix">
	<a href="#" class="hidemodal"><img src="<?php echo Yii::app()->request->baseUrl ?>/img/delete.ico"> </a>
	<div class="modalbody">
		
		<div class="leftpad">
			
			<div class="block">
				<span class="icons block icon-edit"></span>
				<h1>Add Project</h1>
			</div>
			
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'project-form',
				'enableAjaxValidation'=>false,
				'action'=>Yii::app()->createAbsoluteUrl("Project/new"),
				'htmlOptions'=>array(
				'class'=>"default clearfix",
				)
			)); ?>
			<div class="formrow">
				<label for="projectName">Project Name</label>
			<input type="text" name="name" value="" required id="projectName" class="formelement required" maxlength="100">		</div>
		
			<div class="formrow">
				<label for="clientID">Client</label>
				<select required  name="member" id="clientID" class="formelement">
					<option value="">Select a client</option>
					<?php foreach (Member::model()->findAll() as $member): ?>
					<option value="<?php echo $member->id ?>"><?php echo $member->name ?></option>
					<?php endforeach; ?>
					<option style="display:none" value="new">add client</option>
				</select>			
			</div>
			
			<div class="formrow">
				<label for="clientID">Add files</label>
				<input  name="fileupload[]" multiple type="file" >		
			</div>
			<div class="formrow">
				<label for="clientID">Description on calendar</label>
				<input required  type="text" name="descriptionca" value="due date "  class="formelement required"   >		
			</div>
			<div class="showdates">
				<div class="formrowm">
					<label for="startDate" class="disabled" disabled="disabled">Start</label>
					<input required type="date" name="start" value="<?php echo date('Y-m-d') ?>" id="startDate" class="formelement datebox small hasDatepicker disabled" >			
				</div>
				
				<div class="formrow">
					<label for="dueDate" class="disabled" disabled="disabled">Due</label>
					<input required type="date" name="due" value="<?php echo date('Y-m-d') ?>" id="dueDate" class="formelement datebox small hasDatepicker disabled"  >			
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="formrow buttons">
			
			<img class="loader-form-add" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" style="width:20px" >
			<input id="submit-add-project" type="submit" value="Save" class="button updateprojects">
			<div class="formloading"></div>
		</div>		
		<!--
			</form>
		-->
		<?php $this->endWidget(); ?>
	</div>
</div>