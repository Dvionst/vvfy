<!-- /* full s*/ -->
<div class="kontener" ></div>


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
			<li><a class="btn-link" href="#team">TEAM</a><div class="menu-circle"></div></li>
		</ul>
	</div>


	<div id="second">
	<div id="premium"></div>


		<div id="wrapper-btn-video">
			<div title="close the video" id="pause"></div>
			<div title="Share this video" style="background-image:url('<?php echo Yii::app()->request->baseUrl; ?>/img/share.png')" class="share" id="share_open">
			</div>
			<div id="open_share">
				<?php
					$this->widget('SocialShareWidget', array(
					    'url' => Yii::app()->createAbsoluteUrl('').'/#premium',          //required
					    'services' => array('facebook','twitter','linkedin'),   //optional
					    'htmlOptions' => array('class' => ''), //optional
					    'popup' => true,               //optional
					    'style'=>1,
					));
				?>
			</div>
		</div>
	
		<!--
		-->
		<div class="wrap-v">
			<video id="full" poster="asd"  class="video-bg" controls  loop=""  style="display: none"></video>
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
				OUR TEAM<br>KNOWLEDGEE AND ASSETS<br>ARE AT THE DISPOSAL<br>OF OUR PREMIUM MEMBERS
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
					<div class="icon border" style="" >
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
							<img style="height:auto" src="<?php echo Yii::app()->request->baseUrl; ?>/icon/4.png"/>
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
					<div class="icon border" style="">
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
			
					<div class="icon last" style="">
						<div class="image">
							<img style="" src="<?php echo Yii::app()->request->baseUrl; ?>/icon/3.png"/>
						</div>
							<div class="title" ><b class="bold-4">HIGH QUALITY RENDERS</b></div>
							<div class="detail" >
							<ul class="list-menu" >
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
		$('.share').fadeIn();
		$('#play').fadeOut();	
		$('.btn-nav').css("opacity",0);
		$('#video-vv').html("");
		$('#video-vv').fadeOut();
		$("#menu-timeline").hide();
		$(".wrapper-logo").hide();
		$('#full').css('display','inline-block');
		$('#full').append('<source src="<?php echo Yii::app()->baseUrl; ?>/bau.mp4" type="video/mp4">');
		$('#full').prop("muted", false);
		$('#full').prop("currentTime", 0);
		if ($(window).width()>=760){
			$('.video-bg').trigger('play');
		}
		$('#pause').css("z-index",91);
		$('#pause').fadeIn();
	});

	$("#pause").click(function(){
		$('.hint').css('visibility','visible');
		$('.back').fadeIn();
		$('.share').fadeOut();
		$('#full').trigger("pause");
		$('#full').prop("muted", true);
		$('#second').css('height','auto');
		 $('#full').css('display','none');
		 $("#menu-timeline").show();
		 $(".wrapper-logo").show();
		 $('#full').html('');
		 $('#video-vv').html("<source src='/vvfy/vv.mp4' type='video/mp4' id='sourcevid'>");
		 $('#video-vv').fadeIn();
		 $('#video-vv').prop("muted", true);
		 $('.play-button').css("opacity","1");
		$('.prominent-wrapper').fadeIn();
		$('#play').fadeIn();
		$('.btn-nav').css('opacity',1);
		$('#pause').fadeOut();
		$('#open_share').hide();

		var id = $(".share").attr('id');
 		if(id == "share_close"){
	 		$('.share').css({
	        //for firefox
	        "-moz-animation-name":"share_close",
	        "-moz-animation-duration":"0.5s",
	        "-moz-animation-iteration-count":"1",
	            "-moz-animation-fill-mode":"forwards",

	        //for safari & chrome
	        "-webkit-animation-name":"share_close",
	        "-webkit-animation-duration":"0.5s",
	        "-webkit-animation-iteration-count":"1",
	        "-webkit-animation-fill-mode" : "forwards",

	        });
	        $(".share").attr("id","share_open");
	    }
	});
	
 $(".share").click(function(){
 	var id = this.id;
 	if(id == "share_open"){
 		$('.share').css({
        //for firefox
        "-moz-animation-name":"share_open",
        "-moz-animation-duration":"0.5s",
        "-moz-animation-iteration-count":"1",
            "-moz-animation-fill-mode":"forwards",

        //for safari & chrome
        "-webkit-animation-name":"share_open",
        "-webkit-animation-duration":"0.5s",
        "-webkit-animation-iteration-count":"1",
        "-webkit-animation-fill-mode" : "forwards",

        });
        $(this).attr("id","share_close");
        $("#open_share").show('slide', {direction: 'right'}, 500);
 	}else{
 		$('.share').css({
        //for firefox
        "-moz-animation-name":"share_close",
        "-moz-animation-duration":"0.5s",
        "-moz-animation-iteration-count":"1",
            "-moz-animation-fill-mode":"forwards",

        //for safari & chrome
        "-webkit-animation-name":"share_close",
        "-webkit-animation-duration":"0.5s",
        "-webkit-animation-iteration-count":"1",
        "-webkit-animation-fill-mode" : "forwards",

        });
        $(this).attr("id","share_open");
        $("#open_share").hide('slide', {direction: 'right'}, 500);
 	}
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
