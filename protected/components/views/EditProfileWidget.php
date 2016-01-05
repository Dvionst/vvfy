<?php 
$form=$this->beginWidget('CActiveForm', array(
 'id'=>'info-form',
 'enableAjaxValidation'=>false,
  'enableClientValidation'=>true,
                'method' => 'POST',
                'clientOptions'=>array(
                     'validateOnSubmit'=>true,
                     'validateOnChange'=>true,
                     'validateOnType'=>false,
  ),
)); ?>
	<span id="acc-edit-title">EDIT PROFILE</span>
	<div class="table-leftmenu-2">
		<div class="row">
			<!-- <div class="label"><span class="helper">Old Password</span></div> -->
			<label id="acc-edit-label">FULL NAME</label>
			<div class="value">
				<?php echo $form->textField($model,'name',array("placeholder"=>"","value"=>$model->name)); ?>
			</div>
		</div>
		<div class="error-edit" id="edit-name"></div>
		<div class="row">
			<!-- <div class="label"><span class="helper">New Password</span></div> -->
			<label id="acc-edit-label">COMPANY NAME</label>
			<div class="value">
				<?php echo $form->textField($model,'company_name',array("placeholder"=>"","value"=>$model->company_name)); ?>
			</div>
		</div>
		<div class="error-edit" id="edit-company"></div>
		<div class="row">
			<!-- <div class="label"><span class="helper">Confirm New Password</span></div> -->
			<label id="acc-edit-label">PHONE</label>
			<div class="value">
				<?php echo $form->textField($model,'phone',array("placeholder"=>"","value"=>$model->phone)); ?>
			</div>
		</div>	
		<div class="error-edit" id="edit-phone"></div>					
		<div class="row">
			<!-- <div class="label"><span class="helper">Confirm New Password</span></div> -->
			<label id="acc-edit-label">ADDRESS</label>
			<div class="value">
				<?php echo $form->textField($model,'address',array("placeholder"=>"","value"=>$model->address)); ?>
			</div>
		</div>	
		<div class="error-edit" id="edit-address"></div>								
	</div>
	<div id="edit-message"></div>
	<div id="edit-loading" style="background-image:url('<?php echo Yii::app()->baseUrl ?>/img/big-loader.gif')"></div>
	 <?php echo CHtml::ajaxSubmitButton('SUBMIT',
	    array('member/changeinfo'),
			array(  
			'beforeSend' => 'function(){ 
			     $("#acc-edit-button").attr("disabled",true);
			     $("#acc-edit-button").val("");
			     $("#edit-loading").show();
			}',
			'error'=> 'function(data){
				alert(data.responseText);
			}',
			'complete' => 'function(){ 
			     $("#acc-edit-button").attr("disabled",false);
			     $("#acc-edit-button").val("SUBMIT");
			     $("#edit-loading").hide();
			}',
			'success'=>'function(data){  
				//alert(data);
				$("#Member_name").css({"border":"1px solid #2D2D2D"});	
				$("#Member_company_name").css({"border":"1px solid #2D2D2D"});	
				$("#Member_phone").css({"border":"1px solid #2D2D2D"});	
				$("#Member_address").css({"border":"1px solid #2D2D2D"});	

				$("#edit-name").html("");
				$("#edit-company").html("");
				$("#edit-phone").html("");
				$("#edit-address").html("");
				$("#edit-message").html("")

			    var obj = jQuery.parseJSON(data); 
			    if(obj.result == "success"){
					$("#Member_name").val("");
					$("#Member_company_name").val("");
					$("#Member_phone").val("");
					$("#Member_address").val("");
			    	$("#edit-message").html(obj.message);
			    	$("#acc-info-detail").html(obj.html);
				}else{
					$("#edit-name").show();
					$("#edit-company").show();
					$("#edit-phone").show();
					$("#edit-address").show();
			         
			        $("#edit-name").html(obj.name);
			        if(obj.name){
			        	$("#Member_name").css({"border":"1px solid red"});	
			        }

			        $("#edit-company").html(obj.company);
			        if(obj.company){
			        	$("#Member_company_name").css({"border":"1px solid red"});	
			        }

			        $("#edit-phone").html(obj.phone);
			        if(obj.phone){
			        	$("#Member_phone").css({"border":"1px solid red"});	
			        }		

			        $("#edit-address").html(obj.address);
			        if(obj.address){
			        	$("#Member_address").css({"border":"1px solid red"});	
			        }			

			   }
			}' 
	    ),
             array("id"=>"acc-edit-button")      
    ); ?>
 	
	<?php $this->endWidget(); ?>