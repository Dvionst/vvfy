	
<?php 
$form=$this->beginWidget('CActiveForm', array(
 'id'=>'login-form',
 'enableAjaxValidation'=>false,
  'enableClientValidation'=>true,
                'method' => 'POST',
                'clientOptions'=>array(
                     'validateOnSubmit'=>true,
                     'validateOnChange'=>true,
                     'validateOnType'=>false,
  ),
)); ?>

	<?php echo $form->textField($model,'username',array("placeholder"=>"Email")); ?>
	<?php echo $form->passwordField($model,'password',array("placeholder"=>"Password")); ?>
	<!--<button class="sign-in-submit">SUBMIT</button>-->
	<div id="login-error"></div>
	 <?php echo CHtml::ajaxSubmitButton('SUBMIT',
	 	//'http://www.vvfy.land/index.php?r=site/login',
	    array('/site/loginajax'),
	                                array(  
	            						'beforeSend' => 'function(){ 
	                                             $("#login").attr("disabled",true);
	                                             $("#login").val("");
	                                             $("#login-loading").show();
	            							}',
	            							'error'=> 'function(data){
	            							}',
	                                        'complete' => 'function(){ 
	                                             $("#login").attr("disabled",false);
	                                             $("#login").val("SUBMIT");
	                                             $("#login-loading").hide();
	                                        }',
	                   						'success'=>'function(data){  
	                                             var obj = jQuery.parseJSON(data); 
	                                             // View login errors!
	                                            if(obj.login == "success"){
	                                            	
	                                         		parent.location.href = obj.redirect;
	                                      		}else{
	                                                $("#login-error").show();
	                                                $("#login-error").html("Invalid username or password!");
	                                                $("#LoginForm_username").val("");
	                                                $("#LoginForm_password").val("");
	                                           }
	                                        }' 
	    ),
	                         array("id"=>"login","class" => "sign-in-submit")      
	                ); ?>
 
	<div id="login-loading" style="background-image:url('<?php echo Yii::app()->baseUrl ?>/img/big-loader.gif')"></div>
	<?php $this->endWidget(); ?>