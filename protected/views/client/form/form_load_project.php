<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<style>
.form-load-project .close{
	width: 20px;
	height: 20px;
	position: absolute;
	right: 2px;
	top: 2px;
	cursor: pointer;

}
.form-load-project{
	width: 300px;
	height: 320px;
	position: fixed;
	margin:auto;
	top:100px;
	bottom:0px;
	left:0px;
	right:0px;
	border: 1px solid white;
	background-color:black;
	z-index: 207;
	padding: 20px;
	color: white;
	display: none;
	/*cursor: drag;*/
}

.form-load-project .row .name, .form-load-project .row .value{
	margin: 5px;
}
.form-load-project .row .value input {
	padding:3px 5px 3px 5px;
	width: 100%;
	height: 30px;
}
.form-load-project .row .value .submit {
   
    text-align: center;
    font-size: 12px;
    width: 100%;
    height: 30px;
    /*padding: 10px;*/
  	 position: relative;	
    background-color: rgba(226,151,0,1);
    color: black;
    letter-spacing: 3px;
    background-image: none;
    text-transform: uppercase;
    cursor: pointer;
}
.form-load-project .row .name{
	letter-spacing: 2px;
}
.form-load-project .row{
	margin-top: 5px;
	padding: 5px;
}
.form-load-project .title{
	font-size: 30px;
	font-weight: bolder;
	color: white;

}
</style>

<div class="form-load-project">
	<img  class="close" src="<?php echo Yii::app()->request->baseUrl ?>/img/red-delete.png">
	<div class="title">
		ADD PROJECT
	</div>
	
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'member-sub-form',
			'enableAjaxValidation'=>true,
			'enableClientValidation'=>true,
			'action'=>Yii::app()->createAbsoluteUrl('Project/create')
		)); ?>

		<?php 
		$model = new Project;

		?>
		<div class="row">
			<div class="name">PROJECT NAME</div>
			<div class="value">
			<?php echo $form->textField($model,'project_name',array('size'=>50,'maxlength'=>50)); ?>
			</div>
		</div>
		<div class="row">
			<div class="name">DUE DATE OF PROJECT </div>
			<div class="value">
			<?php echo $form->textField($model,'due_date'); ?>
			</div>
		</div>
		<div class="row">
			<div class="value">
				<?php 
				echo CHtml::submitButton('Save', array('confirm'=>'Are you sure you want to add project ?','class'=>'submit'));
				?>
				<!-- <input class="submit" type="submit" value="Save !"> -->
			</div>
		</div>
		<?php $this->endWidget(); ?>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		 $( ".form-load-project" ).draggable({
		 		containment: "body", 
		 		axis: "y"  
	 	});
		 // $('.full').fadeIn();
	 	$(document).on("click",".upgrade-new-project-btn",function(){
	 		openFormProject();
	 	});
	 	$(document).on("click",".form-load-project .close",function(){
	 		closeFormProject();
	 	});
	 	// $(document).on("click",".",function(e){
	 	// 	$('#body-full').fadeOut();
	 	// 	$('.form-load-project').fadeOut();

	 	// });
	 	function openFormProject(){
 			$('#body-full').fadeIn();
	 		$('.form-load-project').fadeIn();
	 	}
 		function closeFormProject(){
 			$('#body-full').fadeOut();
	 		$('.form-load-project').fadeOut();
	 	}
	 	 $("#Project_due_date").datepicker({"dateFormat":"yy-mm-dd"});
	 // 	$('#duedate').datepicker({
		// 	language: 'en',
		// 	minDate: new Date() // Now can select only dates, which goes after today
		// })
		 
		 
	});
	 	
</script>
