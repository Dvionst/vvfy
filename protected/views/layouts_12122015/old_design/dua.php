<div class="kontener" ></div>
	
	<ul id="menu-right" class="mr-1" style="position:absolute">
		<li><a   id="mn-prem" href="#premium">PREMIUM</a> </li>
		<li><a   id="mn-our" href="#our-work">Our Work   </a></li>
		<li><a   id="mn-team" href="#team">The team </a></li>
	</ul>
	<ul id="menu-right" class="menu-mobile" >
		<li><a  id="mn-prem" href="#premium">PREMIUM </a> </li>
		<li><a  id="mn-our" href="#our-work">Our Work  </a></li>
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
		<a href="javascript:void(0)" title="" class="fs_slider_prev rslides1_nav prev"></a>
		<a href="javascript:void(0)" title="" id="fs_play-pause" class="fs_pause"></a>
		<a href="javascript:void(0)" title="" id="fs_play-pause" class="fs_play" style="display:none"></a>
		<a href="javascript:void(0)" title="" class="fs_slider_next rslides1_nav next"></a>
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
				<li><a style="color:#F5B800"   id="mn-prem" href="#premium">PREMIUM</a> </li>
				<li><a   id="mn-our" href="#our-work">Our Work   </a></li>
				<li><a  id="mn-team" href="#team">The team </a></li>
			</ul>
	</div>
	<div id="second">

		<div title="close the video" id="pause"></div>
		<img title="share this video" src="<?php echo Yii::app()->request->baseUrl; ?>/img/share.png" class="share" >
	
		<!--
		-->
		<div class="wrap-v">
			<video id="video-vv" class="video-bg" autoplay="" loop="" muted=""  poster=""  style="">
					<source src="<?php echo Yii::app()->request->baseUrl; ?>/vv.mp4" type="video/mp4" id="sourcevid">
			</video>
			<div class="back"></div>
		</div>
		<!--
		-->
		
			
		
	
		<div class="block" id="play">
			<span style="" class="play-button">
				<span style="margin-top:40px;margin-left:8px;" title="" ></span>
			</span>
		</div>
		<div   class="block" id="block"></div>
		<span class="hint" title="">
			<div>
			</div>
			OUR TEAM, KNOWLEDGEE AND ASSETS </br> ARE AT THE DISPOSAL OF OUR PREMIUM MEMBERS . 
		</span>
		<script>
		function openInstant(){
		// alert($(window).width()>400);
		// alert($(window).width()<760);
			if ($(window).width()>760){
				jQuery('html').toggleClass('hide_controls');
				jQuery('.about').toggleClass('aboutshow');
				$('.kontener').toggleClass('close-kon');
				whiteAll();
				jQuery('.ar3').fadeIn();
				jQuery('.right2').css('display','none');
				jQuery('.right').css('display','none');
				jQuery('.right3').fadeIn();
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
		<div onclick="openCustom()" class="block" id="block">
			<span class="btn-nav" title="">
				CUSTOMISE YOUR  PACKAGE
			</span>
		</div>
		
<!--	<div class="wrapper-back"></div>-->
		<div id="menu-2">
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
		</div>
		<div class="block" id="pause" style="display:none;" title="close the video">
			<span class="play-button" >
			</span>
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
		$('.play-button').css("background","black");		
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
		$('.play-button').css("background-color","transparent");
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
