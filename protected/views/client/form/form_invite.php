<style type="text/css">
	#wrap-invite{
		overflow: visible;
		width: 400px;
	    height: 200px;
	    background-color: white;
	    position: fixed;
	    top: -200px;
	    padding: 0px 10px 10px 10px;
	    right: 0px;
	    display: none;
	    z-index: 206;	
	    margin: auto;
	    left: 0;
	    bottom: 0;
	    border-radius:5px;
	   /* webkit-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
		-moz-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
		box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
*/
	}
	#wrap-invite #email{
		width: 100%;
		font-size: 15px;
		background-color: #fff;
		padding: 10px;

	}
	#wrap-invite .loader, .close-dialog {
		width: 20px;
		height: auto;
		position: absolute;
		top:5px;
		right: 5px;
		cursor: pointer;
	}
	#wrap-invite .loader{
		display: none;
	}
	#submit-invite{
		border: 1px solid transparent;
		margin-top: 10px;
		cursor: pointer;
		text-align: center;
		font-size: 15px;
		width: 100%;
		padding: 10px;
		float: left;
		background-color: rgba(226,151,0,1);
		color: black;
		letter-spacing: 3px;
		webkit-transition: 200ms border;
		moz-transition: 200ms border;
		transition: 200ms border;
	}
</style>
<div id="wrap-invite">
	<h3>Invite  Employee's Email</h3>
	<img class="action  loader"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" alt="" >		
	<img class="close-dialog close"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/close.png" alt="" >
	<!-- <form id="form-invite-employee" action="<?php echo Yii::app()->createUrl('member/sendinvite'); ?>" > -->
	<?php 
	$model  = new MemberSub;
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'form-invite-employee',
		'enableAjaxValidation'=>false,
		'action'=>Yii::app()->createUrl('member/sendinvite'),
	)); 
	?>	
		Email  : <?php echo $form->textfield($model,'email',array('name'=>'email','type'=>'email')) ?> 
		<!-- <input type="email" name="email" required > -->
		<!-- <input type="submit" value="Send"> -->
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send' : 'Save',array('id'=>'submit-invite')); ?>
		<div class="error-invite"></div>
		<div class="succes-invite"></div>
	<?php $this->endWidget(); ?>
</div>	

<script type="text/javascript">
	
	$(document).ready(function(){
		$(document).on("click","#wrapper-employe .invite",function(){
	 		$('#body-full').fadeIn();
	 		$('#wrap-invite').fadeIn();
	 		$('#email').focus();		

	 	});
		$(document).on("click","#wrap-invite .close-dialog",function(){
			var val = $('#wrap-invite #email').val();
			if (val.length==0){	
				$('#body-full').fadeOut();
		 		$('#wrap-invite').fadeOut();
		 		$('.succes-invite').html(' ');		
			}else{
				if (confirm("Are you sore close ?")){
					$('#body-full').fadeOut();
		 			$('#wrap-invite').fadeOut();
		 			$('.succes-invite').html(' ');		
					
				}
			}
	 	});

		$(document).on('submit','#form-invite-employee',function(e){
			e.preventDefault();
			// alert('submit ');
			$.ajax({
			url : '<?php echo Yii::app()->createUrl('member/sendinvite'); ?>',
			data: 'email='+$('#email').val(),
			type: 'GET',
			beforeSend: function(){
				$('.loader').show();
				$('.close').hide();
				$('#submit-invite').attr('disabled',true);

			},
			success: function(datas){
			// alert(datas);
				if (datas=='sukses'){
					$('.succes-invite').html('succes invited');		
					$('#email').val("");						
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
				$('.loader').hide();
				$('.close').show();
				$('#submit-invite').attr('disabled',false);
			},
			error: function(data){
				alert('connection timeout');
				closeDialog();
			}
			// error
			});
		});

	});

</script>