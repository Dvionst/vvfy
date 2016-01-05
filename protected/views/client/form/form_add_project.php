<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<style>
.form-add-project .close{
	width: 20px;
	height: 20px;
	position: absolute;
	right: 2px;
	top: 2px;
	cursor: pointer;

}
.form-add-project{
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

.form-add-project .row .name, .form-add-project .row .value{
	margin: 5px;
}
.form-add-project .row .value input {
	padding:3px 5px 3px 5px;
	width: 100%;
	height: 30px;
}
.form-add-project .row .value .submit {
   
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
.form-add-project .row .name{
	letter-spacing: 2px;
}
.form-add-project .row{
	margin-top: 5px;
	padding: 5px;
}
.form-add-project .title{
	font-size: 30px;
	font-weight: bolder;
	color: white;

}
</style>

<div class="form-add-project">
	<img  class="close" src="<?php echo Yii::app()->request->baseUrl ?>/img/red-delete.png">
	<div class="title">
		ADD PROJECT
	</div>
	
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'project-form',
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
		 $( ".form-add-project" ).draggable({
		 		containment: "body", 
		 		axis: "y"  
	 	});
		 // $('.full').fadeIn();
	 	$(document).on("submit","#project-form",function(e){
	 		e.preventDefault();
	 		$.ajax({
				url : '<?php echo Yii::app()->createUrl('project/create'); ?>',
				data: $(this).serialize(),
				type: 'POST',
				beforeSend: function(){
					// $('.loader').show();
					// $('.close').hide();
					// $('#submit-invite').attr('disabled',true);

				},
				success: function(datas){
					// alert(datas);
				// alert(datas);
					if (datas=='sukses'){
						// $('.succes-invite').html('succes invited');		
						$().toastmessage('showSuccessToast', "Project has been added for your account !");
						// $('#email').val("");	
						closeFormProject();	
						resetFormProject();	
						window.location.reload();
						// reloadProjectLM();		
					}else{
						var obj = jQuery.parseJSON(datas);
						// alert(JSON.stringify(obj));
						$.each(obj,function( index,value ) {
							// alert('123');
							// alert(value);
							$().toastmessage('showErrorToast', value);

						  // console.log( index + ": " + $( this ).text() );
						});
						// $('.error-invite').html(datas);
					}
					// $('.loader').hide();
					// $('.close').show();
					// $('#submit-invite').attr('disabled',false);
				},
				error: function(data){
					alert(JSON.stringify(data));

				},
				complete:function(data){
					// if (data=='sukses')
						
					// alert(data);
				}
			// error
			});
	 		// alert("123");
	 	});
	 	$(document).on("click",".upgrade-new-project-btn",function(){
	 		openFormProject();
	 		$('#Project_project_name').focus();
	 	});
	 	$(document).on("click",".form-add-project .close",function(){
	 		closeFormProject();
	 	});
	 	// $(document).on("click",".",function(e){
	 	// 	$('#body-full').fadeOut();
	 	// 	$('.form-add-project').fadeOut();

	 	// });
		function resetFormProject(){
			$('#Project_project_name').val("");
			$('#Project_due_date').val("");
		}
	 	function openFormProject(){
 			$('#body-full').fadeIn();
	 		$('.form-add-project').fadeIn();
	 	}
 		function closeFormProject(){
 			$('#body-full').fadeOut();
	 		$('.form-add-project').fadeOut();
	 	}
	 	 $("#Project_due_date").datepicker({"dateFormat":"yy-mm-dd"});
	 // 	$('#duedate').datepicker({
		// 	language: 'en',
		// 	minDate: new Date() // Now can select only dates, which goes after today
		// })
		 
		 
	});
	 	
</script>
