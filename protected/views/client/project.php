<style type="text/css">
	.wPaint-menu-icon-name-text{
	display: none!important;
 }
	.wPaint-menu-icon-name-drag div{
		background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/img/drag.png')!important;
		background-size: 18px 19px;
	}
	.wPaint-menu-icon-name-rectangle,
	.wPaint-menu-icon-name-bucket,
	.wPaint-menu-icon-name-ellipse,
	.wPaint-menu-icon-name-loadBg,
	.wPaint-menu-icon-name-save,
	.wPaint-menu-handle,
	.wPaint-menu-icon-name-save
	{
	display: none!important;
	}
	.approve{
		cursor: pointer;
	}
	.wPaint-menu-icon-name-fillStyle{
		display: none!important;
	}
	.wrapper-desc-view .project-loader{
		background-color: rgba(20,20,20,1);
		width: 100%;
		height: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
		z-index: 200;
		background-image:url('<?php echo Yii::app()->request->baseUrl;  ?>/img/ripple.gif');
	    background-repeat: no-repeat;
	    background-size: 50px 50px;
	    background-position: center;
	    display: block;
	}
	.wrapper-desc-view{
		position: relative;
		float: left;
	
	}
	.content-right::-webkit-scrollbar {
	    width: 12px;
	}
	 
	/* Track */
	.content-right::-webkit-scrollbar-track {
	    -webkit-box-shadow: inset 0 0 6px transparent; 
	    -webkit-border-radius: 10px;
	    border-radius: 10px;
	}
	 
	/* Handle */
	.content-right::-webkit-scrollbar-thumb {
	    -webkit-border-radius: 10px;
	    border-radius: 10px;
	    background: red; 
	    -webkit-box-shadow: inset 0 0 6px red; 
	}
	.content-right::-webkit-scrollbar-thumb:window-inactive {
		background: red; 
	}


</style>
	<div class="section" id="project">
		
		<div class="center-user">
		<?php 
		// echo "<pre style='color:white'>";
		// print_r($data);
		// echo "</pre>";
		 ?>
			<div class="choose-project">
				<select class="project project-filter">
					<?php
					$redbox = Yii::app()->db->createCommand()
					->select("*")
					->from(' project p')
					->where("STATUS =1 and id_member = '$id_member' ")
					// ->group("p.id")
					// ->limit('4')
					->queryAll();
					?>
					<option value="all">ALL PROJECT</option>
					<?php foreach ($redbox as $key) {?>
						<option  <?php if ($_REQUEST['project_id']==$key['id']) echo "selected"    ?> value="<?php echo $key['id']; ?>" ><?php echo $key['project_name']; ?></option>
					<?php } ?>
				</select>
				<select style="text-transform:uppercase" name="project_phase" class="project-filter phase">
					<option value="all">ALL PHASE</option>
					<?php foreach(Phase::model()->findAll() as $ps):?>
						<option 
						value="<?php echo $ps->id ?>"
						<?php
						if ($_REQUEST['project_phase']==1)
							echo "selected";
						?>

						><?php echo $ps->name ?></option>
					<?php endforeach ?>
				} 
					?>
				</select>
			</div>

			<div class="wrapper-project-timeline"></div>

			<div class="wrapper-desc-view">
				<div class="project-loader"></div>
				<div class="project-description">	
					<div class="project-label">PROJECTS NAME</div>
					<div class="project-user">USER</div>
					<div class="project-add-comment">description </div>
					<div class="project-comment-content">
						this is comment for the projectthis is comment for the projectthis is comment for the project
						this is comment for the projectthis is comment for the projectthis is comment for the project
					</div>
					<div  class="project-goproject-btn">
						 COMMENT THIS VIEW
					</div>
					<div class="wrapper-red-social">
						<ul>
							<li style="background-image:url('<?php echo Yii::app()->request->baseUrl;  ?>/img/baru/user/red-fb.PNG')"></li>
							<li style="background-image:url('<?php echo Yii::app()->request->baseUrl;  ?>/img/baru/user/red-tw.PNG')"></li>
							<li style="background-image:url('<?php echo Yii::app()->request->baseUrl;  ?>/img/baru/user/red-ins.PNG')"></li>
							<div style="clear:both"></div>						
						</ul>
					</div>
				</div>
				
				<div class="project-view"></div>
				<div style="clear:both"></div>
			</div>
		</div>

	</div>

	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
// function stopNavigate(){    
//     $(window).off('beforeunload');
// }
// function stopReload(event){

// }
var stopReload = function (e) {
    e = e || window.event;

    // // For IE and Firefox prior to version 4
    if (e) {
        e.returnValue = 'Any string';
    }

    // // For Safari
    return 'Any string';
};
// window.onbeforeunload = stopReload;
$(document).ready(function(){
 	// $('a').on('mousedown', stopNavigate);

  //   $('a').on('mouseleave', function () {
  //      $(window).on('beforeunload', function(){
  //             return '  ';
		// 	 });
  //   });
  // var owl = $("#list-views");
  // owl.owlCarousel({
 
  //     autoPlay: 3000, //Set AutoPlay to 3 seconds
 
  //     items : 4,
  //     itemsDesktop : [1199,3],
  //     itemsDesktopSmall : [979,3],
  //     navigation : true
 
  // });
	
  // $(".nav-right").click(function(){
  //   owl.trigger('owl.next');
  // })
  // $(".nav-right").click(function(){
  //   owl.trigger('owl.prev');
  // })
	 // $('a[href*=#]:not([href=#])').click(function() {
	 //    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	 //      var target = $(this.hash);
	 //      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	 //      if (target.length) {
	 //        $('html,body').animate({
	 //          scrollTop: target.offset().top
	 //        }, 1000);
	 //        return false;
	 //      }
	 //    }
  // 	});
	$('.control_toggle').click(function(){
		$('#menu').toggleClass('hide-menu');
	});
	
	$('#menu li a').on('click',function (e) {
		if ($(this).attr("val")!='logout')
			e.preventDefault();
		
		var target = this.hash;
		var $target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top+2
		}, 1000, 'swing', function () {
			window.location.hash = target;
		});
	});
		
	$.fn.wPaint.defaults = {
	  path:            '<?php echo Yii::app()->request->baseurl; ?>/js/paint/',                // set absolute path for images and cursors
	  theme:           'standard classic', // set theme
	  autoScaleImage:  true,               // auto scale images to size of canvas (fg and bg)
	  autoCenterImage: true,               // auto center images (fg and bg, default is left/top corner)
	  menuHandle:      true,               // setting to false will means menus cannot be dragged around
	  menuOrientation: 'vertical',       // menu alignment (horizontal,vertical)
	  menuOffsetLeft:  5,                  // left offset of primary menu
	  menuOffsetTop:   5,                  // top offset of primary menu
	  bg:              'red',               // set bg on init
	  image:           'images/2.jpg',               // set image on init
	  imageStretch:    false,              // stretch smaller images to full canvans dimensions
	  onShapeDown:     null,               // callback for draw down event
	  onShapeMove:     null,               // callback for draw move event
	  onShapeUp:       null                // callback for draw up event
	};
	$.extend($.fn.wPaint.defaults, {
	  mode:        'pencil',  // set mode
	  lineWidth:   '3',       // starting line width
	  fillStyle:   '#FFFFFF', // starting fill style
	  strokeStyle: '#FFFF00'  // start stroke style
	});
	 $( "#image-editor" ).draggable({ handle: ".handle", containment: "body" });
	 $(	"#image-editor").resizable();

	var public_id_comment; 
	var public_vid; 
	var public_vid_url; 
	var number = 0;
	var id_pcm = 0;
	var warna = 'red';
	var no = 0;
	var canvas ;
	// = document.getElementById("image-comment");
	var ctx;
	var elem,context;

	var selected = false;
	var drag = false;
	var imgdata ;
	var lastimg;
	var countcropped = 0;
	var creating = false;


	var $canvas ;
	var canvasOffset; 
	var offsetX;
	var offsetY;
	var scrollX ;
	var scrollY ;
	var $gambar = [];
	var  startX, endX, startY, endY,mouseIsDown;


	var numShapes;
	var shapes;
	var dragIndex;
	var dragging;
	var mouseX;
	var mouseY;
	var dragHoldX;
	var dragHoldY;
	var count = 1;
	var jumlah_project_circle = 0;





	var startX;
	var startY;

	// an array to hold text objects
	var texts = [];

	// this var will hold the index of the hit-selected text
	var selectedText = -1;


	function commentImage(view_id){
		window.onbeforeunload = stopReload;
		// alert(public_vid_url);
		// alert(public_id_comment);
		// $('#overlay').show();
		$('header').hide();
		$('#wrapper-appcomment').fadeIn();
		 // $('#image-comment').remove();
			
			// wPaint
			$('#wrap-image-desc').show();
			$('#tools-brush').show();
			var index = $('.icon-comment').index(this);
			// var id =  public_vid_url;
			// alert(id);
			var url = '<?php echo Yii::app()->request->baseUrl; ?>/img/comment/'+public_vid_url+'';
			// alert(url);  
			$('#sky').attr('src',url);
			var imk = $("#sky");
			// Create dummy image to get real size
			$("<img>").attr("src", $(imk).attr("src")).load(function(){
			
				realWidth = this.width;
				realHeight = this.height;
			// alert(realWidth);
			// alert(realHeight);
			if (realWidth>600){
				realWidth = this.width*0.5;
				realHeight = this.height*0.5;
			}else{
				realWidth = this.width*0.8;
				realHeight = this.height*0.8;

			}
			// alert(realWidth);
			// alert(realHeight);
			// $('#image-comment').attr('width',realWidth);
			//         	$('#image-comment').attr('height',realHeight);
			$('#wPaint').attr('height',realHeight);
			$('#wPaint').attr('width',realWidth);

			$('#wPaint').css('height',realHeight);
			$('#wPaint').css('width',realWidth);

			$('.wPaint-canvas-bg').attr('height',realHeight);
			$('.wPaint-canvas-bg').attr('width',realWidth);


			$('.wPaint-canvas').attr('height',realHeight);
			$('.wPaint-canvas').attr('width',realWidth);

			$('.wPaint-canvas-temp').attr('height',realHeight);
			$('.wPaint-canvas-temp').attr('width',realWidth);

			$('#image-comment').attr('height',realHeight);
			$('#image-comment').attr('width',realWidth);
			});


			$('#full-black').show();
			$('#wrap-comment').show();
			// $('#image-comment').css('background-image','url(.<?php echo Yii::app()->request->baseUrl; ?>/js/paint/img/comment/'+id+')');

			$('#wPaint').css('background-image','url('+url+')');
			// $("#wPaint").wPaint({
			
			// });
			// alert('masuk');
			$('#wPaint').css('background-size','100% 100%');




			// saveImg: saveImg,
			// loadImgBg: loadImgBg
			// loadImgFg: b
			// // alert(url);
			$('#wPaint').wPaint({
				mode : 'pencil',
				// image: 'images/1.jpg',
				// bg: '#2374G'
			// menuOffsetLeft: -35,
			// menuOffsetTop: -50
			});
			$('#wPaint').wPaint('clear');
			$(".wPaint-canvas").attr("id","image-comment");
			// canvas = document.getElementById("image-comment");
			// ctx = canvas.getContext('2d');
			elem = document.getElementById('image-comment');
			context = elem.getContext('2d');
			// $('#wPaint-canvas-bg').css('background-image','url(<?php echo Yii::app()->request->baseUrl; ?>/img/comment/'+id+')');
			window.scrollTo(0, 0);
			default_imgdata = context.getImageData(0, 0, elem.width, elem.height);

			// $("#image-comment").jqScribble();
		// $('#overlay').fadeOut();

	}
	$(document).on("click",".project-load-more",function(e){
		// alert("load more");
		reloadProjectLM();	
		// $('.form-load-project').fadeIn();
	});
	function reloadProjectLM(){
		$.ajax({
			url : '<?php echo Yii::app()->createUrl('Project/Loadmore') ?>',
			// data : 'pid='+pid+'&phid='+phid,
			success : function(data){
				// alert(data)
				$('.project-list ul').html(data);
			     $('.project-list ul').animate({
		          scrollTop: 600
		      	  }, 1100);

				// $('.project-list ul').html(data);
			}
		});
	}
	$(document).on("click",".project-info-btn",function(e){
		// alert("already soon");
		$().toastmessage('showWarningToast', 'ready soon ');
				
	});
	$(document).on("submit","#form-appcomment",function(e){
		e.preventDefault();
		if ( $('#appcomment-text').val().length<10 ){
			// alert("minimum 10 character");
			// alert($('#appcomment-text').val().length);
			$().toastmessage('showErrorToast', 'minimum 10 character');
			exit;
		}
		// alert('masuk');
		number = number + 1;
		$('.full').fadeOut();
		$('.modal-comment').fadeOut();
		// $('.content-right').html(" ");
		$baris  = '<div class="box-comment">'+
			'<div class="header-box">'+
				'<div class="wrapper-user">'+
					'<img class="user" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/user/comment_white.png">'+
				'</div>'+
				'<div class="name">'+no+'</div>'+
				'<div class="date"><?php echo date("Y-m-d H:i:s ") ?></div>'+
				'<div style="clear:left"></div>'+
				'<div class="del-comment">'+
					'<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png">	'+
				'</div>'+
			'</div>'+
			'<div class="content">'+
				$('#appcomment-text').val()
			'</div>'+
			'<div class="separator-horizontal"></div>'+
			'</div>';
		$('.content-right').append($baris);
		$('#appcomment-text').val("");
		// $('.box-comment .content').html($('#appcomment-text').val());
	});
	function findAndRemove(array, property, value) {
	  array.forEach(function(result, index) {
	  	// alert(result[text]);
	  	// alert(index);
	  	// alert(result[property]);
	  	// alert(value)
	    if( parseInt(result[property]) === parseInt(value)) {
	      //Remove from array
	      array.splice(index, 1);
	      // alert('removed');
	    }    
	  });
	}
	$(document).on("click","#wrapper-conversation .header img ",function(e){
		// alert('masuk');
			$('#appcomment-conversation').fadeOut();
	});
	$(document).on("click",".btn-editteam",function(e){
		$('#appcomment-conversation').fadeIn();
		reloadConversation(public_vid);

	});
	$(document).on("click",".del-comment",function(e){
		// alert(JSON.stringify(texts));
		// alert(JSON.stringify(texts));
		var index = $('.del-comment').index(this);
		var value = $('.box-comment .name').eq(index).html();
		if (!confirm("Are you sure ?? ")){exit;}

		$('.box-comment').eq(index).remove();
		removeTagNumber();
		findAndRemove(texts, 'text', value);
		draw();
	
	});

	var default_imgdata;
	$(document).on("click",".project-goproject-btn",function(e){
		commentImage(public_vid);

		// alert(public_vid);
	});
	$(document).on("click",".project-view",function(e){
		commentImage(public_vid);
		// alert(public_vid);
	});
	// alert('masuk');
	// reloadCircleViews();
	var choose_pid = 'all' ;
	var choose_phid= 'all' ;
	reloadCircleViews(choose_pid,choose_phid);
	
	reloadThumbnail(choose_pid,choose_phid);
	$(document).on("change",".project-filter",function(){
			// var total = $('.project-timeline .ul li').length;
			// alert(total);
	});
	$(document).on("change",".choose-project .project",function(){
		choose_pid = $(this).val();
		reloadCircleViews(choose_pid,choose_phid);
		reloadThumbnail(choose_pid,choose_phid);
		
		// alert(total);
	});
	$(document).on("change",".choose-project .phase",function(){
		choose_phid = $(this).val();
		reloadCircleViews(choose_pid,choose_phid);
		reloadThumbnail(choose_pid,choose_phid);
		// alert(choose_phid);
	});
	function reloadThumbnail(pid,phid){
		$.ajax({
			url : '<?php echo Yii::app()->createUrl('ProjectViews/getThumbnail') ?>',
			data : 'pid='+pid+'&phid='+phid,
			success : function(data){
				// alert(data);	
				// alert(data);
				$('.wrapper-listviews').html(data);
				$("#list-views").owlCarousel({
				    items : 4,
				    lazyLoad : true,
				    navigation : true
			  	}); 

			}
		});
	}
	// $('.project-circle').live("load",function() {
	// 	alert('masuk');
	// });
	function reloadCircleViews(pid,phid){
		

		$.ajax({
			url : '<?php echo Yii::app()->createUrl('ProjectViews/getcircle') ?>',
			data : 'pid='+pid+'&phid='+phid,
			beforeSend:function(data){
				$('#project .project-loader').fadeIn();
			},
			success : function(data){
				$('.wrapper-project-timeline').html(data);
					var first_idv = $('.project-timeline ul li .project-circle').eq(0).attr("idviews");
				$('.project-circle').eq(0).css("border","2px solid white");
				public_vid = first_idv;
				getDetailView();
				$('#project .project-loader').fadeOut();
			}
		}).done(function( data ) {
			var total = $('.project-timeline ul li').length;
			// alert(total);
			if (total==0){
				$().toastmessage('showErrorToast', 'Nothing views ');
				$('.wrapper-desc-view').css("visibility","hidden");

				//add animate
				$('.wrapper-project-timeline').hide();	
				$('.wrapper-project-timeline').removeClass('animated bounceInLeft');
				$('.wrapper-project-timeline').show();	
				$('.wrapper-project-timeline').addClass('animated bounceInLeft');
		
				//end of animate
			}else{
				$('.wrapper-desc-view').css("visibility","visible");
			}
		   
	     });
	}

	function reloadConversation(vid){
		$.ajax({
			url : '<?php echo Yii::app()->createUrl('ProjectViews/getconversation') ?>',
			data : 'id='+vid,
			beforeSend : function(data){
				$('#appcomment-fullscreen').fadeIn();
			},
			success : function(data){
				$('#wrapper-conversation').html(data);
				$('#appcomment-fullscreen').fadeOut();
			}
		});
	}


		$(document).on("click",".item img ",function(e){
			// alert('13123');
			var jumlah  = $('.box-comment .content').length;
			var idv = $(this).attr("id_views");
			// public_vid = idv;
			public_vid_url = $(this).attr("file");
			// alert(public_vid_url);
			var url = '<?php echo Yii::app()->request->baseUrl; ?>/img/comment/'+public_vid_url+'';
			// alert(url);  


			

			//tutup pengambilan gambar
			
		
					// alert(public_vid_url);
					// alert(public_vid);
					// alert(public_vid);
			if (public_vid!=idv){
				if (jumlah==0){
					public_vid = idv;
					public_id_comment = $(this).attr("id_comment");
					// alert(public_vid);
						//ambil gambar dari  id sky
					$('#sky').attr('src',url);

					var imk = $("#sky");
					// Create dummy image to get real size
					var realWidth,realHeight;
					$("<img>").attr("src", $(imk).attr("src")).load(function(){
						realWidth = this.width;
						realHeight = this.height;
						
						if (realWidth>600){
							realWidth = this.width*0.5;
							realHeight = this.height*0.5;
						}else{
							realWidth = this.width*0.8;
							realHeight = this.height*0.8;

						}
						
						$('#wPaint').attr('height',realHeight);
						$('#wPaint').attr('width',realWidth);

						$('#wPaint').css('height',realHeight);
						$('#wPaint').css('width',realWidth);

						$('.wPaint-canvas-bg').attr('height',realHeight);
						$('.wPaint-canvas-bg').attr('width',realWidth);


						$('.wPaint-canvas').attr('height',realHeight);
						$('.wPaint-canvas').attr('width',realWidth);

						$('.wPaint-canvas-temp').attr('height',realHeight);
						$('.wPaint-canvas-temp').attr('width',realWidth);

						$('#image-comment').attr('height',realHeight);
						$('#image-comment').attr('width',realWidth);

					});

					//terakhir ambil gambar
						// var url = $(this).attr("file");
						// alert
						public_vid = idv;
						texts = [];
						draw();
						number = 0;
						no = 0;
						$('#wPaint').css("background-image","url(<?php echo $baseurl ?>/img/comment/"+public_vid_url+")");
						$('.content-right .box-comment').remove();
						removeTagNumber();
						// $('#wPaint').wPaint('clear');
						getDetailView();
		

				}else{
					// alert('nasuy');
					if (confirm("will comment be remove ? ")){
						var url = $(this).attr("file");
						var idv = $(this).attr("id_views");
						// alert
						// public_id_comment = idv;
						
						$('#wPaint').css("background-image","url(<?php echo $baseurl ?>/img/comment/"+url+")");
						resetCanvas();

					}
				}
			}
			// alert(id);
		});

	function resetCanvas(){
		texts = [];
		draw();
		number = 0;
		no = 0;
		$('.content-right .box-comment').remove();
		removeTagNumber();
		$('#wPaint').wPaint('clear');
	}
	$(document).on("mouseover",".project-circle",function(e){
		
		var id = $(this).attr('idviews');
		var index = $('.project-circle').index(this)+1;
		// alert(index);
		if (index%5==0){
		     $('.project-timeline').animate({
	          scrollTop: 600
	      	  }, 1100);
		}

		$('.project-circle').css("border","2px solid transparent");
		$(this).css("border","2px solid white");
		public_vid = id;
		public_id_comment = $(this).attr('id_comment');
		getDetailView();
	});
	$(window).scroll(function(){
		var calendar = ($(window).scrollTop()>=$('#calendar').offset().top-200 && $(window).scrollTop()<=$('#calendar').offset().top+10);
		var home = ($(window).scrollTop()>=$('#home').offset().top-200 && $(window).scrollTop()<=$('#home').offset().top+10);
		var project = ($(window).scrollTop()>=$('#project').offset().top-200 && $(window).scrollTop()<=$('#project').offset().top+10);
		var blog = ($(window).scrollTop()>=$('#blog').offset().top-200 && $(window).scrollTop()<=$('#blog').offset().top+10);
		// var dua = ($(window).scrollTop()>=0 && $(window).scrollTop()<=75 );
		// var tiga = ($(window).scrollTop()>=$('#our-work').offset().top-500 && $(window).scrollTop()<=$('#our-work').offset().top+10);
		// var image = ($(window).scrollTop()>=$('#our-work').offset().top-100 );
		if (calendar){
			$('#menu li a[href$="#calendar"]').css("color","red");
			$('#menu').fadeIn();
		}
		else if (home){
			$('#menu li a[href$="#home"]').css("color","red");	
			$('#menu').fadeIn();
		}
		else if (project){
			$('#menu li a[href$="#project"]').css("color","red");	
			$('#menu').fadeIn();

		}
		else if (blog){
			$('#menu li a').css("color","black");
			$('#menu').fadeIn();
			$('#menu li a[href$="#blog"]').css("color","red");	

		}
		else{
			$('#menu li a').css("color","white");
			$('#menu').hide();			
		}

	});

	function getDetailView(){
		// alert()
		$.ajax({
			url : '<?php echo Yii::app()->createUrl('Project/getgambar') ?>',
			data : 'id='+public_vid,
			beforeSend : function(data){
				$('#project .project-loader').fadeIn();
				$('#appcomment-fullscreen').fadeIn();
			},
			success : function(data){
				$('#project .project-loader').fadeOut();
				// $('#project .project-loader').fadeOut();
				$('#appcomment-fullscreen').fadeOut();
				// alert(data);
				var data = jQuery.parseJSON(data);
				// alert(JSON.stringify(data));
				$('.project-view').css("background-image","url(<?php echo $baseurl ?>/img/comment/"+data.name_file+")");
				// alert(data.name_file);
				public_vid_url = data.name_file;
				public_id_comment = data.id_comment;
				// var project = $('.choose-project .project option:selected').text();
				// var phase = $('.choose-project .phase option:selected').text();
				$('.team-working .name .value').html(data.project_name);
				var value_phase =  $('.choose-project .phase option').eq(data.phase).text();
				$('.team-working .phase .value').html(value_phase);

				//untuk coversation
				// $('#wrapper-conversation .header').html("123");
				$('#wrapper-conversation .header .name p').html(data.project_name);
				$('#wrapper-conversation .header .view_name p').html(value_phase);



				$('.project-label').html(data.name_view);
				$('.project-comment-content').html(data.description);
				$('.project-user').html(data.confirmer);
				// alert(data.confirmer);	
				$('#wrapper-appcomment .project-name p').html(data.name_view);
			}
		});
	}

	function getMousePos(canvas, evt) {
	    var rect = canvas.getBoundingClientRect();
	    return {
	        x: evt.clientX - rect.left,
	        y: evt.clientY - rect.top
	    };
	}

	function setCanvas(){
		$canvas = $("#image-comment");
		canvasOffset = $canvas.offset();
		offsetX = canvasOffset.left;
		offsetY = canvasOffset.top;
		scrollX = $canvas.scrollLeft();
		scrollY = $canvas.scrollTop();
	}

	function getPosition(element){
		var xPosition = 0;
		var yPosition = 0;

		while (element) {
		xPosition += (element.offsetLeft - element.scrollLeft + element.clientLeft);
		yPosition += (element.offsetTop - element.scrollTop + element.clientTop);
		element = element.offsetParent;
		}
		return {x : xPosition, y : yPosition};
	}

	function removeTagNumber(){

	  for (var i = 0; i < texts.length; i++) {
        var text = texts[i];
        context.clearRect(text.x-10, text.y-23, 40, 35);
        // context.fillStyle = "";
  	  }
	}

	$(document).on('dblclick','#image-comment',function(e){
	// alert('masuk');
	removeTagNumber();
	imgData = context.getImageData(0, 0, elem.width, elem.height);
	// alert($('#image-comment').attr(''))
	// alert(JSON.stringify(elem));
	
	var elemLeft = elem.offsetLeft;
	var elemTop = elem.offsetTop;
	var elements = [];	
	var parentPosition = getPosition(e.currentTarget);		
	// alert(elemLeft+" "+ele);
	// elem = document.getElementById('image-comment');
	elemLeft = e.offsetLeft;
	elemTop = e.offsetTop;
	var x = e.clientX - parentPosition.x; 
	var y = e.clientY - parentPosition.y ;
	// alert(x+" "+y);
	// console.log(x, y);
	context.font = '28pt Calibri';

	// context.fillStyle =
	 // $.fn.wPaint.exist_color;


	// alert($.fn.wPaint.exist);
	// context.fillText(no,x,y);

	//new
	no++;
	 var text = {
	 	color : $.fn.wPaint.exist_color,
        text: no,
        x: x,
        y: y
    };
    text.width = context.measureText(text.text).width;
    text.height = 50;
    texts.push(text);
    // alert(JSON.stringify(texts));
    setCanvas();
    draw();

	//end new
	// $('#btn-add-comment').trigger('click');
	addCommentNumber();
	$('#appcomment-text').html(" ");
	$('#appcomment-text').focus();

	});
	function addCommentNumber(){
	// $(document).on('click','#btn-add-comment',function(e){
		$('.modal-comment').fadeIn();
		$('.full').fadeIn();
		$('#appcomment-text').focus();
		// var description_comment = 
		// number = number + 1;
		// var row = "<tr class='row-comment'>"+
		// "<td class='description-number' style='width:30px;'>"+number+"</td>"+
		// "<td><textarea class='description'>"
		// +"</textarea></td>"+
		// '</tr>'; 
		// $('#wrap-text-comment').append(row);
	};

	 function drawSquare() {
	    var w = endX - startX;
	    var h = endY - startY;
	    var offsetX = (w < 0) ? w : 0;
	    var offsetY = (h < 0) ? h : 0;
		width = Math.abs(w);
	    height = Math.abs(h);
	    context.beginPath();
	    context.clearRect(0, 0, elemt.width, elemt.height);
	    context.putImageData(imgdata,0,0);
	    context.rect(startX + offsetX, startY + offsetY, width, height);
	    context.lineWidth = 1;
	    context.strokeStyle = 'white';
	    context.stroke();
	}

	function draw() {
		// removeTagNumber();
	    // context.clearRect(0, 0, elem.width, elem.height);
	    // alert(JSON.stringify(texts));
	    for (var i = 0; i < texts.length; i++) {
	        var text = texts[i];
	        context.fillStyle = text.color;
	        context.fillText(text.text, text.x, text.y);
	    }
	    // context.putImageData(imgData, 0, 0);
	    // alert('drawed');
	}

	function reloadCanvas(){
		// removeTagNumber();
		
		context.clearRect(0, 0, elem.width, elem.height);
		context.putImageData(imgData, 0, 0);
		draw();


	}
	$(document).on('click','.wPaint-menu-icon',function(e){
		 $.fn.wPaint.tag_number = false;
	});
	$(document).on('click','.wPaint-menu-icon-name-drag',function(e){
		 $.fn.wPaint.tag_number = true;
		 // remo
		 removeTagNumber();
		 imgData = context.getImageData(0, 0, elem.width, elem.height);
		 draw();

		 // alert('masuk');
	});

		function handleMouseMove(e) {
	    if (selectedText < 0) {
	        return;
	    }

	    // $canvas.css('cursor','move');
	    e.preventDefault();
	    mouseX = parseInt(e.clientX - offsetX);
	    mouseY = parseInt(e.clientY - offsetY);

	    // Put your mousemove stuff here
	    var dx = mouseX - startX;
	    var dy = mouseY - startY;
	    startX = mouseX;
	    startY = mouseY;

	    var text = texts[selectedText];
	    text.x += dx;
	    text.y += dy;
	    context.clearRect(0, 0, elem.width, elem.height);
	    draw();
	}

	// listen for mouse events
	var isDown;
	$(document).on('mousedown','#image-comment',function (e) {
	     if ($.fn.wPaint.tag_number==true && $.fn.wPaint.selectable==false) {
	     	isDown = true;
	     	removeTagNumber();
	     	imgData = context.getImageData(0, 0, elem.width, elem.height);
    		handleMouseDown(e);
	     }else if ($.fn.wPaint.selectable==true && $.fn.wPaint.tag_number==false){
	     	// alert('selectable true');
	        var pos = getMousePos(canvas, eve);
	        startX = endX = pos.x;
	        startY = endY = pos.y;
	        mouseIsDown = 1;
		}

	});
	$(document).on('mousemove','#image-comment',function (e) {
    	 if ($.fn.wPaint.tag_number==true && $.fn.wPaint.selectable==false) {
		     	// removeTagNumber();
	    	handleMouseMove(e);
	    	if (isDown){
		    	reloadCanvas();
	    	}
	     }
	      
	});
	$(document).on('mouseup','#image-comment',function (e) {
	     if ($.fn.wPaint.tag_number==true){
		    // reloadCanvas();

		    handleMouseUp(e);
		    // alert('123');
		    // isDown = false;


		    // alert(isDown);





	   //  draw();
	     }
	     
	    // alert('down');
	    // alert('up');
	});
	$(document).on('mouseout','#image-comment',function (e) {
	     if ($.fn.wPaint.tag_number==true)   
	    	handleMouseOut(e);
	});

	$(document).on('mouseout','.wPaint-menu-icon-name-clear',function (e) {
		draw();
	});
	
	$(document).on('click','#appcomment-close',function (e) {
		// alert('masuk');
		// $('#wPaint').wPaint('image', '<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg');
		var jumlah  = $('.box-comment .content').length;

		if (!jumlah==0){
			if (!confirm("Are you sure cancel comments ? ")){
				exit;
			}
		}
		appcommentClose();
		
		// alert(number);

	});
	function appcommentClose(){
		var now_imgdata =  context.getImageData(0, 0, elem.width, elem.height);
		now_imgdata = JSON.stringify(now_imgdata);
		default_imgdata = JSON.stringify(default_imgdata);
		// alert(JSON.stringify(default_imgdata));
		// alert(default_imgdata);
		if (!finished){
			if (now_imgdata!=default_imgdata){
				// alert('tidak sama');
				if (!confirm(" You are designing comment, Are you sure close ? ")){exit;}
			}
		}

		$('#wrapper-appcomment').fadeOut();
		$('header').fadeIn();
		$('#wPaint').wPaint('clear');

		// $('#wPaint')
		$('.content-right .box-comment').remove();
		texts = [];
		number = 0;
		no = 0;
		$('#menu li a').css("color","white");
		window.scrollTo(0, 0);
		window.onbeforeunload = null;
	}

	var finished = false;

	


	$(document).on('click','.approve',function (e) {

			var jumlah  = $('.box-comment .content').length;
			if (!confirm("Are you sure  ? ")){
				exit;
			}
			var des;
			finished = true;
			var project_name = $('.team-working .name .value').html();
			var project_phase  = $('.team-working .Phase .value').html();
			var view_name  = $('.project-name p').html();

			// alert(project_name+" "+project_phase+" "+view_name);
			var des_no;
			var myarray = [];

			// description
			for(var a=0;a<jumlah;a++){
				nilai = $('.box-comment .content').eq(a).html();
				if (nilai==''){
					alert('Box comment cannot blank');
					exit;
				}
				des_no = $('.box-comment .name').eq(a).html();
				myarray.push({"no":""+des_no+"","value":""+nilai+""});
			}
			// alert(JSON.stringify(myarray));
			// alert(public_id_comment);
			if (jumlah!=0){
				$.ajax({
				url:'<?php echo Yii::app()->createUrl('comment/send') ?>',
				type : "GET",
				data :{
					id_pcm : public_id_comment,
					data : myarray,
					project_name : project_name,
					project_phase : project_phase,
					view_name : view_name
				},
				beforeSend:function(cek){
				$('#appcomment-fullscreen').show();
				// stopNavigate();
				window.onbeforeunload = stopReload;

				},
				success:function(data){
					// alert(data);
				// alert(data);
				UploadPic(data);


				},
				error:function(data){
					$().toastmessage('showWarningToast', ' there are some errors, please repeat your comment ');
					appcommentClose();
				// alert(data);
					// alert(JSON.stringify(data));
				}


				});
			}else{
				// alert('Description cannot blank');
				$().toastmessage('showWarningToast', ' comment number is reqired, please double click on image for add number ');

			}

	});

		function textHittest(x, y, textIndex) {
	    var text = texts[textIndex];
	    // alert(x);
	    // alert(y);
	    // alert(textIndex);
	    // alert(JSON.stringify(text));
	    return (x >= text.x && x <= text.x + text.width && y >= text.y - text.height && y <= text.y);
	}

	// handle mousedown events
	// iterate through texts[] and see if the user
	// mousedown'ed on one of them
	// If yes, set the selectedText to the index of that text
	function handleMouseDown(e) {
	    e.preventDefault();
	    startX = parseInt(e.clientX - offsetX);
	    startY = parseInt(e.clientY - offsetY);
	    // Put your mousedown stuff here
	    for (var i = 0; i < texts.length; i++) {
	        if (textHittest(startX, startY, i)) {
	            selectedText = i;
	        }	
	    }
	    // alert('handle mouse down')

	}

	// done dragging
	function handleMouseUp(e) {
	    e.preventDefault();
	    selectedText = -1;

	}

	// also done dragging
	function handleMouseOut(e) {
	    e.preventDefault();
	    selectedText = -1;
	}
	function UploadPic(id_head) {
		// alert(id_head);
	var canvas = document.getElementById('image-comment');
	var context = canvas.getContext('2d');
	var dataUrl = canvas.toDataURL();
	$.ajax({
	url:'<?php echo Yii::app()->createUrl('comment/saveimage') ?>',
	type : "POST",
	beforeSend : function(){
	},
	data :{
		imgBase64 : dataUrl,
		id : id_head

	},
	error:function(data){
		var datas = JSON.stringify(data);
		$().toastmessage('showWarningToast', ' there are some errors, please repeat your comment '+data);

		// alert("catch error");
	}
	}).done(function(o){
		// window.onbeforeunload = null;
	// close();
		// alert('comment has sent')
		// closeDialog();
		$('#appcomment-fullscreen').fadeOut();
		$('	#full-loader').	fadeOut();

		$('header').show();
		$('#wrapper-appcomment').fadeOut();
		appcommentClose();
		$().toastmessage('showSuccessToast', 'Comment has been sent to the team');

		
		// alert(o);
		});
	}


        // context.fillRect(text.x, text.y-23, 25, 35);
        // alert(text.x+ " "+text.y);
        // context.fillStyle = text.color;
        // context.fillText(text.text, text.x, text.y);
  	  //   for (var i = 0; i < texts.length; i++) {
	    //     var text = texts[i];
	    //     context.fillStyle = text.color;
	    //     context.fillText(text.text, text.x, text.y);
	    // }
  	  // alert('removed');
	
});

</script>