<div id ="form-comment" class="modal content clearfix">
	<a href="#" class="hidemodal"><img src="<?php echo Yii::app()->request->baseUrl ?>/img/delete.ico"> </a>
	<div class="modalbody">
		
		
		<div class="block">
			<span class="icons block icon-edit"></span>
			<h1>COMMENT FORM</h1>
			<img class="loader-row-form" style="width:20px;height:auto;position:absolute;top:0px;right:0px;" src="<?php echo Yii::app()->request->baseUrl ?>/img/big-loader.gif">
		</div>
		<div class="formrow">
			<label for="projectName">List Comment</label>
			<?php
				$data = Yii::app()->db->createCommand()
				->select("id")
				->from('project_comment_head')
				->queryAll();
			?>
			<select id="comment-list">
				<option value=" ">select</option>
				<?php foreach ($data  as $d): ?>
				<option value="<?php echo $d['id']?>"><?php echo "comment : ". $d['id']?></option>
				<?php endforeach; ?>
				<option value="new">NEW</option>
			</select>
			
		</div>
		
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'comment-form',
			'enableAjaxValidation'=>false,
			'action'=>Yii::app()->createAbsoluteUrl("Project/savecomment"),
			'htmlOptions'=>array(
			'class'=>"default clearfix",	
			'enctype'=>'multipart/form-data',
			)
		)); ?>
		<script>
		</script>
		<input id="type_comment" name="type" value="1"  type="hidden" >
		<input id="project_id" name="project_id" value=""  type="hidden" >
		<div id="list-comment-multiple" class="formrow"></div>
		<?php $this->endWidget(); ?>	
		
		
		<div class="clear"></div>
		
		<div class="showsharing clearfix">
			<div class="owners  clearfix">
				<div style="display:none" class="ownerpicker">
					<h5>Users</h5>
				</div>
			</div></div>
	</div>
</div>