<div class="form wide">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'promotion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valid_date'); ?>
		<?php 

		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		    'attribute'=>'valid_date',
		    'model'=>$model,
		    // 'options'=>array(
	    	// ),
		    // additional javascript options for the date picker plugin
		    'options'=>array(
		    	'dateFormat'=>"yy-mm-dd",
		        'showAnim'=>'fold',
		    ),
		    'htmlOptions'=>array(
		        // 'style'=>'height:20px;'
		    ),
		));

		?>
		<?php // echo $form->textField($model,'valid_date'); ?>
		<?php echo $form->error($model,'valid_date'); ?>
		<p class="note">promotion will show until valid date you create</p>

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->