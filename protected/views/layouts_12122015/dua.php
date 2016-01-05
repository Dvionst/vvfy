<!-- /* full s*/ -->
<div class="kontener" >
	
</div>
	<div id="home">
		<div class="wrapper-bnf">
			<div onclick="openInstant()" class="btn-nav-first" title="">GET AN INSTANT ONLINE OFFER</div>
		</div>
	    <div class="line-bnf"></div>
	   	<div class="wrapper-logo"></div>
	    <ul class="rslides" id="first" style="" >
		  <li><img class="imgvvfy" src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" alt=""></li>
	      <li><img class="imgvvfy" src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg" alt=""></li>
	      <li><img class="imgvvfy" src="<?php echo Yii::app()->request->baseUrl; ?>/images/3.jpg" alt=""></li>
	    </ul>
		<div class="controls_wrapper">
			<a href="javascript:void(0)" title="" class="fs_slider_prev rslides1_nav prev"></a>
			<a href="javascript:void(0)" title="" id="fs_play-pause" class="fs_pause"></a>
			<a href="javascript:void(0)" title="" id="fs_play-pause" class="fs_play" style="display:none"></a>
			<a href="javascript:void(0)" title="" class="fs_slider_next rslides1_nav next"></a>
		</div>
	</div>


	<div id="menu-timeline">
		<div class="scroll-timeline">
			<div class="child-scroll"></div>
		</div>
		<a href="#team"  class="btn-timeline-downest">
			<img class="arrow-timeline" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/arrow-down.png">
			<img style="top:160px" class="arrow-timeline" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/arrow-down.png">
		</a>
		<ul>
			<li><a style="color:red" class="btn-link" href="#home">HOME</a> <div class="menu-circle"></div> </li>
			<li><a class="btn-link" href="#premium">PREMIUM</a><div class="menu-circle"></div></li>
			<li><a class="btn-link" href="#portofolio">OUR WORK</a><div class="menu-circle"></div></li>
			<li><a class="btn-link" href="#blog-home">BLOG</a><div class="menu-circle"></div></li>
			<li><a class="btn-link" href="#team">TEAM</a><div class="menu-circle last"></div></li>
		</ul>
	</div>


	<div id="second">
	<div id="premium"></div>


		<div id="wrapper-btn-video">
			<div title="close the video" id="pause"></div>
			<img title="share this video" src="<?php echo Yii::app()->request->baseUrl; ?>/img/share.png" class="share" >
		</div>
	
		<!--
		-->
		<div class="wrap-v">
			<video id="video-vv" class="video-bg" autoplay="" loop="" muted=""  poster=""  style="">
				<source src="<?php echo Yii::app()->request->baseUrl; ?>/vv.mp4" type="video/mp4" id="sourcevid">
			</video>
			<div class="back"></div>
			<div class="block" id="play">
				<span style="" class="play-button">
					<span></span>
				</span>
			</div>
			<!-- Button -->
			<span class="hint" title="">
				OUR TEAM <br> KNOWLEDGEE AND ASSETS <br> ARE AT THE DISPOSAL <br> OF OUR PREMIUM MEMBERS
				<div class="hint-line"></div>

				<div onclick="" class="block" id="block">
					<span class="btn-nav" title="">
						CUSTOMIZE YOUR  PACKAGE
					</span>
				</div>
			</span>
		</div>
		<!--
		-->
		
			
		
	
	

	

		<script>
		function openInstant(){
		
			if ($(window).width()>760){
				// jQuery('html').toggleClass('hide_controls');
				jQuery('.control_toggle').trigger('click');
				$('.right-menu[value~="instant"]').trigger('click');

				// jQuery('.about').toggleClass('aboutshow');
				//   $( ".menu-content" ).toggleClass('menu-content-show');
				//   jQuery('#menu-timeline').toggleClass('menu-timeline-hide');
			
				// $('.kontener').toggleClass('close-kon');
				// whiteAll();
				// jQuery('.ar3').fadeIn();
				// jQuery('.right2').css('display','none');
				// jQuery('.right').css('display','none');
				// jQuery('.right3').fadeIn();
				// alert('masuk')
			}else{
				alert('our platform will be ready soon')
			}
		}

		function openCustom(){
			if ($(window).width()>760){
				jQuery('html').toggleClass('hide_controls');
				jQuery('.about').toggleClass('aboutshow');
				$('.kontener').toggleClass('close-kon');
				whiteAll();
				jQuery('.ar2').fadeIn();
				jQuery('.right').css('display','none');
				jQuery('.right3').css('display','none');
				jQuery('.right2').fadeIn();
			}else{
				alert('our platform will be ready soon')
			}
		}
		</script>
		
	
<!--	<div class="wrapper-back"></div>-->
		<div id="menu-2">
			<div class="centered">
				<div class="wrapper-icon">
					<div class="icon" style="border-left: 1px solid transparent;" >
						<div class="image">
							<img style="" src="<?php echo Yii::app()->request->baseUrl; ?>/icon/1.png"/>
						</div>
							<div class="title" ><b class="bold-4">CUSTOMIZED SERVICES</b></div>
							<div class="detail" >
								<ul class="list-menu" >
									<li>multiple projects</li>
									<li>3d modeling only</li>
									<li>furniture design</li>
									<li class="none">&nbsp;</li>
								</ul>
							
							</div>
					</div>
						<div class="icon" style="">
						<div class="image">
							<img style="width:100px;height:auto" src="<?php echo Yii::app()->request->baseUrl; ?>/icon/4.png"/>
						</div>
							<div class="title" ><b class="bold-4">CUSTOMIZED BUDGET</b></div>
							<div class="detail" >
								<ul class="list-menu" >
									<li>monthly fixed fees</li>
									<li>starting @500$/month</li>
									<li class="none">&nbsp;</li>
									<li class="none">&nbsp;</li>
								</ul>

							</div>
					</div>
					<div class="icon" style="">
						<div class="image">
							<img style="" src="<?php echo Yii::app()->request->baseUrl; ?>/icon/2.png"/>
						</div>
						<div class="title" ><b class="bold-4">UNLIMITED RENDERS</b></div>
						<div class="detail" >
							<ul class="list-menu" >
								<li>unlimited views</li>
								<li>free modifications</li>

								<li class="none">&nbsp;</li>
								<li class="none">&nbsp;</li>

							</ul>
						</div>
				
					</div>
			
					<div class="icon" style="">
						<div class="image">
							<img style="" src="<?php echo Yii::app()->request->baseUrl; ?>/icon/3.png"/>
						</div>
							<div class="title" ><b class="bold-4">HIGH QUALITY RENDERS</b></div>
							<div class="detail" >
							<ul class="list-menu right-border-list" >
								<li>Realistic renders</li>
								<li>latest technologies</li>
								<li class="none">&nbsp;</li>
								<li  style="visibility:hidden" class="none terms">terms and condition</li>

							</ul>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="block" id="pause" style="display:none;" title="close the video">
			<span class="play-button" ></span>

		</div>		
	</div>
<script>
// var sc  = $('#second').height();
// //alert(sc);
 // $(window).resize(function () {
	// sc  = $('#second').height();
// });

$(function() {
	$("#play").click(function(){ 
		$('.hint').css('visibility','hidden');
		$('.back').fadeOut();
		// $('.wrapper-back').css("opacity",0);
		$('.share').fadeIn();
		$('.wrap-v').fadeOut();
			$('.centered').fadeOut();
		// }
		$('#play').fadeOut();	
		// $('.play-button').css("background","black");		
		$('.btn-nav').css("opacity",0);
		 $('.wrap-v').html('');
		 $('.wrap-v').append('<video id="full" poster="asd"  class="video-bg" controls  loop=""  style="display: inline-block;"></video>');
		 $('#full').append('<source src="bau.mp4" type="video/mp4">');
		
		$('#second').css('height','100vh');
		// $('#full').css('height','100vh');
		if ($(window).width()>=760){
			$('.video-bg').trigger('play');
		}
		// if  (!$('#full').trigger('play'))
			// $('.back').css("background","transparent");
		 $('.wrap-v').fadeIn();
		 // $('#full').css('z-index',90);
		$('#pause').css("z-index",91);
		$('#pause').fadeIn();
	
	});
	$("#pause").click(function(){
		$('.hint').css('visibility','visible');
		// $('.wrapper-back').css("opacity",1);
		// $('#second').css('height','800px');
		$('.back').fadeIn();
		$('.share').fadeOut();
		$('#full').trigger("pause");
		$('#full').prop("muted", true);
		// $('#second').css("background","rgba(0, 0, 0, 0.68)");
		// $('#second').css("z-index",1);
		// if ($(window).width()>=760){
			$('.centered').fadeIn();
		// }
		$('#second').css('height','auto');
		// $('#second').css("height",sc);
		 $('.wrap-v').fadeOut();
		 $('.wrap-v').html('');
		 $('.wrap-v').fadeIn();
		 $('.wrap-v').append('<video  id="nofull" class="video-bg"  controls="" autoplay="" loop="" muted  style="display: inline-block;"></video>');
		 $('#nofull').append('<source src="vv.mp4" type="video/mp4">');
		 $('.wrap-v').append('<div class="back"></div>');
		$('.play-button').css("opacity","1");
		 $('video').prop("muted", false);
		// $('.play-button').css("background-color","transparent");
		$('.prominent-wrapper').fadeIn();
		// $('.wrapper-nav').css("background","rgba(0, 0, 0, 0.6)");
		$('#play').fadeIn();
		$('.btn-nav').css('opacity',1);
		$('#pause').fadeOut();
		// $('.btn-nav').css("opacity",1);
	});
	

  $("#first").responsiveSlides({
	 speed: 500, 
	  nav: true, 
	  timeout: 6000,  
		pause: false,  
		// Boolean: Pause on hover, true or false
		pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		prevText: " ",   // String: Text for the "previous" button
		nextText: " ",  

  });
  
});
	 
  </script>
