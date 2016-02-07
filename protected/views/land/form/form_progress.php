<style type="text/css">
.loader-row-form{
	width:30px;
	height:auto;
	position:absolute;
	top:10px;
	right:10px;
}
#form-progres .close img{
	cursor: pointer;
	width:30px;
	height:auto;
	position:absolute;
	top:10px;
	right:10px;
}
</style>
<div id ="form-progres" class="modal content clearfix">
	<a href="#" class="hidemodal close"><img src="<?php echo Yii::app()->request->baseUrl ?>/img/delete.ico"> </a>
	<img class="loader-row-form"  src="<?php echo Yii::app()->request->baseUrl ?>/img/big-loader.gif">
	<div class="modalbody">
		<div class="leftpad">
			
			<div class="block">
				<span class="icons block icon-edit"></span>
				<h1>PROGRESS FORM</h1>

				
			</div>
			<div class="formrow">
				<label for="projectName">List Progres</label>
				<?php
					$data = Yii::app()->db->createCommand()
					->select("id")
					->from('project_comment_head')
					->where('type=2')
					->queryAll();
				?>
			<select id="progres-list"></select></div>
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
			<input id="progres_project_id" name="project_id" value="" type="hidden"  >
			<input id="progres_views_id" name="views_id" value=""  type="hidden">
			<input id="type_comment" name="type" value="2"  type="hidden" >
			<div id="list-progres-multiple" class="formrow"></div>
			<?php $this->endWidget(); ?>	
			<div class="clear"></div>
			
			<div class="showsharing clearfix">
				<div class="owners  clearfix">
					<div style="display:none" class="ownerpicker">
						<h5>Users</h5>
						
						
					</div>
				</div>		
			</div>
		</div>
	</div>
</div>