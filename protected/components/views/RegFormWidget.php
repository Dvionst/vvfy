	
<?php 
$form=$this->beginWidget('CActiveForm', array(
 'id'=>'reg-form',
 'enableAjaxValidation'=>false,
  'enableClientValidation'=>true,
                'method' => 'POST',
                'clientOptions'=>array(
                     'validateOnSubmit'=>true,
                     'validateOnChange'=>true,
                     'validateOnType'=>false,
  ),
)); ?>

	<?php echo $form->textField($user,'username',array("placeholder"=>"Email Address")); ?>
	<div id="signup-error" class="signup-email"></div>
	<?php echo $form->textField($member,'name',array("placeholder"=>"username")); ?>
	<div id="signup-error" class="signup-username"></div>
	<?php echo $form->passwordField($user,'password',array("placeholder"=>"Password")); ?>
	<div id="signup-error" class="signup-password"></div>
	<?php echo $form->passwordField($user,'repeat_password',array("placeholder"=>"Confirm Password")); ?>
	<div id="signup-error" class="signup-repeat_password"></div>
	<div class='line-cs-2' style="display:none"></div>
	<div class="lbl-cs" style="color:#A6A6A6;top: 14px;position: relative; margin-right:10px; display:none">
		SELECT ACCOUNT
	</div>
	<center>
	<div class="radio-register" style="display:none">
		<div class="wrap-radio-register">
		<input type="radio" id="Member_type_account_1" name="Member[type_account]" value="1" checked><label for="Member_type_account_1"><span></span> STANDART ACCOUNT</label>
		</div>
		<div class="wrap-radio-register">
		<input type="radio" id="Member_type_account_2" name="Member[type_account]" value="2"><label for="Member_type_account_2"><span></span> &nbsp;&nbsp;PREMIUM ACCOUNT&nbsp;</label>
		</div>
	</div>				
	<!--<button  class="sign-up-submit">SUBMIT</button>-->
	 <?php echo CHtml::ajaxSubmitButton('SUBMIT',
	    array('user/create'),
	                                array(  
	            						'beforeSend' => 'function(){ 
	                                             $("#sign-up").attr("disabled",true);
	                                             $("#sign-up").val("");
	                                             $("#signup-loading").show();
	            							}',
	            							'error'=> 'function(data){
	            								alert(data.responseText);
	            							}',
	                                        'complete' => 'function(){ 
	                                             $("#sign-up").attr("disabled",false);
	                                             	$("#sign-up").val("SUBMIT");
	                                             $("#signup-loading").hide();
	                                        }',
	                   						'success'=>'function(data){  
												$("#User_username").css({"border":"1px solid #191919"});	
												$("#Member_name").css({"border":"1px solid #191919"});	
												$("#User_password").css({"border":"1px solid #191919"});		
												$("#User_repeat_password").css({"border":"1px solid #191919"});	

												$(".signup-email").html("");
												$(".signup-username").html("");
												$(".signup-password").html("");
												$(".signup-repeat_password").html("");

	                                            var obj = jQuery.parseJSON(data); 
	                                             // View login errors!
	                                            // alert(JSON.stringify(data));
	                                            if(obj.reg == "success"){
	                                            	$("#reg-conf-email").html(obj.email);
	                                         		$("#left-menu-full-black").fadeIn();
		 											$("#wrap-reg-conf").fadeIn();
	                                         		//parent.location.href = obj.redirect;
	                                      		}else{
	                                                $(".signup-email").show();
	                                                $(".signup-username").show();
	                                                $(".signup-password").show();
	                                                $(".signup-repeat_password").show();
		                                             
	                                                $(".signup-email").html(obj.email);
	                                                if(obj.email){
	                                                	$("#User_username").css({"border":"1px solid red"});	
	                                                }

	                                                $(".signup-username").html(obj.username);
	                                                if(obj.username){
	                                                	$("#Member_name").css({"border":"1px solid red"});	
	                                                }	                    

	                                                $(".signup-password").html(obj.password);
	                                                if(obj.password){
	                                                	$("#User_password").css({"border":"1px solid red"});	
	                                                }	

	                                                $(".signup-repeat_password").html(obj.repeat_password);
	                                                if(obj.repeat_password){
	                                                	$("#User_repeat_password").css({"border":"1px solid red"});	
	                                                }	
	                                           }
	                                        }' 
	    ),
	                         array("id"=>"sign-up","class" => "sign-up-submit")      
	                ); ?>
 	<div id="signup-loading" style="background-image:url('<?php echo Yii::app()->baseUrl ?>/img/big-loader.gif')"></div>
	</center>
	<?php $this->endWidget(); ?>