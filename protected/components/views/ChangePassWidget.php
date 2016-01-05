<?php 
$form=$this->beginWidget('CActiveForm', array(
 'id'=>'change-form',
 'enableAjaxValidation'=>false,
  'enableClientValidation'=>true,
                'method' => 'POST',
                'clientOptions'=>array(
                     'validateOnSubmit'=>true,
                     'validateOnChange'=>true,
                     'validateOnType'=>false,
  ),
)); ?>
	<span id="acc-pass-title">CHANGE PASSWORD</span>
	<div class="table-leftmenu-2">
		<div class="row">
			<!-- <div class="label"><span class="helper">Old Password</span></div> -->
			<label id="acc-pass-label">Old Password</label>
			<div class="value">
				<?php echo $form->passwordField($user,'old_password',array("placeholder"=>"")); ?>
			</div>
		</div>
		<div class="error-change" id="change-oldpass"></div>
		<div class="row">
			<!-- <div class="label"><span class="helper">New Password</span></div> -->
			<label id="acc-pass-label">New Password</label>
			<div class="value">
				<?php echo $form->passwordField($user,'new_password',array("placeholder"=>"")); ?>
			</div>
		</div>
		<div class="error-change" id="change-newpass"></div>
		<div class="row">
			<!-- <div class="label"><span class="helper">Confirm New Password</span></div> -->
			<label id="acc-pass-label">Confirm New Password</label>
			<div class="value">
				<?php echo $form->passwordField($user,'new_password_repeat',array("placeholder"=>"")); ?>
			</div>
		</div>	
		<div class="error-change" id="change-confirmpass"></div>							
	</div>
	<div id="change-pass-message"></div>
	<div id="change-pass-loading" style="background-image:url('<?php echo Yii::app()->baseUrl ?>/img/big-loader.gif')"></div>
	 <?php echo CHtml::ajaxSubmitButton('SUBMIT',
	    array('user/changepass'),
			array(  
			'beforeSend' => 'function(){ 
			     $("#acc-pass-button").attr("disabled",true);
			     $("#acc-pass-button").val("");
			     $("#change-pass-loading").show();
			}',
			'error'=> 'function(data){
				alert(data.responseText);
			}',
			'complete' => 'function(){ 
			     $("#acc-pass-button").attr("disabled",false);
			     $("#acc-pass-button").val("SUBMIT");
			     $("#change-pass-loading").hide();
			}',
			'success'=>'function(data){  
				//alert(data);
				$("#User_old_password").css({"border":"1px solid #2D2D2D"});	
				$("#User_new_password").css({"border":"1px solid #2D2D2D"});	
				$("#User_new_password_repeat").css({"border":"1px solid #2D2D2D"});	

				$("#change-oldpass").html("");
				$("#change-newpass").html("");
				$("#change-confirmpass").html("");
				$("#change-pass-message").html("")

			    var obj = jQuery.parseJSON(data); 
			    if(obj.result == "success"){
			    	$("#User_old_password").val("");
			    	$("#User_new_password").val("");
			    	$("#User_new_password_repeat").val("");
			    	$("#change-pass-message").html(obj.message);
				}else{
					$("#change-oldpass").show();
					$("#change-newpass").show();
					$("#change-confirmpass").show();
			         
			        $("#change-oldpass").html(obj.old);
			        if(obj.old){
			        	$("#User_old_password").css({"border":"1px solid red"});	
			        }

			        $("#change-newpass").html(obj.new);
			        if(obj.new){
			        	$("#User_new_password").css({"border":"1px solid red"});	
			        }                    

			        $("#change-confirmpass").html(obj.confirm);
			        if(obj.confirm){
			        	$("#User_new_password_repeat").css({"border":"1px solid red"});	
			        }	
			   }
			}' 
	    ),
             array("id"=>"acc-pass-button")      
    ); ?>
 	
	<?php $this->endWidget(); ?>