<script src="<?php echo Yii::app()->request->baseUrl ?>/js/smooth/jquery.smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/scrollTo/jquery.scrollTo.min.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl ?>/js/scrollstyle/jquery.custom-scrollbar.js"></script>
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/js/scrollstyle/jquery.custom-scrollbar.css"/>
   
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




	$('.control_toggle').click(function(){	
		// alert('masuk');
		// $(this).hide();
		$('html').toggleClass('hide_controls');
		$('#menu-timeline').toggleClass('menu-timeline-hide');
		$('.wrapper-bnf').toggleClass('wrapper-bnf-hide');
		jQuery('.wrapper-logo').toggleClass('wrapper-logo-hide');
		 $('.kontener').toggleClass('close-kon');
		 $('html').toggleClass('hide-scrolly');
		 $('.backtohome').toggleClass('backtohome-show');
		$('.menu-content').toggleClass('menu-content-show');
		// $('.menu-content').toggleClass('hahahah');
		 // alert('masuk');
	});

	
	 $('.menu-content').smoothScroll(500);
	
	$(document).on("mousemove","#home > *",function(e){
		// alert('masuk');
		$('.btn-link').css("color","white");
		$('.child-scroll').css('top',"6px");
		$(' a[href$="#home"]').css("color","red");
		$('.menu-circle').css("background","white");
		$('.menu-circle').eq(0).css("background","red");
	});
	$(document).on("mousemove","#second > *",function(e){
		// alert('masuk');
		$('.btn-link').css("color","white");
		$('.child-scroll').css('top',"12px");
		$(' a[href$="#premium"]').css("color","red");
		$('.menu-circle').css("background","white");
		$('.menu-circle').eq(1).css("background","red");
	});
	$(document).on("mousemove","#portofolio > *",function(e){
		// alert('masuk');
		$('.btn-link').css("color","white");
		$('.child-scroll').css('top',"18px");
		$(' a[href$="#portofolio"]').css("color","red");
		$('.menu-circle').css("background","white");
		$('.menu-circle').eq(2).css("background","red");
	});
	$(document).on("mousemove","#blog-home > *",function(e){
		// alert('masuk');
		$('.btn-link').css("color","white");
		$('.child-scroll').css('top',"24px");
		$(' a[href$="#blog-home"]').css("color","red");
		$('.menu-circle').css("background","white");
		$('.menu-circle').eq(3).css("background","red");
	});
	$(document).on("mousemove","#team > *",function(e){
		// alert('masuk');
		$('.btn-link').css("color","white");
		$(' a[href$="#team"]').css("color","red");
		$('.child-scroll').css('top',"30px");
		$('.menu-circle').css("background","white");
		$('.menu-circle').eq(4).css("background","red");
	});


	// function menu on the left
	$(document).on("mousemove","#menu-our-services *",function(e){
		$('.value-mm').css("top","0px");
		
		$('.heading-menu').html("OUR SERVICES");
		$('.menu-description').html("Get to know about our <br> services");
	});
	$(document).on("mousemove","#menu-instant-offer *",function(e){
		$('.value-mm').css("top","80px");	
	
		$('.heading-menu').html("PRICE CALCULATOR");
		$('.menu-description').html("fill the form <br> in order to get a rough <br> estimation on the pricing");

	});
	$(document).on("mousemove","#menu-account-site *",function(e){
		$('.value-mm').css("top","150px");	
		$('.heading-menu').html("ABOUT US");
		$('.menu-description').html("VVFY.me is a tech studio <br> dedicated to incorporate the latest 3D inventions to the <br> architects and designers. <br><br> Our team is located in Beirut and Indonesia . We offer a <br> wide range of services");

	});

	var scroll = 0;
			// $(document).on('click','.btn-link',function(e){

			// });
	$(document).on('click','.btn-link',function(){
		scroll = scroll + 10;
		$('.btn-link').css('color','white');
		$('.menu-circle').css("background","white");

		var index = $('.btn-link').index(this);
		$('.btn-link').eq(index).css('color','red');
		$('.menu-circle').eq(index).css("background","red");

		// var data = {''}
		var href = $('.btn-link').eq(index).attr('href');
		// alert(href);
		if (href=="#home"){
			$('.child-scroll').css('top',"6px");
		}
		else if (href=="#premium"){
			$('.child-scroll').css('top',"12px");
		}
		else if (href=="#portofolio"){
			$('.child-scroll').css('top',"18px");
		}
		else if (href=="#blog-home"){
			$('.child-scroll').css('top',"24px");
		}
		else if (href=="#team"){
			$('.child-scroll').css('top',"30px");
		}
	});
			
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
			$('.heading-menu').html("OUR SERVICES");
			$('.menu-description').html("Get to know about our <br> services");

		}else if (value=="instant"){
			$('.value-mm').css("top","80px");	
			// $('.cont-our-service').fadeOut();
			// $('.cont-instant-offer').fadeIn();
			// $('.cont-sign').hide();
			$('.heading-menu').html("PRICE CALCULATOR");
			$('.menu-description').html("fill the form <br> in order to get a rough <br> estimation on the pricing");

		}else if (value=="sign"){
			$('.value-mm').css("top","150px");	
			// $('.cont-our-service').fadeOut();
			// $('.cont-instant-offer').fadeOut();
			// $('.cont-sign').fadeIn();
			$('.heading-menu').html("ABOUT US");
			$('.menu-description').html("VVFY.me is a tech studio <br> dedicated to incorporate the latest 3D inventions to the <br> architects and designers. <br><br> Our team is located in Beirut and Indonesia . We offer a <br> wide range of services");

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
<header class="main_header" style="position:fixed" >

	<div  class="header_scroll">
		<a href="javascript:void(0)" class="menu_toggler"></a>	
		<a href="#" onclick="javascript.void(0)" class="logo">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_def">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_retina">
		</a> 
		<div class="backtohome">
			<div class="label-back">
				<p>BACK TO HOME</p>
				<img style="width:20px;height:auto" class="red-right-arrow"  src="<?php echo Yii::app()->request->baseUrl ?>/img/red-arrow.png"> 
			</div>
			<div class="line-content-menu"></div>
		</div>
		<style type="text/css">
		.red-right-arrow{
			position: absolute;
			top: -10px;
 		   	right: -40px;
		}
		</style>
		<div class="menu-content" >

			<div id="menu-our-services" class="cont-our-service">
				<section id="section-one">
					<div id="menu-satu-satu">
						<div id="menu-list-account">
							<div id="btn-pa"  class="box-account">
								<p class="heading-ba">PREMIUM <br> ACCOUNT</p>
							</div>
							<div style="background:rgba(53,42,20,0.8)" class="box-account"></div>
							<div class="box-account" style="background:rgba(78,71,61,0.8)">
								<p style="font-size: 14px;" class="heading-ba">REGISTER <br> NOW</p>
							</div>
							<div id="btn-sa"  class="box-account" style="background:rgba(63,62,59,0.8)">
								<p class="heading-ba">STANDARD <br> ACCOUNT</p>
							</div>
						</div>
						<div id="menu-standar-account">
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
						ALL ACCOUNT HAVE ACCESS TO
					</div>		
					
					<ul class="inline" >	
						<li><a href="#">follow up daily progress</a></li>
						<li><a href="#">discount perks</a></li>
						<li><a href="#">updates on your R&D process</a></li>
					</ul>	
					<ul class="inline">
						<li><a href="#">comment App</a></li>
						<li><a href="#">track the project</a></li>
						<li><a href="#">control the budget</a></li>
					</ul>	

				</div>

				</section>
			</div>


			<div id="menu-instant-offer" class="cont-instant-offer">
				<div class="wrapper-calc">
					<div id="btn-submit-calc">SUBMIT</div>
						<div class="table-leftmenu">
							<div class="row">
								<div class="label">project</div>
								<div class="value">
									<select>
										<option>Pilih</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="label">of area for interior</div>
								<div class="value">
									<input type="text">
								</div>
							</div>
							<div class="row">
								<div class="label">number of views for interior and architecture</div>
								<div class="value">
									<input type="text">
								</div>
							</div>
							<div class="row">
								<div class="label">aproximate size of the whole project if architecture</div>
								<div class="value">
									<input type="text">
								</div>
							</div>
							<div class="row">
								<div class="label">approximate size of each area if interior</div>
								<div class="value">
									<input type="text">
								</div>
							</div>
							<div class="row">
								<div class="label">style of project</div>
								<div class="value">
									<input type="text">
								</div>
							</div>
							<div class="row">
								<div class="label">Deadline</div>
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
											<label>
												<input type="radio">CONCEPTUAL RENDERS
											</label>
											<img class="img-radio" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/1.jpg">
										</div>
										<div class="wrap-radio">
											<label>
												<input type="radio">REALISTIC RENDERS
											</label>
											<img class="img-radio" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/1.jpg">		
										</div>
										<div class="wrap-radio">
											<label>
												<input type="radio">HQ RENDERS
											</label>
											<img class="img-radio" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/1.jpg">
										</div>
										<div style="clear:both"></div>
									</div>
								</div>
							</div>
						</div>


					<div style="clear:left"></div>
				</div>

				<!-- <div class="line-content-menu"></div> -->
			
			</div>
			
			<div class="cont-sign" id="menu-account-site">
				<div id="wrapper-register">
					<div class="lbl-cs">REGISTER</div>
					<div class="btn-facebook">SIGN UP WITH FACEBOOK</div>
					<div class="lbl-cs" style="position:relative;top:15px">OR</div>
					<form id="form-register">					
						<input type="text" placeholder="email addres">
						<input type="text" placeholder="username">
						<input type="text" placeholder="password">
						<input type="text" placeholder="confirm password">
						<div class="lbl-cs" style="color:gray;top: 14px;position: relative;">
							SELECT ACCOUNT
						</div>
						<center>
							<button style="background:transparent;border:1px solid white">STANDAR ACCOUNT</button>
							<button>PREMIUM ACCOUNT</button>					
							<button  
								class="sign-up-submit"
								
								>SUBMIT</button>
						</center>
					</form>
				</div>
				<div id="wrapper-sign">
					<div class="lbl-cs">SIGN IN</div>
					<input type="text" placeholder="EMAIL">
					<input type="text" placeholder="PASSWORD">
					<input  
					value="SUBMIT" 
					class="sign-up-submit" 
					>
					


					<div class="btn-facebook"
					style="
					position:absolute;
					bottom:0px;
					width:80%!important;
				    margin: 0 0 30px 5px;
					" 

					>SIGN IN WITH FACEBOOK</div>
					
		
				</div>

			</div>
			
			<div id="wrapper-optmenu">
				<div id="option-menu" >
					<div class="menu-meter-v">
						<div class="value-mm"></div>
					</div>
					<ul ng-controller="MyCtrl">
						<li class="right-menu" value="services"><a  href="#menu-our-services">SERVICES</a></li>
						<li class="right-menu" value="instant"><a href="#menu-instant-offer">INSTANT OFFER</a></li>
						<li class="right-menu" value="sign"><a href="#menu-account-site">SIGN IN/REGISTER</a></li>
					</ul>

					<div class="wrapper-hm">
						<div class="heading-menu">
							OUR<br> SERVICES
						</div>
						<div class="menu-description">
							Get to  know about our<br> services
						</div>
					</div>
				
				</div>
			</div>



		</div>
	</div>
	
</header>
