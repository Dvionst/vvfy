<?php
	define('OPT_ARCHITECTURE', 'Architecture');
	define('OPT_INTERIOR', 'Interior');
	define('OPT_ARCHITECTURE_AND_INTERIOR', 'Architecture & Interior');
	define('OPT_PRODUCT', 'Product');
?>
<script src="<?php echo Yii::app()->request->baseUrl ?>/js/smooth/jquery.smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/scrollTo/jquery.scrollTo.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.nicescroll.min.js"></script>-->

<script src="<?php echo Yii::app()->request->baseUrl ?>/js/scrollstyle/jquery.custom-scrollbar.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/js/scrollstyle/jquery.custom-scrollbar.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/all.css" type="text/css" /> 
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/left-menu.css" type="text/css" /> 


<script type="text/javascript">
const OPT_ARCHITECTURE = 'Architecture';
const OPT_INTERIOR = "Interior";
const OPT_ARCHITECTURE_AND_INTERIOR = "Architecture & Interior";
const OPT_PRODUCT = "Product";

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
	     $("#User_username").val("");
	     $("#Member_name").val("");
	     $("#User_password").val("");
	     $("#User_repeat_password").val("");

	     $('#left-menu-full-black').fadeOut();
		 $('#wrap-reg-conf').fadeOut();
		 
	     $('.right-menu[value~="sign"]').trigger('click');	
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
		$("#wrapper-sign").fadeOut();
		$("#wrap-reset-password").fadeIn();
	});

	$('.back-to-login').click(function(){	
		$("#wrap-reset-password").fadeOut();
		$("#wrapper-sign").fadeIn();
	});

	$('.project-type').on('change', function (e) {
	    var optionSelected = $("option:selected", this);
	    var valueSelected = this.value;

	    $('#row-interior-areas').hide();
	    $('#row-whole-project').hide();
	    $('#row-size-area').hide();

	    if(valueSelected==OPT_ARCHITECTURE){
	    	$('#row-interior-areas').show();
	    	$('#row-whole-project').show();
	    	$('#row-size-area').show();
	    }else if(valueSelected==OPT_INTERIOR){
	    	$('#row-interior-areas').show();
	    }else if(valueSelected==OPT_ARCHITECTURE_AND_INTERIOR){
	    	$('#row-interior-areas').show();
	    }else if(valueSelected==OPT_PRODUCT){

	    }else{
		    $('#row-interior-areas').show();
		    $('#row-whole-project').show();
		    $('#row-size-area').show();    	
	    }
	});

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
		//$('.control_toggle').fadeOut(); //faisal 121115
		// $('.menu-content').toggleClass('hahahah');
		 // alert('masuk');
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
</script>

<style type="text/css">
	.right-menu a:hover{
		color:red;
	}
</style>
<div class="kontener" ></div>
<header class="main_header" style="position:fixed" >
	<a href="#" onclick="javascript.void(0)" class="logo">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_def">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_retina">
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
				<div class="wrapper-calc">
					<div id="btn-submit-calc">SUBMIT</div>
						<div class="table-leftmenu">
							<div class="row">

								<div class="label"><span class="helper">Project Type</span></div>
								<div class="value">
									<select class="project-type">
										<option>Pilih</option>
										<option><?php echo OPT_ARCHITECTURE; ?></option>
										<option><?php echo OPT_INTERIOR; ?></option>
										<option><?php echo OPT_ARCHITECTURE_AND_INTERIOR; ?></option>
										<option><?php echo OPT_PRODUCT; ?></option>
									</select>
								</div>
							</div>
							<div class="row" id="row-interior-areas"><!-- if interior or architecture -->
								<div class="label"><span class="helper">Interior Areas</span></div>
								<div class="value">
									<input type="text">
								</div>
							</div>
							<div class="row" id="row-whole-project"><!-- if architecture -->
								<div class="label"><span class="helper">aproximate size of the whole<br>project</span></div>
								<div class="value">
									<input type="text">
								</div>
							</div>
							<div class="row" id="row-size-area"><!-- if interior -->
								<div class="label"><span class="helper">approximate size of each area</span></div>
								<div class="value">
									<input type="text">
								</div>
							</div>
							<div class="row">
								<div class="label"><span class="helper">style of project</span></div>
								<div class="value">
									<input type="text">
								</div>
							</div>
							<div class="row">
								<div class="label"><span class="helper">Deadline</span></div>
								<div class="value">
									<select style="width:29%!important;">
									<option>date</option>
									</select>
									<select style="width:30%!important;">
										<option>month</option>
									</select>

									<select style="width:30%!important;">
										<option>year</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="label">Reference</div>
								<div class="value">
									<div class="container-radio">
										<div class="wrap-radio">
											
											<input type="radio" id="radio01" name="reference">
											<label for="radio01"><span></span> CONCEPTUAL RENDERS</label>
											<img class="img-radio" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/1.jpg">
										</div>
										<div class="wrap-radio">
											<input type="radio" id="radio02" name="reference">
											<label for="radio02"><span></span> REALISTIC RENDERS</label>
											<img class="img-radio" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/1.jpg">		
										</div>
										<div class="wrap-radio">
											<input type="radio" id="radio03" name="reference">
											<label for="radio03"><span></span> HiGHEST QUALITY RENDERS</label>
											<img class="img-radio" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/1.jpg">
										</div>
										<div style="clear:both"></div>
									</div>
								</div>
							</div>
						</div>


					<div style="clear:left"></div>
				</div>
			</div>
			
			<div class="cont-sign" id="menu-account-site">
				<?php if(Yii::app()->user->isGuest) { ?>
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
				<?php }else{ 
						$user = User::model()->findbypk(Yii::app()->user->name);
						$member = Member::model()->find('email = "'.$user->username.'"');
						$img = $user->image;
						$filename = Yii::app()->basePath."/../img/user/".$img;
						if((!file_exists($filename))||($img=="")){
							$img="notfound.jpg";
						}
					?>
					<div id="wrapper-profile">
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
					  				$id = Yii::app()->user->id;
									if (Yii::app()->user->level()=='3'){		
										$id_member = Member::model()->find("TRIM(email) = '$id'")->id;
									}else{
										$id_member = MemberSub::model()->find("TRIM(email) = '$id'")->id_member;

}
					  				$data = Yii::app()->db->createCommand()
									->select("*")
									->from('notification')
									->where("is_baca = 0 and id_member = '$id_member'")
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
				<?php } ?>
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
 							<?php }else{  ?>
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
	
</header>

<script>
(function() {
    var v = document.getElementsByClassName("youtube-player");
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

//$("#notification-box").niceScroll({cursorcolor:"gray"});


// if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
// window.onmousewheel = document.onmousewheel = wheel;

// function wheel(event) {
//     var delta = 0;
//     if (event.wheelDelta) delta = event.wheelDelta / 120;
//     else if (event.detail) delta = -event.detail / 3;

//     handle(delta);
//     if (event.preventDefault) event.preventDefault();
//     event.returnValue = false;
// }

// function handle(delta) {
//     var time = 1000;
// 	var distance = 300;
    
//     $('html, body').stop().animate({
//         scrollTop: $(window).scrollTop() - (distance * delta)
//     }, time );
// }






</script>