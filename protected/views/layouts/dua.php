<div class="kontener" ></div>
	
	<ul id="menu-right" class="mr-1" style="position:absolute">
		<li><a   id="mn-prem" href="#premium">PREMIUM</a> </li>
		<li><a   id="mn-our" href="#our-work">Our Work   </a></li>
		<li><a   id="mn-blog" href="#blog">Blog</a></li>
		<li><a   id="mn-team" href="#team">The team </a></li>
	</ul>
	<ul id="menu-right" class="menu-mobile" >
		<li><a  id="mn-prem" href="#premium">PREMIUM </a> </li>
		<li><a  id="mn-our" href="#our-work">Our Work  </a></li>
		<li><a  id="mn-blog" href="#blog">Blog</a></li>
		<li><a  id="mn-team" href="#team">The team</a></li>
	</ul>
	<script>
	</script>
	<div onclick="openInstant()" class="btn-nav-first" title="">GET AN INSTANT ONLINE OFFER</div>
    <ul class="rslides" id="first" style="" >
	  <li><img class="imgvvfy" src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" alt=""></li>
      <li><img class="imgvvfy" src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg" alt=""></li>
      <li><img class="imgvvfy" src="<?php echo Yii::app()->request->baseUrl; ?>/images/3.jpg" alt=""></li>
    </ul>
	<div class="controls_wrapper">
		<a href="javascript:void(0)" title="" class="fs_slider_prev rslides1_nav prev" style="background-image:url('<?php echo Yii::app()->request->baseUrl; ?>/img/prev.png')"></a>
		<a href="javascript:void(0)" title="" id="fs_play-pause" class="fs_pause"></a>
		<a href="javascript:void(0)" title="" id="fs_play-pause" class="fs_play" style="display:none"></a>
		<a href="javascript:void(0)" title="" class="fs_slider_next rslides1_nav next" style="background-image:url('<?php echo Yii::app()->request->baseUrl; ?>/img/next.png')"></a>
	</div>
	<div class="wrapper-down" id="premium"  >
		<h1 class=""  >PREMIUM PACKAGE</h1>
		
		<!--
		<ul id="menu-right" class="mr-2">
			<li><a   style="color:#F5B800" id="mn-prem" href="#wrapper-down">PREMIUM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
			<li><a  id="mn-our" href="#wrapper-our">Our Work   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
			<li><a  id="mn-team" href="#team">The team &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
		</ul>
		-->
		<ul id="menu-right" class="mr-2">
				<li><a href="#first"><div class="up2"></div></a></li>
				<li><a style="color:red"   id="mn-prem" href="#premium">PREMIUM</a> </li>
				<li><a  id="mn-our" href="#our-work">Our Work   </a></li>
				<li><a  id="mn-blog" href="#blog">Blog</a></li>
				<li><a  id="mn-team" href="#team">The team </a></li>
			</ul>
	</div>
	<div id="second">

		<div title="close the video" id="pause" style= "background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/img/close-video.png');"></div>
		<div title="share this video" style= "background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/img/share.png');"  class="share" id="share_open"></div>
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
		<!--
		-->
		<div class="wrap-v">

			<video id="full" poster="asd"  class="video-bg" controls  loop=""  style="display: none"></video>
			<video id="video-vv" class="video-bg" autoplay="" loop="" muted=""  poster=""  style="">
				<source src="<?php echo Yii::app()->request->baseUrl; ?>/vv.mp4" type="video/mp4" id="sourcevid">
				<object id="video-vv" class="video-bg" type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" muted="true" loop="true">
					<param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
					<param name="allowFullScreen" value="true" />
					<param name="wmode" value="transparent" 	/>
					<param name="flashVars" value="config={'muted':true,'playlist':[{'url':'<?php echo Yii::app()->createAbsoluteUrl('vv.mp4'); ?>','autoPlay':true}]}" />
					<span title="No video playback capabilities, please download the video below">VVFY</span>
				</object>

			</video>
	
			<div class="back"></div>
			<div class="block" id="play">
				<?php
					if(preg_match('/(?i)msie [5-8]/',$_SERVER['HTTP_USER_AGENT']))
					{
				?>
					<img class="play-premium" src="<?php echo Yii::app()->createAbsoluteUrl('/img/baru/play.png'); ?>"><span></span></img>
				<?php
					}
					else
					{
				?>
					<div class="play-premium" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/img/baru/play.png');"><span></span></div>	
				<?php
					}
				?>
				<!--[if gt IE 8]>
					
				<![endif]-->			
				
				<!--[if lt IE 9]>
						
				<![endif]-->
			</div>
			<!-- Button -->
			<span class="hint" title="">
				OUR TEAM<br>KNOWLEDGEE AND ASSETS<br>ARE AT THE DISPOSAL<br>OF OUR PREMIUM MEMBERS
				<div class="hint-line"></div>

				<div onclick="openCustom()" class="block" id="block">
					<span class="btn-nav" title="">
						SIGN UP NOW
					</span>
				</div>
			</span>
		</div>
		<!--
		-->		

		<script>
		function openInstant(){
		// alert($(window).width()>400);
		// // alert($(window).width()<760);
		// 	if ($(window).width()>760){
		// 		jQuery('html').toggleClass('hide_controls');
		// 		jQuery('.about').toggleClass('aboutshow');
		// 		$('.kontener').toggleClass('close-kon');
		// 		whiteAll();
		// 		jQuery('.ar3').fadeIn();
		// 		jQuery('.right2').css('display','none');
		// 		jQuery('.right').css('display','none');
		// 		jQuery('.right3').fadeIn();
		// 		// alert('masuk')
		// 	}else{
		// 		alert('our platform will be ready soon')
		// 	}
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
				// jQuery('html').toggleClass('hide_controls');
				jQuery('.control_toggle').trigger('click');
				$('.right-menu[value~="sign"]').trigger('click');
				
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
			// if ($(window).width()>760){
			// 	jQuery('html').toggleClass('hide_controls');
			// 	jQuery('.about').toggleClass('aboutshow');
			// 	$('.kontener').toggleClass('close-kon');
			// 	whiteAll();
			// 	jQuery('.ar2').fadeIn();
			// 	jQuery('.right').css('display','none');
			// 	jQuery('.right3').css('display','none');
			// 	jQuery('.right2').fadeIn();
			// }else{
			// 	alert('our platform will be ready soon')
			// }
		}
		</script>
<!-- 		<div onclick="openCustom()" class="block" id="block">
			<span class="btn-nav" title="">
				CUSTOMISE YOUR  PACKAGE
			</span>
		</div> -->
		
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

<!-- 		<div id="menu-2">
			<div class="centered">
				<div class="wrapper-icon">
					<div class="icon" >
						<div class="image">
							<img style="" src="<?php echo Yii::app()->request->baseUrl; ?>/icon/1.png"/>
						</div>
							<div class="title" ><b class="bold-4">CUSTOMISED SERVICES</b></div>
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
							<img style="" src="<?php echo Yii::app()->request->baseUrl; ?>/icon/3.png"/>
						</div>
							<div class="title" ><b class="bold-4">CUSTOMISED BUDGET</b></div>
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
							<img style="" src="<?php echo Yii::app()->request->baseUrl; ?>/icon/4.png"/>
						</div>
							<div class="title" ><b class="bold-4">HIGH QUALITY RENDERS</b></div>
							<div class="detail" >
							<ul class="list-menu right-border-list" >
								<li>Realistic renders</li>
								<li>latest technologies</li>
								<li class="none">&nbsp;</li>
								<li class="none terms">terms and condition</li>

							</ul>
							</div>
						</div>
				</div>
			</div>
		</div> -->
		<div class="block" id="pause" style="display:none;" title="close the video">
			<span class="play-button" >

			</span>
		</div>		
	</div>
<script>
$(function() {
	$("#play").click(function(){ 
		$('.hint').css('visibility','hidden');
		$('.back').fadeOut();
		$('.share').fadeIn();
		$('#pause').css("z-index",91);
		$('#pause').fadeIn();
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
		$('.video-bg').trigger('play');
		
		
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
		 $('.play-premium').css("opacity","1");
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
//$(function() {
// 		$("#play").click(function(){ 
// 		$('.hint').css('visibility','hidden');
// 		$('.back').fadeOut();
// 		// $('.wrapper-back').css("opacity",0);
// 		$('.share').fadeIn();
// 		$('.wrap-v').fadeOut();
// 			$('.centered').fadeOut();
// 		// }
// 		$('#play').fadeOut();	
// 		$('.play-button').css("background","black");		
// 		$('.btn-nav').css("opacity",0);
// 		 $('.wrap-v').html('');
// 		 $('.wrap-v').append('<video id="full" poster="asd"  class="video-bg" controls  loop=""  style="display: inline-block;"></video>');
// 		 $('#full').append('<source src="bau.mp4" type="video/mp4">');
		
// 		$('#second').css('height','100vh');
// 		// $('#full').css('height','100vh');
// 		if ($(window).width()>=760){
// 			$('.video-bg').trigger('play');
// 		}
// 		// if  (!$('#full').trigger('play'))
// 			// $('.back').css("background","transparent");
// 		 $('.wrap-v').fadeIn();
// 		 // $('#full').css('z-index',90);
// 		$('#pause').css("z-index",91);
// 		$('#pause').fadeIn();
	
// 	});
// 	$("#pause").click(function(){
// 		$('.hint').css('visibility','visible');
// 		// $('.wrapper-back').css("opacity",1);
// 		// $('#second').css('height','800px');
// 		$('.back').fadeIn();
// 		$('.share').fadeOut();
// 		$('#full').trigger("pause");
// 		$('#full').prop("muted", true);
// 		// $('#second').css("background","rgba(0, 0, 0, 0.68)");
// 		// $('#second').css("z-index",1);
// 		// if ($(window).width()>=760){
// 			$('.centered').fadeIn();
// 		// }
// 		$('#second').css('height','auto');
// 		// $('#second').css("height",sc);
// 		 $('.wrap-v').fadeOut();
// 		 $('.wrap-v').html('');
// 		 $('.wrap-v').fadeIn();
// 		 $('.wrap-v').append('<video  id="nofull" class="video-bg"  controls="" autoplay="" loop="" muted  style="display: inline-block;"></video>');
// 		 $('#nofull').append('<source src="vv.mp4" type="video/mp4">');
// 		 $('.wrap-v').append('<div class="back"></div>');
// 		$('.play-button').css("opacity","1");
// 		 $('video').prop("muted", false);
// 		$('.play-button').css("background-color","transparent");
// 		$('.prominent-wrapper').fadeIn();
// 		// $('.wrapper-nav').css("background","rgba(0, 0, 0, 0.6)");
// 		$('#play').fadeIn();
// 		$('.btn-nav').css('opacity',1);
// 		$('#pause').fadeOut();
// 		// $('.btn-nav').css("opacity",1);
// 	});
	

//   $("#first").responsiveSlides({
// 	 speed: 500, 
// 	  nav: true, 
// 	  timeout: 6000,  
// 		pause: false,  
// 		// Boolean: Pause on hover, true or false
// 		pauseControls: true,    // Boolean: Pause when hovering controls, true or false
// 		prevText: " ",   // String: Text for the "previous" button
// 		nextText: " ",  

//   });
  
// });
	 
  </script>
