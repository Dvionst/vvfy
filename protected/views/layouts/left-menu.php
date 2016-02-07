<?php
	define('OPT_ARCHITECTURE', 'Architecture');
	define('OPT_INTERIOR', 'Interior');
	define('OPT_ARCHITECTURE_AND_INTERIOR', 'Architecture & Interior');
	define('OPT_PRODUCT', 'Product');
?>
<script src="<?php echo Yii::app()->request->baseUrl ?>/js/smooth/jquery.smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/scrollTo/jquery.scrollTo.min.js"></script>
<!--<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.nicescroll.js"></script>-->
<script src="<?php echo Yii::app()->request->baseUrl ?>/js/scrollstyle/jquery.custom-scrollbar.js"></script>

<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/js/scrollstyle/jquery.custom-scrollbar.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/all.css" type="text/css" /> 
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/left-menu.css" type="text/css" /> 
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/responsive.css" type="text/css" media="all" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/hover-min.css" rel="stylesheet" media="all">
<!--[if lt IE 9]>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.placeholder.min.js"></script>
<![endif]-->

<style type="text/css">
	.right-menu a:hover{
		color:red;
	}
</style>
<div class="kontener" ></div>
<div class="main_header" style="position:fixed" >
	<a href="#" class="logo">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_def">
<!-- 			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_retina"> -->
	</a>   
	<div id ="left-menu-full-black"></div>
	<div id ="wrap-reg-conf">
		<div id ="reg-conf-logo" style="background-image:url('<?php echo Yii::app()->BaseUrl ?>/img/gambar.png')"></div>
		<div id ="reg-conf-title">Verify Your Email</div>
		<div id ="reg-conf-detail">We sent a verification email to <span id="reg-conf-email">EMAIL</span>. Click the link in  the email to get started!</div>
		<button id ="reg-conf-close">DONE</button>
	</div>
	

	<div  class="header_scroll">
		<a href="javascript:void(0)" class="menu_toggler"></a>	
	<!-- 	<a href="#" onclick="javascript.void(0)" class="logo">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_def">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_retina">
		</a>  -->
		<div id="wrapper-employe" class="hvr-buzz-out">
			<ul>
				<li>
					<img title="Invite new Employe" class="employe hvr-grow invite" src="<?php echo Yii::app()->request->baseUrl ; ?>/img/baru/user/add-employe.ico">
				</li>
				<li>
					<img title="Invite new Employe" class="employe hvr-grow list" src="<?php echo Yii::app()->request->baseUrl ; ?>/img/baru/user/list-employe.ico">	
				</li>
				<div style="clear:both"></div>
			</ul>
		</div>
		<div class="backtohome">
			<div class="label-back">
				<p>BACK TO HOME</p>
				<img style="width:20px;height:auto" class="red-right-arrow"  src="<?php echo Yii::app()->request->baseUrl ?>/img/red-arrow.png"> 
			</div>
			<div class="line-content-menu"></div>
		</div>
		<div class="menu-content" >

<!-- 			<div id="menu-our-services" class="cont-our-service">
				<section id="section-one">
					<div id="menu-satu-satu">
						<div id="menu-list-account">
							<div id="btn-pa"  class="box-account-1">
								<p class="heading-ba">PREMIUM<br>ACCOUNT</p>
								<p class="detail-ba">per month based packages</p>
							</div>
							<div class="box-account-2">
							<p style="font-size: 14px;" class="heading-box-2">REGISTER <br> NOW</p>
							</div>

							<div class="box-account-3" style="background:rgba(78,71,61,0.8)">
								
							</div>
							<div id="btn-sa"  class="box-account-4" style="">
								<p class="heading-box-3">STANDARD<br>ACCOUNT</p>
								<p class="detail-box-3">pay per View & Project</p>
							</div>
						</div>
						<div id="menu-video">
							<div class="youtube-container">
							   <div class="youtube-player" data-id="VIDEOID">
							   </div>
							</div>
							<div class="standart-account" style="background-image:url('<?php echo Yii::app()->BaseUrl; ?>/img/standart-account.png')"></div>
							<div class="content-stn">
								<p class="heading-stn">
									STANDARD ACCOUNT
								</p>
								<div class="line-standar"></div>
									<p class="stn-desc">Organize your budget based on needs per projects</p>
								<div class="stn-concept"></div>		
							</div>
							<div class="content-premium">
								<p class="heading-stn">
									SHOW VIDEO
								</p>
								<div class="line-standar"></div>
									<p class="stn-desc">Organize your budget based on needs per projects</p>
								
							</div>
							
						</div>
					</div>
			
				
				<div id="menu-price-calc">
					<div class="line-calc"></div>

					<p class="calc-desc">
						Plan your project with PRICE CALCULATOR
					</p>

					<div class="btn-calc">
						PRICE CALCULATOR
					</div>

				</div>
				<div id="menu-list-perm">
					<div class="desc-perm">
						ALL ACCOUNT HAVE ACCESS TO :
					</div>		
					
					<div class="line-perm"></div>

					<ul class="inline" >	
						<li><a href="#">followup daily progress</a></li>
						<li><a href="#">discount perks</a></li>
						<li><a href="#">updates on your R&D process</a></li>
					</ul>	
					<ul class="inline">
						<li><a href="#">comment app</a></li>
						<li><a href="#">track the project</a></li>
						<li><a href="#">control the budget</a></li>
					</ul>	

				</div>

				</section>
			</div> -->


			
			<div id="menu-instant-offer" class="cont-instant-offer">
				<?php 
				$calc = new CalculationHead;
				$det_calc = new CalculationDetail;
				$form=$this->beginWidget('CActiveForm', array(
				 'id'=>'calc-form',
				 'enableAjaxValidation'=>false,
				  'enableClientValidation'=>true,
				                'method' => 'POST',
				                'clientOptions'=>array(
				                     'validateOnSubmit'=>true,
				                     'validateOnChange'=>true,
				                     'validateOnType'=>false,
				  ),
				)); ?>
				<div class="wrapper-calc">
					<div class="table-leftmenu">
						<div class="row">

							<div class="label"><span class="helper">Project Type</span></div>
							<div class="value">
								<?php echo $form->dropDownList($calc, 'project_type', CHtml::listData(ProjectType::model()->findAll(), 'id', 'name'),array('empty'=>'Choose Project Type','class'=>'project-type'));  ?>
					<!-- 			<select class="project-type">
									<option>Choose Project Type</option>
									<option><?php echo OPT_ARCHITECTURE; ?></option>
									<option><?php echo OPT_INTERIOR; ?></option>
									<option><?php echo OPT_ARCHITECTURE_AND_INTERIOR; ?></option>
									<option><?php echo OPT_PRODUCT; ?></option>
								</select> -->
							</div>
						</div>
						<div class="row" id="row-view-count" style="display:none"><!-- if architecture -->
							<div class="label"><span class="helper">views count</span></div>
							<div class="value">
								<?php echo $form->textField($calc,'views_count',array("onkeypress"=>"return AllowNumbersOnly(event)")); ?> 
								<!-- <input type="text" onkeypress = "return AllowNumbersOnly(event)">  -->
								<div class="calc-error" id="calc-error-vc"></div>
							</div>

						</div>
						<div class="row" id="row-interior-areas" style="display:none"><!-- if interior -->
							<div class="label"><span class="helper">Interior Areas</span></div>
							<div class="value">
								<?php echo $form->textField($calc,'interior_areas',array("onkeypress"=>"return AllowNumbersOnly(event)","maxlength"=>"3","class"=>"input-interior-areas")); ?> 
								<!-- <input type="text" maxlength="3" class="input-interior-areas" onkeypress = "return AllowNumbersOnly(event)"> -->
								<div class="calc-error" id="calc-error-ia"></div>
							</div>
						</div>
						<div class="row" id="row-style-project"  style="display:none"><!-- if architecture and interior -->
							<div class="label"><span class="helper">STYLE OF PROJECT</span></div>
							<div class="value">
								<div class="container-radio" style="float:none">
									<div class="wrap-radio" style="width: 150px">
										<?php echo $form->radioButton($calc,'project_style',array('value'=>1,'uncheckValue'=>null,'id'=>'radio11')); ?>
										<!-- <input type="radio" id="radio11" name="style"> -->
										<label for="radio11"><span></span> MODERN</label>
										
									</div>
									<div class="wrap-radio" style="width: 150px">
										<?php echo $form->radioButton($calc,'project_style',array('value'=>2,'uncheckValue'=>null,'id'=>'radio12')); ?>
										<!-- <input type="radio" id="radio12" name="style"> -->
										<label for="radio12"><span></span> CLASSIC</label>
									</div>
									<div style="clear:both"></div>
								</div>
								<div class="calc-error" id="calc-error-sop"></div>
							</div>
						</div>					
						<div class="row" id="row-product-type" style="display:none"> 
							<div class="label"><span class="helper">Product Type</span></div>
							<div class="value">
								<?php echo $form->dropDownList($calc, 'product_type', CHtml::listData(ProductType::model()->findAll(), 'id', 'name'),array('empty'=>'Choose Product Type','class'=>'product-type'));  ?>
<!-- 								
								<select class="product-type">
									<option>Choose Product Type</option>
									<option>Furniture</option>
									<option>Fixture</option>
								</select> -->
								<div class="calc-error" id="calc-error-pt"></div>
							</div>
						</div>	
						<div class="row" id="row-number-views" style="display:none"><!-- if architecture -->
							<div class="label"><span class="helper">Number of views</span></div>
							<div class="value">
								<?php echo $form->textField($calc,'number_views',array("onkeypress"=>"return AllowNumbersOnly(event)")); ?> 
								<!-- <input type="text" onkeypress = "return AllowNumbersOnly(event)">  -->
								<div class="calc-error" id="calc-error-nv"></div>
							</div>
						</div>						
						<div class="row" id="row-deadline" style="display:none"><!-- if architecture -->
							<div class="label"><span class="helper">Deadline</span></div>
							<div class="value">
								<?php
									$date = array();
									for ($i=1; $i <= 31; $i++) { 
										$date[$i] = $i;
									}
								?>
								<?php echo $form->dropDownList($calc, 'date', $date, array('empty'=>'DATE','class'=>'calc-date','style'=>'width:29.4%!important;'));  ?>
								<script> $(".calc-date").val(""); </script>
<!-- 								<select class="calc-date" style="width:29%!important;" placeholder="lol">
									<option>DATE</option>
								</select> -->
								<?php
									$month = array();
									for ($i=1; $i <= 12; $i++) { 
										$month[$i] = $i;
									}
								?>
								<?php echo $form->dropDownList($calc, 'month', $month, array('empty'=>'MONTH','class'=>'calc-month','style'=>'width:29.4%!important;'));  ?>
								<script> $(".calc-month").val(""); </script>
			<!-- 					<select class="calc-month" style="width:30%!important;">
									<option>MONTH</option>
								</select> -->
								<?php
									$year = array();
									for ($i=2016; $i <= 2100; $i++) { 
										$year[$i] = $i;
									}
								?>
								<?php echo $form->dropDownList($calc, 'year', $year, array('empty'=>'YEAR','class'=>'calc-year	','style'=>'width:29.4%!important;'));  ?>
								<script> $(".calc-year").val(""); </script>
								<!-- <select class="calc-year" style="width:30%!important;">
									<option>YEAR</option>
								</select> -->
								<div class="calc-error" id="calc-error-dl"></div>
							</div>
							
						</div>
						<div class="row" id="row-reference" style="display:none"><!-- if architecture -->
							<div class="label">Reference</div>
							<div class="value">
								<div class="container-radio">
									<div class="wrap-radio">
										<?php echo $form->radioButton($calc,'reference',array('value'=>1,'uncheckValue'=>null,'id'=>'radio01')); ?>
										<!-- <input type="radio" id="radio01" name="reference"> -->
										<label for="radio01"><span></span> CONCEPTUAL RENDERS</label>
										<img class="img-radio" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/7.jpg">
									</div>
									<div class="wrap-radio">
										<?php echo $form->radioButton($calc,'reference',array('value'=>2,'uncheckValue'=>null,'id'=>'radio02')); ?>
										<!-- <input type="radio" id="radio02" name="reference"> -->
										<label for="radio02"><span></span> REALISTIC RENDERS</label>
										<img class="img-radio" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/2.jpg">		
									</div>
									<div class="wrap-radio">
										<?php echo $form->radioButton($calc,'reference',array('value'=>3,'uncheckValue'=>null,'id'=>'radio03')); ?>
										<!-- <input type="radio" id="radio03" name="reference"> -->
										<label for="radio03"><span></span> HiGHEST QUALITY RENDERS</label>
										<img class="img-radio" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/12.jpg">
									</div>
									<div style="clear:both"></div>

								</div>
								<div class="calc-error" id="calc-error-ref" style="margin-top: 162px;"></div>
							</div>
							
						</div>
						<div class="row" id="row-email" style="display:none"><!-- if architecture -->
							<div class="label"><span class="helper">Email</span></div>
							<div class="value">
								<?php echo $form->textField($calc,'email'); ?> 
								<div class="calc-error" id="calc-error-email"></div>
							</div>
						</div>
						<div class="row" id="row-phone" style="display:none"><!-- if architecture -->
							<div class="label"><span class="helper">Phone (Optional)</span></div>
							<div class="value">
								<?php echo $form->textField($calc,'phone'); ?> 
							</div>
						</div>
					</div>
					<div class="calc-get-started">FILL IN YOUR PROJECT INFO AND GET AN INSTANT COST APPROXIMATION</div>
					<!-- <div style="clear:left"></div> -->
					<button id="btn-submit-calc" style="display:none">SUBMIT</button>
				</div>
				<?php $this->endWidget(); ?>
			</div>
			<script>
			   	$('#calc-form').submit(function (e) {
			   		e.preventDefault();

					$.ajax({
				        'url': '<?php echo Yii::app()->createUrl("CalculationHead/create"); ?>',
						'async': false,
						'type': "POST",
						'global': false,	
						'data': jQuery(this).serialize(),		        
				        'datatype':'json',
				        // async: false,
				        'beforeSend': function() {
				            // do some loading options
				            $('#overlay').show();
						},
				        'complete': function() {
				            // success alerts
				            $('#overlay').fadeOut();
				            //$('.preload-more').fadeOut();
				            //$('#wrapper-reload').fadeIn();
				        },				        
				        'success': function (data) {
							$("#CalculationHead_email").css({"border":"1px solid #4D4D4D"});
							$("#CalculationHead_number_views").css({"border":"1px solid #4D4D4D"});
							$("#CalculationHead_product_type").css({"border":"1px solid #4D4D4D"});
							$("#CalculationHead_project_style").css({"border":"1px solid #4D4D4D"});
							$("#CalculationHead_interior_areas").css({"border":"1px solid #4D4D4D"});
							$("#CalculationHead_views_count").css({"border":"1px solid #4D4D4D"});
							$("#CalculationHead_reference").css({"border":"1px solid #4D4D4D"});
							$("#CalculationHead_date").css({"border":"1px solid #4D4D4D"});
							$("#CalculationHead_month").css({"border":"1px solid #4D4D4D"});
							$("#CalculationHead_year").css({"border":"1px solid #4D4D4D"});				        	

							$(".calc-error").html("");

				        	var obj = jQuery.parseJSON(data); 

					        if(obj.result=="success"){
						    	$("#reg-conf-title").html("Email sent");
						        $("#reg-conf-detail").html("Please check your inbox.");
								$("#left-menu-full-black").fadeIn();
								$("#wrap-reg-conf").fadeIn();
								$(".control_toggle").fadeOut();
								$(".project-type").val("");
								$(".project-type").trigger("change");
								$(".project-type").val("");
								$('.right-menu[value~="instant"]').trigger('click');	
							}else{
								$('.right-menu[value~="instant"]').trigger('click');	

		                        $("#calc-error-ref").html(obj.ref);
		                        if(obj.ref){
		                        	$("#CalculationHead_reference").css({"border":"1px solid red"});	
		                        }

		                        $("#calc-error-email").html(obj.email);
		                        if(obj.email){
		                        	$("#CalculationHead_email").css({"border":"1px solid red"});	
		                        }

		                        $("#calc-error-nv").html(obj.nv);
		                       	if(obj.nv){
		                        	$("#CalculationHead_number_views").css({"border":"1px solid red"});	
		                        }

		                        $("#calc-error-pt").html(obj.pt);
		                       	if(obj.pt){
		                        	$("#CalculationHead_product_type").css({"border":"1px solid red"});	
		                        }

		                        $("#calc-error-sop").html(obj.sop);
		                       	if(obj.sop){
		                        	$("#CalculationHead_project_style").css({"border":"1px solid red"});	
		                        }

		                        $("#calc-error-ia").html(obj.ia);
		                       	if(obj.ia){
		                        	$("#CalculationHead_interior_areas").css({"border":"1px solid red"});	
		                        }

		                        $("#calc-error-vc").html(obj.vc);
		                       	if(obj.vc){
		                        	$("#CalculationHead_views_count").css({"border":"1px solid red"});	
		                        }

		                        if(obj.date){
		                        	$("#CalculationHead_date").css({"border":"1px solid red"});	
		                        	$("#calc-error-dl").html(obj.date);
		                        }else if(obj.month){
		                        	$("#CalculationHead_month").css({"border":"1px solid red"});	
		                        	$("#calc-error-dl").html(obj.month);
		                        }else if(obj.year){
		                        	$("#CalculationHead_year").css({"border":"1px solid red"});	
		                        	$("#calc-error-dl").html(obj.year);
		                        }else{
		                        	$("#calc-error-dl").html("");
		                        } 

		                        $(".area-type").css({"border":"1px solid #4D4D4D"});
		                        $(".area-size").css({"border":"1px solid #4D4D4D"});
		                        if(obj.det_idx>0){
		                        	var idx = obj.det_idx;
		                        	if(obj.area_type){
		                        		$("#at-"+idx).css({"border":"1px solid red"});	
		                        	}
		                        	if(obj.area_size){
		                        		$("#as-"+idx).css({"border":"1px solid red"});	
		                        	}
		                        }                     
							}	
				        },
				        'error': function (data) {
				        	alert(data.responseText);
				            alert("Error occured. Try again later");
				        },
					});		
					
			    });


			  $('#row-interior-areas').keyup(function(e){
			  		var options = "<?php echo '<option>Choose Area Type</option>';foreach(AreaType::model()->findAll() as $option){echo '<option value='.$option->id.'>'.$option->name.'</option>';} ?>"
		  			$( ".row-areas" ).remove();
					var count = $(".input-interior-areas").val();
					var html = '';
					for (var i = 0; i < count; i++) {
						html += "<div class='row row-areas' id='row-area-"+(i+1).toString()+"'><div class='label'><span class='helper'>Area "+(i+1).toString()+"</span></div>"
									+"<div class='value'>"
										+"<select class='area-type' id='at-"+(i+1).toString()+"' name='CalculationDetail["+(i).toString()+"][area_type]'>"
											+options+
										+"</select>"
										+"<input class='area-size' id='as-"+(i+1).toString()+"' name='CalculationDetail["+(i).toString()+"][area_size]' type='text' placeholder='Area Size'>"
									+"</div>"
								+"</div>";
					};
					$(html).insertAfter( $( "#row-interior-areas" ) );
					// $( ".row-areas" ).remove();
					// var count = $(".input-interior-areas").val();
					// $.ajax({
				 //        'url': '<?php echo Yii::app()->createUrl("calculationdetail/generate"); ?>',
					// 	'async': false,
					// 	'type': "POST",
					// 	'global': false,
					// 	'dataType': 'html',		
					// 	'data': { 'count': count, 'form':$('#calc-form').serialize()},		        
				 //        //datatype:'json',
				 //        // async: false,
				 //        'success': function (data) {
				 //        	//alert(data);
				 //        	html = data;
				 //        	$(html).insertAfter( $( "#row-interior-areas" ) );	
				 //        },
				 //        'error': function (data) {
				 //        	alert(data.responseText);
				 //            alert("Error occured. Try again later");
				 //        },
			  //   });		
			  });


			</script>

			
			<div class="cont-sign" id="menu-account-site">
				<?php if(Yii::app()->user->isGuest): ?>
					<div id="wrapper-register">
		 				<div class="lbl-cs" style="margin-right:10px">REGISTER</div>
						<!--<div class="btn-facebook">SIGN UP WITH FACEBOOK</div>
						<div class='line-cs-1'></div>
						<div class="lbl-cs" style="position:relative;top:15px;margin-right: 40px;">OR</div> -->
						<?php $this->widget('RegFormWidget'); ?>
					</div>
					<div id="wrapper-sign">
						<div class="lbl-cs">SIGN IN</div>
						<?php $this->widget('LoginFormWidget'); ?>
						<div class='line-cs-3'></div>
						<div class="lbl-cs-3">OR</div>
						<div class="forgot-password">I forgot my password</div>
						<div class="btn-facebook-2"
						style="
						position:absolute;
						bottom:0px;
						width:86%!important;
					    margin: 0 0 30px 5px;
						" 

						><a href="<?php echo Yii::app()->createAbsoluteUrl('site/oauth/provider/Facebook'); ?>">SIGN IN WITH FACEBOOK</a></div>
					</div>
					<div id ="wrap-reset-password">
						<div class="lbl-cs">REQUEST PASSWORD RESET</div>
						<?php $this->widget('ResetPassWidget'); ?>
					</div>
				<?php else:
						$user = User::model()->findbypk(Yii::app()->user->name);
						$member = Member::model()->find('email = "'.$user->username.'"');
						$img = $user->image;
						$filename = Yii::app()->basePath."/../img/user/".$img;
						if((!file_exists($filename))||($img=="")){
							$img="notfound2.png";
						}
					?>																
						<div id="wrapper-profile" style="display:<?php if(Yii::app()->user->level()<=2){echo "none";}else{"block";}?>">
						<div id="acc-info">
							ACCOUNT INFORMATION 
							<div id="acc-info-pic-loading" style="background-image:url('<?php echo Yii::app()->baseUrl ?>/img/big-loader.gif')"></div>
							<div id="acc-info-pic" style="background-image:url('<?php echo Yii::app()->request->baseUrl; ?>/img/user/<?php echo $img ?>')">
							<?php
							    $form=$this->beginWidget('CActiveForm', array(
							        'id'=>'pic-form',
							        'enableAjaxValidation' => FALSE,
							        'htmlOptions' => array('enctype' => 'multipart/form-data'),
							        ));
							   echo $form->fileField($user,'image',array('id'=>'profile-photo','style'=>'visibility:hidden'));
							?>	
							<?php $this->endWidget(); ?>
							</div>
							<button onclick="$('#profile-photo').click();" id="acc-submit-pic">UPLOAD PHOTO</button>
					  		<div id="acc-info-detail">
					  			<?php
					  				if($member->type_account==1){
					  					$tipe="Standar Account";
					  				}elseif($member->type_account==2){
					  					$tipe="Premium Account";
					  				}
					  				echo $tipe."<br><br>	".
					  					 $member->email."<br>".
					  					 $member->name."<br>".
					  					 $member->company_name."<br><br>".
					  					 $member->phone."<br>".
					  					 $member->address;
					  			?>
					  		</div>
					  	</div>	
					  	<div id="acc-notification">
					  		NOTIFICATION
					  		<div id="notification-box">
					  			<span class="notification-none" style="display:none;position:absolute;width: 300px;">No notification available :)</span>
					  			<?php

					  				$data = Yii::app()->db->createCommand()
									->select("*")
									->from('notification')
									->where('is_baca = 0')
									->order('id desc')
									->queryAll();
									foreach ($data as $notif) {
								?>
					  			<div class="notification-msg">
					  				<div id="notif-title"><?php echo $notif['judul'];?></div>
					  				<div id="notif-desc"><?php echo $notif['keterangan'];?></div>
					  				<div id="notif-button">
					  					<span><?php echo date('d-m-Y h:m',strtotime($notif['tanggal'])); ?></span>
					  					<a class="btn-dismiss" id="<?php echo $notif['id'];?>" target="none" href="">Dismiss</a>
					  				</div>
					  			</div>	
					  			<?php } ?>
					  		</div>
					  	</div>	
					  	<div id="acc-edit">
					  		<?php $this->widget('EditProfileWidget'); ?>
					  	</div>
					  	<div id="acc-pass">
					  		<?php $this->widget('ChangePassWidget'); ?>
					  	</div>		
					</div>			

					<script>
				    	//custom scroll buat div notifikasi
						$('#notification-box').toggleClass('default-skin');
				        $("#notification-box").customScrollbar();
						

						//upload photo
						function Upload(){
						    var formData = new FormData($("#pic-form")[0]);
						    $.ajax({
						        url: '<?php echo Yii::app()->createUrl("user/uploadPhoto"); ?>',
						        type: 'POST',
						        data: formData,
						        datatype:'json',
						        // async: false,
						        beforeSend: function() {
						            // do some loading options
						            $('#acc-info-pic').fadeOut();
						            $('#acc-info-pic-loading').fadeIn();
						        },
						        success: function (data) {
						            // on success do some validation or refresh the content div to display the uploaded images 
						            var obj = jQuery.parseJSON(data); 
						            if(obj.result=="failed"){
						            	alert(obj.error);
						            }
						            $('#acc-info-pic').css({'background-image':'url("'+obj.file+'")'});
						        },
						 
						        complete: function() {
						            // success alerts
						            $('#acc-info-pic-loading').fadeOut();		
						            $('#acc-info-pic').fadeIn();
						        },
						 
						        error: function (data) {
						            alert("There may a error on uploading. Try again later");
						            alert(data.responseText);
						        },
						        cache: false,
						        contentType: false,
						        processData: false
						    });
						 
						    return false;
						}

						$('#profile-photo').on("change",function(e){
							Upload();
						});

						//ngilangin notifikasi dan nandain sudah dibaca
						$('.btn-dismiss').on("click",function(e){
							var id=$(this).attr('id');
							var canDismiss = false;
							$.ajax({
						        'url': '<?php echo Yii::app()->createUrl("notification/dismiss"); ?>',
								'async': false,
								'type': "POST",
								'global': false,
								'dataType': 'html',		
								'data': { 'notif_id': id},		        
						        //datatype:'json',
						        // async: false,
						        'success': function (data) {
						        	canDismiss=true;
						            // on success do some validation or refresh the content div to display the uploaded images 
						        },
						        'error': function (data) {
						        	alert(data.responseText);
						            alert("Error occured. Try again later");
						        },
						    });		
						    if(canDismiss){
							    $(this).parent().parent().hide('slide', {direction: 'left'}, 500);
								$('#notification-box').customScrollbar("resize",true);		
							}	
							e.preventDefault();
						});

						//ngecek apakah ada notifikasi, kalo gk ada tampilin "gk ada notif"
						$('#notification-box').on("mousemove",function(e){
							var obj = document.querySelectorAll('.notification-msg');
							var exist = false;
							for (i = 0; i < obj.length; ++i) {
							  	if($(obj[i]).is(':visible')){
							  		//alert($(obj[i]).attr('class'));
							  		exist=true;
							  		break;
							  	}
							}
							if(!exist){$('.notification-none').fadeIn();}else{
								$('.notification-none').fadeOut();	
							}		
						});

						//untuk menahan scroll ketika didalam div notifikasi
						$( '#notification-box' ).bind( 'mousewheel DOMMouseScroll', function ( e ) {
						    var e0 = e.originalEvent,
						        delta = e0.wheelDelta || -e0.detail;
						    
						    this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
						    e.preventDefault();
						});
					</script>							
				<?php endif; ?>
			</div>
			

			<div id="wrapper-optmenu">
				<div id="option-menu" >
					<div class="menu-meter-v">
						<div class="value-mm"></div>
					</div>
					<ul ng-controller="MyCtrl">
						<!-- <li class="right-menu" value="services"><a  href="#menu-our-services">SERVICES</a></li> -->
						<li class="right-menu" value="instant"><a href="#menu-instant-offer">INSTANT OFFER</a></li>
 						<li class="right-menu" value="sign"><a href="#menu-account-site">
 							<?php if(Yii::app()->user->isGuest) { ?>
 								SIGN IN/REGISTER
 							<?php }elseif(Yii::app()->user->level()>=3) {  ?>
 								ACCOUNT
 							<?php } ?>
 						</a></li>
					</ul>

					<div class="wrapper-hm">
						<div class="heading-menu">
							PRICE CALCULATOR
						</div>
						<div class="menu-description">
							Fill the form<br>in order to get a rough<br>estimation on the pricing
						</div>
					</div>
				
				</div>
			</div>



		</div>
	</div>
	
</div> <!--/header-->
<?php
	//$this->renderPartial('//client/form/form_invite');
	//$this->renderPartial('//client/form/form_list_employe');
?>

<script type="text/javascript">


$(document).ready(function(){
	var $target = $('.menu-content');
	

	$('.right-menu[value~="services"]').click(function() {
		$target.scrollTo($('#menu-our-services') , 900);
	});
	$('.right-menu[value~="instant"]').click(function() {
		$target.scrollTo($('#menu-instant-offer') , 900);
	});
	$('.right-menu[value~="sign"]').click(function() {
		$target.scrollTo($('#menu-account-site') , 900);
	});

	//faisal
	$('#reg-conf-close').click(function(){	
		 $(".control_toggle").show();
	     $('#left-menu-full-black').fadeOut();
		 $('#wrap-reg-conf').fadeOut();     
	});	

	//faisal
	$('.btn-calc').click(function(){	
		$('.right-menu[value~="instant"]').trigger('click');	
	});

	//faisal
	$('.box-account-1').click(function(){	
		$('.standart-account').hide();
		$('.youtube-container').fadeIn();
	});

	//faisal
	$('.box-account-2').click(function(){	
		$('.right-menu[value~="sign"]').trigger('click');	
	});

	//faisal
	$('.box-account-4').click(function(){	
		$('.youtube-container').html('<div class="youtube-player" data-id="VIDEOID"><div><img class="youtube-thumb" src="/vvfy/img/video-background.png"><!--<div class="play-button"></div>--></div></div>');
		$(".youtube-player").click(labnolIframe);
		$('.youtube-container').hide();
		$('.standart-account').fadeIn();
	});

	$('.forgot-password').click(function(){
		$("#wrapper-sign").hide()
		$("#wrap-reset-password").fadeIn();
	});

	$('.back-to-login').click(function(){	
		$("#wrap-reset-password").hide();
		$("#wrapper-sign").fadeIn();
	});

	var OPT_ARCHITECTURE = 1;
	var OPT_INTERIOR = 2;
	var OPT_ARCHITECTURE_AND_INTERIOR = 3;
	var OPT_PRODUCT = 4;

	//price calculator
	$('.project-type').on('change', function (e) {
	    var optionSelected = $("option:selected", this);
	    var valueSelected = this.value;

	    $('.wrapper-calc').find('input:text').val('');    
	    //$('.wrapper-calc').find(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
    	$('.wrapper-calc').find(':checkbox, :radio').prop('checked', false);
    	$('.calc-date').val("DATE");
		$('.calc-month').val("MONTH");
		$('.calc-year').val("YEAR");


	    $('#btn-submit-calc').show();
	    $('#row-email').show();
	    $('#row-phone').show();

	    $( ".row-areas" ).remove();

	    $('.calc-get-started').hide();

	    $('#row-view-count').hide();
	    //$('#row-project-size').hide();
	    $('#row-style-project').hide();
	    $('#row-deadline').hide();
	    $('#row-reference').hide();
	    $('#row-number-views').hide();
	    $('#row-product-type').hide();
	    $('#row-interior-areas').hide();
	    $('#row-whole-project').hide();
	    $('#row-size-area').hide();


	    if(valueSelected==OPT_ARCHITECTURE){
		    $('#row-view-count').show();
		    //$('#row-project-size').show();
		    $('#row-style-project').show();
		    $('#row-deadline').show();
		    $('#row-reference').show();
	    }else if(valueSelected==OPT_INTERIOR){
	    	$('#row-interior-areas').show();
		    $('#row-style-project').show();
		    $('#row-deadline').show();
		    $('#row-reference').show();	    	
	    }else if(valueSelected==OPT_ARCHITECTURE_AND_INTERIOR){
		    $('#row-view-count').show();
	    	$('#row-interior-areas').show();
		   //$('#row-project-size').show();
		    $('#row-style-project').show();
		    $('#row-deadline').show();
		    $('#row-reference').show();
	    }else if(valueSelected==OPT_PRODUCT){
		    $('#row-number-views').show();
	    	$('#row-product-type').show();
		    $('#row-deadline').show();
		    $('#row-reference').show();
	    }else{
		    $('.calc-get-started').show();
		    $('#btn-submit-calc').hide();
		    $('#row-email').hide();
	    	$('#row-phone').hide();
	    }
	});

	// $('.input-interior-areas').on('change', function (e) {
	// 	$( ".row-areas" ).remove();
	// 	var count = $(".input-interior-areas").val();
	// 	var html = '';
	// 	for (var i = 0; i < count; i++) {
	// 		html += "<div class='row row-areas' id='row-area-"+(i+1).toString()+"'><div class='label'><span class='helper'>Area "+(i+1).toString()+"</span></div>"
	// 					+"<div class='value'>"
	// 						+"<select class='area-type'>"
	// 							+"<option>Choose Area Type</option>"
	// 							+"<option>Living Room</option>"
	// 							+"<option>Bedroom</option>	"
	// 							+"<option>Hall</option>"
	// 							+"<option>Toilet</option>"
	// 						+"</select>"
	// 						+"<input class='area-size' type='text' placeholder='Area Size'>"
	// 					+"</div>"
	// 				+"</div>";
	// 	};
	// 	$(html).insertAfter( $( "#row-interior-areas" ) );
	// });

	//faisal
	function labnolIframe() {
		var iframe = document.createElement("iframe");
		iframe.setAttribute("src", "//www.youtube.com/embed/XlmESbUKVNc?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
		iframe.setAttribute("frameborder", "0");
		iframe.setAttribute("id", "youtube-iframe");
		iframe.setAttribute("width","400px");
		iframe.setAttribute("height","350px");
		this.parentNode.replaceChild(iframe, this);
	}

	$('.control_toggle').click(function(){	
		//alert('masuk');
		// $(this).hide();
		$('html').toggleClass('hide_controls');
		$('#menu-timeline').toggleClass('menu-timeline-hide');
		$('.wrapper-bnf').toggleClass('wrapper-bnf-hide');
		jQuery('.wrapper-logo').toggleClass('wrapper-logo-hide');
		$('.kontener').toggleClass('close-kon');
		$('html').toggleClass('hide-scrolly');
		$('.backtohome').toggleClass('backtohome-show');
		$('.menu-content').toggleClass('menu-content-show');
		$('#wrapper-employe').toggleClass('wrapper-employe-show');
		IsLeftMenu = $('html').hasClass("hide_controls");
		if(IsLeftMenu){
			$('.logo').show();
		}else{
			$('.logo').hide();	
		}
	});

	$('.label-back').click(function(event){
		$('.control_toggle').trigger('click');
	});

	 $('.menu-content').smoothScroll(500);
	
	// $(document).on("mousemove","#home > *",function(e){
	// 	// alert('masuk');
	// 	$('.btn-link').css("color","#D6D4D5");
	// 	$('.child-scroll').css('top',"6px");
	// 	$(' a[href$="#home"]').css("color","red");
	// 	$('.menu-circle').css("background","#D6D4D5");
	// 	$('.menu-circle').eq(0).css("background","red");
	// });
	// $(document).on("mousemove","#second > *",function(e){
	// 	// alert('masuk');
	// 	$('.btn-link').css("color","#D6D4D5");
	// 	$('.child-scroll').css('top',"12px");
	// 	$(' a[href$="#premium"]').css("color","red");
	// 	$('.menu-circle').css("background","#D6D4D5");
	// 	$('.menu-circle').eq(1).css("background","red");
	// });
	// $(document).on("mousemove","#portofolio > *",function(e){
	// 	// alert('masuk');
	// 	$('.btn-link').css("color","#D6D4D5");
	// 	$('.child-scroll').css('top',"18px");
	// 	$(' a[href$="#portofolio"]').css("color","red");
	// 	$('.menu-circle').css("background","#D6D4D5");
	// 	$('.menu-circle').eq(2).css("background","red");
	// });
	// $(document).on("mousemove","#blog-home > *",function(e){
	// 	// alert('masuk');
	// 	$('.btn-link').css("color","#D6D4D5");
	// 	$('.child-scroll').css('top',"24px");
	// 	$(' a[href$="#blog-home"]').css("color","red");
	// 	$('.menu-circle').css("background","#D6D4D5");
	// 	$('.menu-circle').eq(3).css("background","red");
	// });
	// $(document).on("mousemove","#team > *",function(e){
	// 	// alert('masuk');
	// 	$('.btn-link').css("color","#D6D4D5");
	// 	$(' a[href$="#team"]').css("color","red");
	// 	$('.child-scroll').css('top',"30px");
	// 	$('.menu-circle').css("background","#D6D4D5");
	// 	$('.menu-circle').eq(4).css("background","red");
	// });


	// function menu on the left
	$(document).on("mousemove","#menu-our-services *",function(e){
		$('.value-mm').css("top","0px");
		
		$('.heading-menu').html("OUR<br>SERVICE");
		$('.menu-description').html("Get to know about our<br>services");
	});
	$(document).on("mousemove","#menu-instant-offer *",function(e){
		//$('.value-mm').css("top","80px");	
		$('.value-mm').css("top","0px");

		$('.heading-menu').html("PRICE<br>CALCULATOR");
		$('.menu-description').html("Fill the form<br>in order to get a rough<br>estimation on the pricing");

	});
	$(document).on("mousemove","#menu-account-site *",function(e){
		//$('.value-mm').css("top","150px");	
		$('.value-mm').css("top","80px");
		
		if($('#wrapper-profile')[0])
		{
			$('.heading-menu').html("WELCOME");
			$('.menu-description').html("<?php echo Yii::app()->user->name; ?>");
		}else{
			$('.heading-menu').html("ABOUT US");
			$('.menu-description').html("VVFY.me is a tech studio <br> dedicated to incorporate the latest 3D inventions to the <br> architects and designers. <br><br> Our team is located in Beirut and Indonesia . We offer a <br> wide range of services");
		}
	});

	var scroll = 0;
			// $(document).on('click','.btn-link',function(e){

			// });
	// $(document).on('click','.btn-link',function(){
	// 	scroll = scroll + 10;
	// 	$('.btn-link').css('color','#D6D4D5');
	// 	$('.menu-circle').css("background","#D6D4D5");

	// 	var index = $('.btn-link').index(this);
	// 	$('.btn-link').eq(index).css('color','red');
	// 	$('.menu-circle').eq(index).css("background","red");

	// 	// var data = {''}
	// 	var href = $('.btn-link').eq(index).attr('href');
	// 	// alert(href);
	// 	if (href=="#home"){
	// 		$('.child-scroll').css('top',"6px");
	// 	}
	// 	else if (href=="#premium"){
	// 		$('.child-scroll').css('top',"12px");
	// 	}
	// 	else if (href=="#portofolio"){
	// 		$('.child-scroll').css('top',"18px");
	// 	}
	// 	else if (href=="#blog-home"){
	// 		$('.child-scroll').css('top',"24px");
	// 	}
	// 	else if (href=="#team"){
	// 		$('.child-scroll').css('top',"30px");
	// 	}
	// });
			
	// $('.right-menu a').click(function(e){
	// 	e.preventDefault();
	// 	var target = this.hash;
	//     $('.menu-content').animate({
	//         scrollTop: $( $.attr(this, 'href') ).offset().top
	//     }, 400);
	//     window.location.hash = target;
	//     return false;

	// 		//  e.preventDefault();
	// 		// var target = this.hash;
	// 		// var $target = $(target);
	// 		// $('.menu-content').stop().animate({
	// 		// 	'scrollTop': $( $.attr(this, 'href') ).offset().top
	// 		// }, 1000, 'swing', function () {
	// 		// 	window.location.hash = target;
	// 		// });
	// });
 // $('.right-menu a').click(function(e) {
 //    e.preventDefault();
	// var target = this.hash;
	// var $target = $(target);
	// $('.menu-content').stop().animate({
	// 	'scrollTop': $target.offset().top+2
	// }, 1500, 'swing', function () {
	// 	window.location.hash = target;
	// });
 //  });

// var $root = $('.menu-content');
// $('.right-menu a').click(function(e) {
//   e.preventDefault();
// 	var target = this.hash;
// 	var $target = $(target);
// 	$('.menu-content').stop().animate({
// 		'scrollTop': $target.offset().top+2
// 	}, 1000, 'swing', function () {
// 		window.location.hash = target;
// 	});
// });
	// $('#btn-pa').on("click",function(e){
	// 	// alert('masuk');
	// 	$('.content-stn').hide();
	// 	$('.content-premium').show();
	// });
	// $('#btn-sa').on("click",function(e){
	// 	// alert('masuk');
	// 	$('.content-stn').show();
	// 	$('.content-premium').hide();
	// });
    // $(".menu-content").customScrollbar();
	$('.right-menu').on("click",function(e){
		$('.right-menu').css("color","white");
		var index = $('.right-menu').index(this);
		var value = $('.right-menu').eq(index).attr("value");
		$('.right-menu').eq(index).css("color","red");
		if (value=="services"){
			$('.value-mm').css("top","0px");
			// $('.cont-our-service').fadeIn();
			// $('.cont-instant-offer').fadeOut();
			// $('.cont-sign').hide();
			$('.heading-menu').html("OUR<br>SERVICE");
			$('.menu-description').html("Get to know about our<br>services");

		}else if (value=="instant"){
			$('.value-mm').css("top","0px");
			//$('.value-mm').css("top","80px");	
			// $('.cont-our-service').fadeOut();
			// $('.cont-instant-offer').fadeIn();
			// $('.cont-sign').hide();
			$('.heading-menu').html("PRICE<br>CALCULATOR");
			$('.menu-description').html("Fill the form<br>in order to get a rough<br>estimation on the pricing");

		}else if (value=="sign"){
			$('.value-mm').css("top","80px");
			//$('.value-mm').css("top","150px");	
			// $('.cont-our-service').fadeOut();
			// $('.cont-instant-offer').fadeOut();
			// $('.cont-sign').fadeIn();
			if($('#wrapper-profile')[0])
			{
				$('.heading-menu').html("WELCOME");
				$('.menu-description').html("<?php echo Yii::app()->user->name; ?>");
			}else{
				$('.heading-menu').html("ABOUT US");
				$('.menu-description').html("VVFY.me is a tech studio <br> dedicated to incorporate the latest 3D inventions to the <br> architects and designers. <br><br> Our team is located in Beirut and Indonesia . We offer a <br> wide range of services");
			}

		}
	});
	// $('.btn-menu-service').on("click",function(e){
	// 	$(this).css("color","red");
	// });
});

	//text hanya bisa input angka
	function AllowNumbersOnly(e) {
		var code = (e.which) ? e.which : e.keyCode;
			if (code > 31 && (code < 48 || code > 57)) {
			  e.preventDefault();
		}
	}



</script>


<script>
(function() {
    var v = document.querySelectorAll(".youtube-player"); //getElementsByClassName
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();

function labnolThumb(id) {
     return '<img class="youtube-thumb" src="<?php echo Yii::app()->baseUrl; ?>/img/video-background.png"><!--<div class="play-button"></div>-->';
}
 
function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/XlmESbUKVNc?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    iframe.setAttribute("width","400px");
    iframe.setAttribute("height","350px");
    this.parentNode.replaceChild(iframe, this);
}

if(navigator.appName == "Microsoft Internet Explorer"){ 
  var height = $(window).height();
  $('.menu-content').css({'height':height+'px'});
  $('.cont-instant-offer').css({'margin-bottom':height+'px'});
}


</script>

<!--[if lt IE 9]>
	<script>
		$('input, textarea').placeholder();
	</script>	
	<style>
		.placeholder { color: #787878; }
	</style>
<![endif]-->	