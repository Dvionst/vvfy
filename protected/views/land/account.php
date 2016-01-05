<?php 
	$id = Yii::app()->user->id;
?>
<style type="text/css">
	#wrapper-account{
		position: relative;
	}
	#wrapper-account .section-account{
		float:left;
	}
	#wrapper-account .photo{
		width: 200px;
		display: none;
		margin-left:50px;
		height: 100px;
		position: absolute;
		right: 0px;
		top: 0px;
		/*background-color: red;*/
		
	}
	#wrapper-account .photo img{
		width: 100%;
	}
	#wrapper-account .profil{
		/*width: 200px;*/
		margin-left:50px;
		height: 100px;
	}
	#wrapper-account .notification{
		/*background-color: red;*/
		width: 300px;
		height: 100px;
	}
	.wrapper-box-notif{
		position: relative;
		float: left;
		height: 350px;
		overflow-y: auto;
		overflow-x: hidden;
	}
	#wrapper-account .notification .box-notif{
		width: 100%;
		border-bottom:5px solid yellow;
		height: auto;
		padding: 10px;
		float: left;
		margin-bottom: 5px;
		background-color: rgba(233,255,217,1);

	}
	#wrapper-account .notification .read{
		
		border-bottom:5px solid black;
		background-color: rgba(255,255,255,1);

	}
	#wrapper-account .notification .box-notif .title-notif{
		font-weight: bolder;
		text-transform: uppercase;
	}
	.desc-notif{
		font-size: 12px;
	}

	#wrapper-account .change-password{
		background-color: transparent;
		width: 300px;
		height: auto;
	}
	.section-account .title{
		text-transform: uppercase;
		color: black;
		float: left;
		font-size: 18px!important;
		margin-bottom: 10px;
	}
</style>
<div id="wrapper-account">
	<div class="change-password section-account">
		<div class="title">Change Password</div>
		<div class="wide form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'user-form',
			'enableAjaxValidation'=>true,
			'enableClientValidation'=>true,
			'focus'=>array($model,'old_password'),
		)); ?>
			<div class="row">
				<?php echo $form->labelEx($model,'old_password'); ?>
				<?php echo $form->passwordField($model,'old_password',array('size'=>30,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'old_password'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'new_password'); ?>
				<?php echo $form->passwordField($model,'new_password',array('size'=>30,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'new_password'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'new_password_repeat'); ?>
				<?php echo $form->passwordField($model,'new_password_repeat',array('size'=>30,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'new_password_repeat'); ?>
			</div>
			<div class="row ">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
			</div>

		<?php $this->endWidget(); ?>

		</div>
	</div>

	<div class="section-account notification">
		<div class="title">notification</div>
		<div class="wrapper-box-notif">
		<?php
		$sql = "select * from notification_team where username = '$id'  ";
		$model = Yii::app()->db->createCommand($sql)->queryAll();?>

		 <?php
		 if (count($model)>0){
			foreach ($model as $m ) { ?>
			<div class="box-notif <?php if ($m[is_baca==1]) echo "read" ?>">
				<div class="title-notif">
					<?php echo $m[judul] ?>
					<p style="font-size:10px;">
						<?php echo date('d M Y, H:i',strtotime($m[tanggal])) ?>							
					</p>
				</div>
				<div class="desc-notif">
					<?php echo $m[keterangan] ?>
				</div>
			</div>
			<?php } ?>
	<?php }else{ ?>
		<p>Notification not available</p>
	<?php }; ?>

	
		</div>

	</div>

	<div class="section-account profil">
		<div class="title">Profil</div>
		<?php
		
			// echo $id;
			$model = Team::model()->find("username = '$id' ");
			// echo  $id;
			// echo count($model);
		 ?>
			<div class="wide form">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'team-form',
				'enableAjaxValidation'=>false,
			)); ?>
				<?php echo $form->errorSummary($model); ?>
				<div class="row">
					<?php echo $form->labelEx($model,'name'); ?>
					<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
					<?php echo $form->error($model,'name'); ?>
				</div>
				<div class="row">
					<?php echo $form->labelEx($model,'facebook'); ?>
					<?php echo $form->textField($model,'facebook',array('size'=>50,'maxlength'=>50)); ?>
					<?php echo $form->error($model,'facebook'); ?>
				</div>
				<div class="row">
					<?php echo $form->labelEx($model,'skype'); ?>
					<?php echo $form->textField($model,'skype',array('size'=>50,'maxlength'=>50)); ?>
					<?php echo $form->error($model,'skype'); ?>
				</div>
				<div class="row">
					<?php echo $form->labelEx($model,'linkedin'); ?>
					<?php echo $form->textField($model,'linkedin',array('size'=>50,'maxlength'=>50)); ?>
					<?php echo $form->error($model,'linkedin'); ?>
				</div>

				

				<div class="row buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				</div>

			<?php $this->endWidget(); ?>
			</div>
	</div>
	<div class="photo">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg">
	</div>
	<div style="clear:both"></div>
</div>
