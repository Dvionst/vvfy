<?php 
$form=$this->beginWidget('CActiveForm', array(
 'id'=>'reset-form',
 'enableAjaxValidation'=>false,
  'enableClientValidation'=>true,
                'method' => 'POST',
                'clientOptions'=>array(
                     'validateOnSubmit'=>true,
                     'validateOnChange'=>true,
                     'validateOnType'=>false,
  ),
)); ?>

	<?php echo $form->textField($model,'username',array("placeholder"=>"Email Address",'class'=>'reset-pass-email')); ?>
	
							<?php echo CHtml::ajaxSubmitButton('CHANGE PASSWORD',array('/user/lostpassword'),
						                                array(  
						            						'beforeSend' => 'function(){ 
						                                             $("#reset-pass").attr("disabled",true);
						                                             $("#reset-pass").val("");
						                                             $("#reset-pass-loading").show();
						            							}',
						            							'error'=> 'function(data){
						            								alert(data.responseText);
						            							}',
						                                        'complete' => 'function(){ 
						                                             $("#reset-pass").attr("disabled",false);
						                                             $("#reset-pass").val("CHANGE PASSWORD");
						                                             $("#reset-pass-loading").hide();
						                                        }',
						                   						'success'=>'function(data){  
																	$(".reset-pass-email").css({"border":"1px solid #191919"});	
																	$("#reset-pass-error").hide();

						                                             var obj = jQuery.parseJSON(data); 
						                                            if(obj.result == "success"){
						                                            	$(".reset-pass-email").val("");
						                                            	$(".back-to-login").trigger("click");	
						                                            	$("#login-error").html("<span>Your request has been processed!</span>");
						                                            	$("#login-error").show();
						                                      		}else{
						                                                $("#reset-pass-error").show();
						                                                $("#reset-pass-error").html(obj.error);
						                                                $(".reset-pass-email").css({"border":"1px solid red"});	
						                                           }
						                                        }' 
						    							),
						                         array("id"=>"reset-pass","class"=>"reset-pass-submit")      
						                ); ?>
 	<div class="back-to-login">Back to login</div>
 	<div id="reset-pass-error"></div>
	<div id="reset-pass-loading" style="background-image:url('<?php echo Yii::app()->baseUrl ?>/img/big-loader.gif')"></div>
	<?php $this->endWidget(); ?>