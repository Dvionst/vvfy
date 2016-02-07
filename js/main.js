	function whiteAll(){
			jQuery('.ar1').hide();
			jQuery('.ar2').hide();
			jQuery('.ar3').hide();
	}
	$(document).ready(function(){	
	
			// jQuery('.ar1').hide();
			jQuery('.right4').hide();
			jQuery('.ar2').hide();
			jQuery('.ar3').hide();


		
		// alert($(window).width());
		// if($('#first').imagesLoaded()){
			// alert($('#first').imagesLoaded());
		// }
		// jQuery('.control_toggle').click(function(){	
		// 	jQuery('html').toggleClass('hide_controls');
		// 	jQuery('.about').toggleClass('aboutshow');
		// 	// jQuery('.control_toggle').toggleClass('hide_controls');
		// 	  // $('.about').toggle("slide",{direction: 'right' }, 100);
		// 	   // $(".about").toggle( "slide", {direction: "left" }, 600 );
		// 	  // $( ".about"	 ).slideToggle("slow");
		// 	  // $( ".about" ).toggleClass('aboutshow');
		// 	  $('.kontener').toggleClass('close-kon');
		// });
		// jQuery('.standartToggle').click(function(){
		// 	jQuery('.right').toggleClass('showright');
		// });
		
		// jQuery('.kontener').click(function(){
		// 	jQuery('html').toggleClass('hide_controls');
		// 	  $( ".about" ).toggleClass('aboutshow');
		// 	  $('.kontener').toggleClass('close-kon');
		// });			
		// jQuery('.acc-stan').click(function(){
		// 	whiteAll();
		// 	jQuery('.right2').css('display','none');
		// 	jQuery('.right3').css('display','none');
		// 	jQuery('.ar1').fadeIn();
		// 	jQuery('.right').fadeIn();
		// });		
		// jQuery('.acc-prem').click(function(){
		// 	whiteAll();
		// 	// jQuery('.ar2').css('border-left','15px solid white');
		// 	jQuery('.ar2').fadeIn();
		// 	jQuery('.right4').css('display','none');
		// 	jQuery('.right').css('display','none');
		// 	jQuery('.right3').css('display','none');
		// 	jQuery('.right2').fadeIn();
		// });		
		// jQuery('.acc-inst').click(function(){
		// 	whiteAll();
		// 	jQuery('.ar3').fadeIn();
		// 	// jQuery('.ar3').css('border-left','15px solid white');
		// 	jQuery('.right4').css('display','none');
		// 	jQuery('.right2').css('display','none');
		// 	jQuery('.right').css('display','none');
		// 	jQuery('.right3').fadeIn();
		// });		
		// jQuery('.regis').click(function(){
		// 	// alert('asuk');
		// 	// whiteAll();
		// 	// jQuery('.ar3').fadeIn();
		// 	// // jQuery('.ar3').css('border-left','15px solid white');
		// 	jQuery('.right4').css('display','none');
		// 	jQuery('.right2').css('display','none');
		// 	jQuery('.right3').css('display','none');
		// 	jQuery('.right').css('display','none');
		// 	jQuery('.right4').fadeIn();
		// });
		$('#menu-right a[href^="#"]').on('click',function (e) {
			e.preventDefault();
			var target = this.hash;
			var $target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top+2
			}, 1000, 'swing', function () {
				window.location.hash = target;
			});
		});
		
		//using tooltip
		$( document ).tooltip({
		  position: {
			my: "center bottom-20",
			at: "center top",
			using: function( position, feedback ) {
			  $( this ).css( position );
			  $( "<div>" )
				.addClass( "arrow" )
				.addClass( feedback.vertical )
				.addClass( feedback.horizontal )
				.appendTo( this );
			}
		  }
		});	
		//end tooltip
		
	// $('.mr-1').hide();
	//$('.mr-2').hide();
	//$('.mr-3').hide();
	//$('.mr-4').hide();
	
	
	// alert($(window).width());
			
	// $('#loader-img').fadeOut();
	var status;
	//faisal : ditutup dulu soalnya 1 menu 1 layar
	// $( window ).scroll(function() {
	// 	if ($(window).width()>760){
	// 		var satu = ($(window).scrollTop()>=0 && $(window).scrollTop()<=75 );
	// 		var dua = ($(window).scrollTop()>=$('#premium').offset().top-250 && $(window).scrollTop()<=$('#premium').offset().top+10);
	// 		var tiga = ($(window).scrollTop()>=$('#our-work').offset().top-500 && $(window).scrollTop()<=$('#our-work').offset().top+10);
	// 		var empat = ($(window).scrollTop()>=$('#blog').offset().top-500 && $(window).scrollTop()<=$('#blog').offset().top+10);
	// 		var image = ($(window).scrollTop()>=$('#our-work').offset().top-100 );
	// 		if (satu){
	// 			$('.mr-1').fadeIn();
	// 		}else{
	// 			$('.mr-1').fadeOut();
	// 		}
	// 		if (dua){
	// 			$('.mr-2').fadeIn();
	// 		}else{
	// 			$('.mr-2').fadeOut();
	// 		}
	// 		if (tiga){
	// 			$('.mr-3').fadeIn();
	// 		}else{
	// 			$('.mr-3').fadeOut();
	// 		}
	// 		if (empat){
	// 			$('.mr-4').fadeIn();
	// 		}else{
	// 			$('.mr-4').fadeOut();
	// 		}
	// 	}
			
	// });
	var $container = $('.is_all');
	
	
	
	var imgLoad = imagesLoaded('.alltabs');
	imgLoad.on( 'done', function( instance ) {
	  // console.log('DONE  - all images have been successfully loaded');
	  // alert('done');
	  $('#loader-img').fadeOut();
		$container.css('visibility','visible');
	});
	
	
	$container.imagesLoaded( function(){
		$container.isotope({
			itemSelector : '.blogpost_preview_fw',
			layoutMode: 'packery',
		 });
	 });

	 $('#load-more').click(function(){
			$(this).hide();
			$('#load-less').css('display','block');
			$container.isotope({
				filter:'.mobile,.mobile2',
			});	
	});
	 $('#load-less').click(function(){
			$(this).hide();
			$('#load-more').css('display','block');
			$container.isotope({
				filter:'.mobile',
			});	
	});

	// alert($(window).width());
	// alert($(window).height());
	//mengatur posisi first pada saat window load
		if ($(window).width()>=100 && $(window).width()<=400){
			// alert('go to mobile1 only');
			$container.isotope({
				filter:'.mobile',
			});
			$('.rslides img').css('height',$(window).height());
			$('.rslides img').css('width','auto');
			$('.rslides img').css('margin-left','-300px');
			// alert(' masuk mobile potrait ');
		}
		if ($(window).width()>400 && $(window).width()<760){
			// alert(' masuk mobile landscape ');
			$container.isotope({
				filter:'.mobile',
			});
			// $('.rslides img').css('height','auto');
			// alert('2');
		}
		else{
			$container.isotope({
				filter:'.alltabs',
			});	
		}
	
	//mengatur posisi first pada saat window resize
	$( window ).resize(function() {
		
		if ($(window).width()>=100 && $(window).width()<400){
			// alert('go to mobile1 only on resizz');
			// $container.isotope({
				// filter:'.mobile',
			// });
			// alert('1');
			$('.rslides img').css('height',$(window).height());
			$('.rslides img').css('width','auto');
			$('.rslides img').css('margin-left','-300px');
			// $('.rslides img').css('width','auto');
		}
		if ($(window).width()>400 && $(window).width()<760){
			// alert('1');
			// $container.isotope({
				// filter:'.mobile',
			// });
			$('.rslides img').css('height','auto');
			$('.rslides img').css('width','100%');
			$('.rslides img').css('margin-left','0');
		}
		// else{
			// $container.isotope({
				// filter:'.alltabs',
			// });	
		// }
		
	});
		// "use strict";
			$( '.swipebox' ).swipebox();			
			port_setup();
			
			//  var count_lm = 0;
			//  $('.filter-all').click(function () {
			// 	$('.fill').css('color','white');
			// 	$('.filter-all').css('color','red');
			// 	$container.isotope({
			// 		filter:'.alltabs',
			// 	});			
			// 	$('.lm').show();
			// 	$('.lm').css('visibility','visible');
			// 	count_lm = 0;				
			// });
			// $('.filter-architecture').click(function () {
			// 	$('.fill').css('color','white');
			// 	$('.filter-architecture').css('color','red');
			// 	$('.architecture').css('width','33%');
			// 	$container.isotope({
			// 		filter:'.architecture',
			// 	});				
			// 	$('.lm').show();
			// 	$('.lm').css('visibility','hidden');
			// });
			
			// $('.filter-interior').click(function () {
			// 	$('.fill').css('color','white');
			// 	$('.filter-interior').css('color','red');
			// 	$('.interior').css('width','33%');
			// 	// alert('haha');
			// 	$container.isotope({
			// 		filter:'.interior',
			// 	});
			
			// 	$('.lm').show();
			// });
			// // $('.blogpost_preview_fw').not(':lt(5)').fadeOut();
			// $('.lm').click(function () {
			// 	if (count_lm==0){
			// 		$container.isotope({
			// 			filter:'.alltabs2,.alltabs',
			// 		});
			// 		count_lm++;
			// 	}else{
			// 		$container.isotope({
			// 			filter:'.alltabs3,.alltabs2,.alltabs',
			// 		});
			// 		$('.lm').css('visibility','hidden');
			// 	}
			// });


		//});	
		function port_setup() {
			"use strict";
			jQuery('.fw-portPreview-content').each(function(){
				jQuery(this).css('margin-top', -1*jQuery(this).height()/2+'px');
			});
			}
	
});

