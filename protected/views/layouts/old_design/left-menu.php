<header class="main_header" style="position:fixed" >
<div >
<div  class="header_scroll" style=""  >
<a href="javascript:void(0)" class="menu_toggler"></a>	
	<div style="" class="header_wrapper" >
		<a href="#" onclick="javascript.void(0)" class="logo">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_def">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_retina">
		</a>   
		<div class="about" >
			<div class="content-left">
				<div class="content-text">
					<div class="header signin">
						SIGN IN
					</div>
				</div>	
				<div class="content-primary">	
					<script>
					$(document).ready(function(){	
						$('#btnlogin').click(function(event) 
						{
							// alert('masuk');
							event.preventDefault();
							$.ajax({
								type: 'GET',
								url: '<?php echo Yii::app()->createAbsoluteUrl("site/login"); ?>',
								data:$('#form_login').serialize(),
								beforeSend: function() {
								  $("#overlay").show();
								},
								success:function(data){
									if (data=="1"){
									  $("#overlay").fadeOut();
									  window.location.assign('<?php echo Yii::app()->createAbsoluteUrl("land/dashboard"); ?>');
									}
									else if (data=="2"){
									  $("#overlay").fadeOut();
									  window.location.assign('<?php echo Yii::app()->createAbsoluteUrl("land/dashboard"); ?>');
									}
									else if (data=="3"){
									  $("#overlay").fadeOut();
									  window.location.assign('<?php echo Yii::app()->createAbsoluteUrl("land/userme"); ?>');
									}


									else{
										alert('username or password invalid');
										$("#overlay").fadeOut();
									}
								  // alert(data);
								},
								dataType:'html'
							});
						});
					});
					
					</script>
					<div class="login">
					<?php	$model=new LoginForm;  ?>
						<?php if (Yii::app()->user->isGuest){ ?>
						<form id="form_login">
							<input type="text" name="email"  placeholder="email" />
							<input type="password" name="password"   placeholder="password" />
							<button type="submit" id="btnlogin" class="" value="" >LOGIN</button>
						</form>
						<style>
							.forgotpasswod{
								color:white;
								margin-top:10px;
							}
							.forgotpasswod a{
								color:white;
								text-decoration:underline;
							}
							
							
						</style>
						<div class="forgotpasswod" >forgot password ?  <a href="<?php echo Yii::app()->createAbsoluteUrl("member/forgetpassword"); ?>" >click here</a></div>
						<div style="position: absolute;
								  right: 10px;
								  bottom: 0px;
								  top: 90%;"
					  class="regis" 
					  >REGISTER NOW</div>
						
						<? }else{?>
							<a href="<?php echo Yii::app()->createAbsoluteUrl("land/userme"); ?>">
								<img style="width:60px;margin-bottom:120px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/nophoto.gif" />
							</a>
							<a href="<?php echo Yii::app()->createAbsoluteUrl("site/logout"); ?>">
								<img style="width:60px;margin-bottom: 130px;margin-left: 20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch White/power.ico" />
							</a>
						<?php } ?>
					<style>
							.regis{
								color:white;
								display:inline;
								position:relative;
								right:20px;
								top:20px;
								cursor:pointer;
							}
							</style>
					</div>
					
					<div class="deskripsi">
						<p style="width:240px;font-size:15px">
						VVFY.me is a tech studio dedicated to incorporate the latest 3D inventions to the architects and designers.
						</br>
						</br>
						</br>
						Our team is located in Beirut and Indonesia. We offer a wide range of service.
						
						</p>
					</div>
	
				</div>
			</div>
			<div class="content-center">
			<div class="content-text">
					<div class="header signin">
						SERVICES
					</div>
				</div>	
				<!--<div class="line">&nbsp;</div>-->
				<div class="tengah">
					<div class="content-text">
					
						<div class="content-primary" style="padding-left:20px12">
						
							<ul class="service-list ">
								<li class="acc-stan"><div class="one">STANDARD</div><div class="two">ACCOUNT</div><div   class="arrows ar1" >&nbsp;</div></li>
								<li class="acc-prem"><div class="one">PREMIUM</div><div class="two">ACCOUNT</div><div   class="arrows ar2">&nbsp;</div></li>
								<li class="acc-inst"><div class="one">INSTANT</div><div class="two">OFFER</div><div class="arrows ar3">&nbsp;</div></li>
							
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- service and icon -->
			
			<div class="right" >
			
					<div class="content-rigth">
						<div class="content-text">
							<div class="header">
								FEATURES
							</div>
						</div>	
						
						 <!--<div class="content-box"> -->
						 <div id="maintenance">
							 <img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/under.jpeg" width="50" height="50" class="" /><br>
							 <div class="text" >OUR PLATFORM WILL BE READY SOON</div>
						 </div>
						 <!--
							<div class="box">

								<img style="" src="img/msg.png"/>
								<div title="follow my sketch and some design" class="title">FOLLOW</div>
							</div>
							<div class="box">
								<img style="" src="img/com.png"/>
								<div class="title">COMMENT</div>
							</div>
							<div class="box">
								<img style="" src="img/calendar.png"/>
								<div title="calendar for schedule" class="title">CALENDAR</div>
							</div>
							<div class="box">
								<img style="" src="img/lab.png"/>
								<div class="title">LAB</div>
							</div>
						</div>
							-->
							
					</div>
				
				</div>
			<div class="right2">
				<div class="content-rigth">
					<div class="content-text">
						<div class="header">
							CUSTOMISE YOUR PACKAGE
						</div>
					</div>	
					
					 <div id="maintenance">
						 <img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/under.jpeg" width="50" height="50" class="" /><br>
						 <div class="text" >OUR PLATFORM WILL BE READY SOON</div>
					 </div>
				 </div>
						<!--
						<form style="color:white;font-size:15px;">
							<H3 style="color:white;">TYPES OF PROJECT</H3>
								<input type="radio" name="category" value="architecture" /> architecture<br />
								<input type="radio" name="category" value="interior" /> interior
							</br></br>
							<H3 style="color:white;">HOW MANY PROJECT AT THIS TIME</H3>
								<select name="day"  >
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</br></br>
							<H3 style="color:white;">QUALITY</H3>
							<input type="button" name="quality" value="mood 1" /> <br />
							<input type="button" name="quality" value="mood 2" /> <br />
							<input type="button" name="quality" value="mood 3" /> 
						</form>
						-->
					</div>
				<!--
				<img src="img/form-next.ico" width="50" height="50" style="
					position:absolute;
					right:0px;
					top:150px;
					cursor:pointer;
				" />
				-->

			<div class="right3">
				<div class="content-rigth">
					<div class="content-text">
						<div class="header">
							GET A PRICING ESTIMATION
						</div>
					</div>	
					
					 <div id="maintenance">
						 <img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/under.jpeg" width="50" height="50" class="" /><br>
						 <div class="text" >OUR PLATFORM WILL BE READY SOON</div>
					 </div>
				 </div>
			 </div>
			 <div class="right4">
				<div class="content-rigth">
					<div class="content-text">
						<div class="header">
							REGISTER 
						</div>
					</div>	
					<style>
						
						#form-register{
							margin-left:10px;
							width:80%;
						}
						#form-register td{
							color:white;
							font-size:20px;
							text-transform:capitalize;
						}
						#form-register select{
							font-size:12px;
							color:black;
							text-transform:capitalize;
							padding:4px;
						}
						#form-register input[type="submit"]{
							margin-top: 10px;
							background: #F5B800;
							line-height: 20px;
							color:black;
						}
						#form-register input[type="password"]{
						
						}
						#form-register input,#form-register textarea,#form-register select{
							width: 80%;
							font-size:12px;								
							
						}
						
						#form-register textarea{
							height:20px;
						}
						.ui-tabs .ui-tabs-panel {
						  display: block;
						  border-width: 0;
						  padding: 1em 1.4em;
						  background: #000;
						}
						.ui-widget-content {
							color: #222;
							border: 0px solid #AAA; */
							background: transparent;
						}
					</style>
					<script>
					$(function() {
						$( "#tabs" ).tabs();
					});
					</script>
						<?php $model = new Member;?>
							<div id="tabs">
								  <ul>
									<li><a href="#reg-company">Company</a></li>
									<li><a href="#reg-employee">individual</a></li>
								  </ul>
								  <div id="reg-company">
								  <script>
								   // alert(repeatpassword.value);
								function validatePassword(){
									var password =  $('#password').val();
									var repeatpassword =  $('#repeatpassword').val();
									if(password != repeatpassword) {
										document.getElementById("repeatpassword").setCustomValidity("Passwords Don't Match");
									} else {
										document.getElementById("repeatpassword").setCustomValidity("");
									}
								}
								// $(document).ready(function(){	
									// $('#reg-email').bind('keyup',function(event) 
									// {
								function validateEmail(){
											event.preventDefault();
											// var email =  $('#email').val();
											$.ajax({
												type: 'GET',
												cache:false,
												url: '<?php echo Yii::app()->createAbsoluteUrl("member/emailv"); ?>',
												data:"email="+$('#reg-email').val(),
												success:function(data){
													if (data=='duplicate'){
														// alert(data);
														// alert(data);
														document.getElementById("reg-email").setCustomValidity("Email already exist");
														// return true;
													}
													else {
														document.getElementById("reg-email").setCustomValidity("");
														// alert('masuk');
														// return true;
													}
													// alert(data);
													// if (data=="succesfull"){
													  // $("#overlay").fadeOut();
													  // window.location.assign('<?php echo Yii::app()->createAbsoluteUrl("user/index"); ?>');
													// }else{
														// alert('username or password invalid');
														// $("#overlay").fadeOut();
													// }
												  // alert(data);
												},
												dataType:'html'
											});
										}
									// });
								// });
								// function daftar(){
									// event.preventDefault();
									// $.ajax({
									// type: 'GET',
									// url: '<?php echo Yii::app()->createAbsoluteUrl("member/register"); ?>',
									// data:$('#form-register-data').serialize(),
									// // beforeSend: function() {
									  // // $("#overlay").show();
									// // },
									// success:funoverlayction(data){
										// $("#").fadeOut();
										// // alert(data);
										// // alert($('#form-register-data').serialize());
										// // if (data=="succesfull"){
										  // // $("#overlay").fadeOut();
										  // // window.location.assign('<?php echo Yii::app()->createAbsoluteUrl("user/index"); ?>');
										// // }else{
											// // alert('username or password invalid');
											// // $("#overlay").fadeOut();
										// // }
									  // // alert(data);
									// },
									// dataType:'html'
								// });
								// }

								// password.onchange = validatePassword();
								// repeatpassword.onkeyup = validatePassword();
								  </script>
								<table id="form-register">
								   <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
										'id'=>'form-register-data',
										'enableAjaxValidation'=>false,
										'method'=>'get',
										'action' => Yii::app()->createUrl('member/register'), 
										'type'=>'horizontal',
										'htmlOptions'=>array(
											'enctype'=>'multipart/form-data'
										)
									)); ?>
										<tr>
										<td><input required placeholder="name" id="member-name" name="Member[name]"  type="text" ></td>
										<td>
											<select name="Member[type_account]" required placeholder="">
												<option value="">choose </option>
												<option value="1">Standard Account</option>
												<option value="2">Premium Account</option>
											</select>
										</td>
										</tr>
										<tr>
										<td><input required onkeyup="validateEmail()" id="reg-email" placeholder="email"  type="email" name="Member[email]" ></td>
										<td>
											<script>
											$(document).ready(function(){	
												jQuery('#country').change(function(){	
													  $.ajax({
															url: "<?php echo Yii::app()->createurl('country/getcode'); ?>", // Url to which the request is send
															type: "GET",             // Type of request to be send, called as method
															data: "id="+$('#country').val(), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
															// beforeSend: function() {
															  // $("#loader").show();
															 // },
															success: function(data)   // A function to be called if request succeeds
															{
																// $('.baris:eq('+index+')').fadeOut();
																$("#phone").val(data);
																// alert;
																// $(".content").html(data);
															  
															},
															error: function(data){
																alert('err');
															}
														});
												});
											});
											</script>
											<?php $data = Country::model()->findAll(); ?>
											<select id="country" name="Member[country]" required placeholder="">
												<option value="">choose country</option>
												<?php foreach ($data as $d): ?>
													<option value="<?php echo $d->country_id ?>"><?php echo $d->short_name ?></option>
												<?php endforeach; ?>
											</select>
										</td>

										</tr>
										<tr>
										<td><input  minlength="8" required id="password" onchange="validatePassword()" maxlength="20"  placeholder="password" name="Member[password]"  type="password" ></td>
										<td><input required id="phone"   maxlength="20" placeholder="phone" name="Member[phone]"  type="text" ></td>
 
										</tr>
										<tr>
										<td><input required id="repeatpassword" onkeyup="validatePassword()" maxlength="20" placeholder="confirm password" name="Member[password]"  type="password" ></td>
										<td><textarea required  onkeyup="" maxlength="100" placeholder="address" name="Member[address]" ></textarea></td>
										
										</tr>
										
	
										<tr>
										
										</tr>
										<tr>
										</tr>
										<tr>
										</tr>
										<tr><td><input value="REGISTER"   type="submit" ></td></tr>
										</tr>
								<?php $this->endWidget(); ?>
								</table>
					
								  </div>
								  <div id="reg-employee">
									
									  
									</div>
								
							</div>
						
				 </div>
			 </div>
					<!-- 
					<div class="content-primary" style="padding-left:20px">
						<form style="color:white;font-size:15px;">
							<H3 style="color:white;">TYPES OF PROJECT</H3>
								<input type="radio" name="category" value="architecture" /> architecture<br />
								<input type="radio" name="category" value="interior" /> interior
							</br></br>
							<H3 style="color:white;">DUE DATE</H3>
							
								 <input
								id="input_01"
								class="datepicker"
								name="date"
								type="text"
								autofocuss
								value="14 August, 2014"
								data-valuee="2014-08-08"/>
							</br></br>
						
						</form>
					</div>
						-->
			
				<!--
				<img src="img/form-next.ico" width="50" height="50" style="
					position:absolute;
					right:0px;
					top:150px;
					cursor:pointer;
				" />
				-->

   <script type="text/javascript">

        // var $input = $( '.datepicker' ).pickadate({
            // formatSubmit: 'yyyy/mm/dd',
            // // min: [2015, 7, 14],
            // container: '#container',
            // // editable: true,
            // closeOnSelect: false,
            // closeOnClear: false,
        // })

        // var picker = $input.pickadate('picker')
        // // picker.set('select', '14 October, 2014')
        // picker.open()

        // $('button').on('click', function() {
        //     picker.set('disable', true);
        // });

    </script>		<!--
		<div class="contact">
			<div class="footer_wrapper">            
				<div class="socials_wrapper">
					<ul class="socials_list">
						<li><a class="ico_social_facebook" target="_blank" href="http://facebook.com" title="Facebook"></a></li>
						<li><a class="ico_social_pinterest" target="_blank" href="http://pinterest.com" title="Pinterest"></a></li>
						<li><a class="ico_social_instagram" target="_blank" href="http://instagram.com" title="Instagram"></a></li>
						<li><a class="ico_social_flickr" target="_blank" href="http://flickr.com" title="Flickr"></a></li>
					</ul>
				</div>
			<div class="copyright">Copyright &copy; VVFY.me.<br>All Rights Reserved 2015</div>
			</div>
		</div>
		-->
	</div>
	</div>
</div>
</div>
</header>