<div class="form wide">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-sub-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php// echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>

	

	<div class="row">
		<?php echo $form->labelEx($user,'password'); ?>
		<?php echo $form->passwordField($user,'password',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($user,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user,'repeat_password'); ?>
		<?php echo $form->passwordField($user,'repeat_password',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($user,'repeat_password'); ?>
	</div>



	<?php if ($model->isNewRecord): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_member'); ?>
		<?php echo $form->textField($model,'id_member'); ?>
		<?php echo $form->error($model,'id_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_invite'); ?>
		<?php echo $form->textField($model,'date_invite'); ?>
		<?php echo $form->error($model,'date_invite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_email'); ?>
		<?php echo $form->textField($model,'status_email'); ?>
		<?php echo $form->error($model,'status_email'); ?>
	</div>
<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Register' : 'Save',
			array(
				'style'=>'color:black'
			)

		); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->