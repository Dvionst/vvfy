<script>
	function removeNotif(kelas){
		alert('masuk'+kelas);
	}

	$(document).ready(function() {
		$( ".note" ).draggable({ 
			cursor: "move", 
			cursorAt: { top: 56, left: 56 } ,
			containment: "#container-dragable"
		});
		$( "#form-add-prj" ).draggable({ 
			cursor: "move", 
			cursorAt: { top: 56, left: 56 } 
			// containment: "#container-dragable"
		});
		
		var index;
		$('.close').click(function(){
			index= $(this).closest('.feed').index('.feed');
			$('.feed:eq('+index+')').fadeOut();
				
			// alert(index);
			// $('.feed').hide();
		});
				
		
		var $container = $('.container-iso').isotope({
			itemSelector: '.feed,.view',
			masonry: {
				// columnWidth: 100
			}
		});
		
		// var $container2 = $('#promotion').isotope({
			// itemSelector: '.iklan',
			// // masonry: {
				// // // columnWidth: 100
			// // }
		// });
		
		$('.pie_progress').asPieProgress({
            namespace: 'pie_progress'
        });
		
		$('.pie_progress').asPieProgress('start');
		
		$('a[href^="#"]').on('click',function (e) {
			e.preventDefault();
			var target = this.hash;
			var $target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 1000, 'swing', function () {
				window.location.hash = target;
			});
		});
		
		$('#filter-by').on('change',function (e) {
			var nilai = $(this).val();
			if(nilai=='Date'){
				$('#seleksi').html(
					"<select id='filter-by'>"+
						"<option>Choose</option>"+
						"<option option='newest'>newest</option>"+
						"<option option='latest'>latest</option>"+
					"</select>	<div class='caret' style='margin-left:-20px;'></div>"
				);
			}else if (nilai=='Type'){
				$('#seleksi').html(
					"<select id='filter-by'>"+
						"<option>Choose</option>"+
						"<option option='all'>all</option>"+
						"<option option='architecture'>architecture</option>"+
						"<option option='interior'>interior</option>"+
					"</select><div class='caret' style='margin-left:-20px;'></div>"
				);	
			}else{
				$('#seleksi').html(
					"<select id='filter-by'>"+
						"<option>Choose</option>"+
						"<option option='process'>process</option>"+
						"<option option='done'>done</option>"+
					"</select><div class='caret' style='margin-left:-20px;'></div>"
				);		
			}
				
				// alert(nilai);
		
		});


		$('#calendar,#kalendar').fullCalendar({
			defaultDate: '<?php echo date('Y-m-d'); ?>',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'Deadline project indonesia',
					start: '2015-03-06'
				},
				{
					title: 'Project process beirut',
					start: '2015-03-07',
					end: '2015-03-10'
				},
			
			]
		});
		
		jQuery('#form-add-prj .title img').click(function(){
			$('#form-add-prj').fadeOut();
		});
		jQuery('.add-prj').click(function(){
			$('#form-add-prj').fadeIn();
			$('.kontener').fadeIn();
		
		});	
		jQuery('.control_toggle,.user-icon').click(function(){	
			// $(this).toggle('moveright');
			jQuery('html').toggleClass('hide_controls');
			jQuery('.about').toggleClass('aboutshow');
			 $('.kontener').toggleClass('close-kon');
		});
		jQuery('.kontener').click(function(){
			  $('html').toggleClass('hide_controls');
			  $( ".about" ).toggleClass('aboutshow');
			  $('.kontener').toggleClass('close-kon');
		});	
		$( window ).scroll(function() {
		// var cal = ($(window).scrollTop()>=$('#calendar').offset().top-250 && $(window).scrollTop()<=$('#calendar').offset().top+10);
		// var list = ($(window).scrollTop()>=$('#project').offset().top-350 && $(window).scrollTop()<=$('#project').offset().top+10);
		var feed = ($(window).scrollTop()>=$('#feed').offset().top-350 && $(window).scrollTop()<=$('#feed').offset().top+10);
		var proj = ($(window).scrollTop()>=$('#project').offset().top-350 && $(window).scrollTop()<=$('#project').offset().top+10);
		var cale = ($(window).scrollTop()>=$('#calndr').offset().top-350 && $(window).scrollTop()<=$('#calndr').offset().top+10);
	
	
		if (feed) $('.mr-feed').fadeIn();
		else $('.mr-feed').fadeOut();
		
		if (proj) $('.mr-pr').fadeIn();
		else $('.mr-pr').fadeOut();
		
		if (cale) $('.mr-cal').fadeIn();
		else $('.mr-cal').fadeOut();
		
	});
	
		
});
	</script>
	