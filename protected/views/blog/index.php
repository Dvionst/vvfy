<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/social/style.css">

<div class="slider" style="width:100%;height:420px;position:relative;padding-bottom:0px" >
		<div id="menu-timeline" class="menu-pager">
			<ul>
				<li><a style="color:red" class="btn-link" href="#blog1" data-slide="1"><div style="margin-top:0px" class="menu-circle"></div>BLOG 1</a>  </li>
				<li><a class="btn-link" href="#blog2" data-slide="2"><div class="menu-circle"></div>BLOG 2</a></li>
				<li><a class="btn-link" href="#blog3" data-slide="3"><div class="menu-circle"></div>BLOG 3</a></li>
				<li><a class="btn-link" href="#blog4" data-slide="4"><div class="menu-circle"></div>BLOG 4</a></li>
			</ul>
		</div>
		<?php 
			if(isset($_REQUEST['search'])){
				$search=$_REQUEST['search'];
			}


			$featured4 = Yii::app()->db->createCommand()
			->select("*")
			->from('blog')
			->limit(4)
			->order('datetime desc')
			->queryAll();
			$urutan=1;
		?>
		<ul id="demo1">
			<?php	
				foreach ($featured4 as $d):
			?>
			<li>
				<a href="#slide<?php echo $urutan;?>">
					<?php 
						$filename =Yii::app()->basePath."/../img/blog/$d[image]";
						// echo $filename;
						if ((file_exists($filename))&&($d['image']!="")) {?>
							<img src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/<?php echo $d['image'] ?>"  alt="This is caption 1 <a href='#link'>Even with links!</a>">
						<?
						} else {?>
							<img src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/notfound.jpg"  alt="This is caption 1 <a href='#link'>Even with links!</a>">
					<?php	
						}	
					?>
				</a>
				<div class="slide-description">
					<div class="label-feature">
						FEATURED BLOG
						<div class="line-label-feature"></div>
					</div>
					<div class="title-feature">
						<?php echo $d['title']?>
					</div>
					<div class="sinopsis-feature">
						<p>
						<?php
							$string = strip_tags($d['content']);
							if (strlen($string) > 300) {
							    // truncate string
							    $stringCut = substr($string, 0, 300);
							    // make sure it ends in a word so assassinate doesn't become ass...
							    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
							}
							echo $string;
						?>
						</p>
						<p class="read-more-feature"><a target="_blank" style="color:#DF1B31" href="<?php echo Yii::app()->createAbsoluteUrl("blog/view",array("id"=>$d['id']));?>">READ MORE</a></p>
					</div>
				</div>
			</li>
			<?php endforeach ?>
		</ul>
	</div>		
	<div id="blog-search">
		<div class="wrapper-search">	
			<input class="input-search-2" type="text" placeholder="SEARCH BLOG..." value="<?php echo $search?>">
			<div class="submit"></div>
		</div>
	</div>
	<div id="wrapper-post">
		<!--CONTENT AREA-->
	</div>
	<div id="wrapper-reload">
		<div class="btn-load">
				LOAD MORE
		</div>
		<div class="preload-more" style="background-image:url('<?php echo Yii::app()->baseUrl;?>/img/ajax-loader-2.gif')"></div>
	</div>


			<!-- <div id="pagination">
			<ul>
				<li class="active">1</li>
				<li>2</li>
				<li>3</li>
				<li>...</li>
				<li>></li>
				<li>>></li>
			</ul>
		</div> -->
	<div id="wrapper-subscribe">
		<div id="all-black">
			<div class="label-feature label-about">ABOUT</div>
			<div class="description-about">
				<p>
					Except for low-level font hinting and proof-of-concept demos like the one Andrew Johnson published earlier this week, the glyph shapes in modern fonts are restricted to a single, static configuration. Any variation in weight, width, stroke contrast, etc.—no matter how subtle—requires separate font files. This concept may not seem so bad in the realm of print design, where layouts are also static. On the web, though, this limitation is what I refer to as the “glass floor” of responsive typography: while higher-level typographic variables like margins, line spacing, and font size can adjust dynamically to each reader’s viewing environment, that flexibility disappears for lower-level variables that are defined within the font. Each glyph is like an ice cube floating in a sea of otherwise fluid design.
				</p>
			</div>
		</div>
		<div id="all-transparent">
			<div id="form-subscribe">
				<div style="margin-left:0px;" class="label-feature label-about">SUBSCRIBE</div>
				<form>
					<input class="input-subscribe" placeholder="your email">		
					<input class="submit-subscribe" type="submit" value="subscribe">
				</form>			
			<div>
		</div>
	</div>
	

	<script>



	// jQuery(document).ready(function(){
	//   jQuery('#demo1').slippry();
	//   // reload();

	// });
	// Utility function for this set of functions
	var quick;
	var $container;	
	const incPost = 3;
	var curOffset = 0;
	var category = '<?php echo $_GET["category"]?>';

	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarLimit = 400;

	function hasScrolled() {
	    var st = $(this).scrollTop();

	    // Make sure they scroll more than delta
	    if(Math.abs(lastScrollTop - st) <= delta)
	        return;
	    
	    // If they scrolled down and are past the navbar, add class .nav-up.
	    // This is necessary so you never see what is "behind" the navbar.
	    if (st > lastScrollTop && st > navbarLimit){
	        // Scroll Down
	        $('header').removeClass('nav-down').addClass('nav-up');
	    } else {
	        // Scroll Up
	        if(st + $(window).height() < $(document).height()) {
	            $('header').removeClass('nav-up').addClass('nav-down');
	        }
    	}
    	lastScrollTop = st;
	}

	$(window).scroll(function(event){
		didScroll = true;
	});

	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 250);	

	// debounce so filtering doesn't happen every millisecond
	function debounce( fn, threshold ) {
	  var timeout;
	  return function debounced() {
	    if ( timeout ) {
	      clearTimeout( timeout );
	    }
	    function delayed() {
	      fn();
	      timeout = null;
	    }
	    timeout = setTimeout( delayed, threshold || 100 );
	  }
	}

	//reload isotope
	function reload(){
		$container = $('#wrapper-post').isotope({
			layoutMode: 'packery',
			itemSelector: '.post',
			percentPosition: true,
			filter: function() {
		      return quick ? $(this).text().match( quick ) : true;
		    }
		});


		$container.imagesLoaded().progress( function() {
		  //$container.isotope( 'stamp', $container.find('#wrapper-reload') );
		  $container.isotope('layout');
		});
	}

	function LoadMorePost(isFirst,IsIncOffset){
		IsIncOffset = typeof IsIncOffset !== 'undefined' ? IsIncOffset : true;
		$.ajax({
	        'url': '<?php echo Yii::app()->createUrl("blog/post"); ?>',
			'async': false,
			'type': "POST",
			'global': false,	
			'data': { 'offset': curOffset,'limit': incPost, 'category': category},		        
	        'datatype':'json',
	        // async: false,
	        'beforeSend': function() {
	            // do some loading options
	            $('#wrapper-reload').fadeOut();
	            $('.preload-more').fadeIn();
			},
	        'complete': function() {
	            // success alerts
	            $('.preload-more').fadeOut();
	            $('#wrapper-reload').fadeIn();
	        },				        
	        'success': function (data) {
	        	var obj = jQuery.parseJSON(data); 
	        	if(isFirst){
	        		$("#wrapper-post").html($(obj.html));
	        		$(".btn-load").fadeIn();
	        	}else{
	        		var $item = $(obj.html);	
	        		$container.append( $item ).isotope( 'appended', $item );
	        		$container.isotope("layout");
	        		if(obj.remain==0){
	        			$(".btn-load").fadeOut();
	        		}
	        	}

	        },
	        'error': function (data) {
	        	alert(data.responseText);
	            alert("Error occured. Try again later");
	        },
	    });		
		if(IsIncOffset){
	    	curOffset = curOffset + incPost;
		}
	}


	$(document).ready(function() {
		if(category!=""){
			$('.all').removeClass('active');
		    $('.'+category).addClass('active');
		}

		//load first
		LoadMorePost(true);

		var thumbs = $('#demo1').slippry();
		reload();

		//pasang event pencarian
		var $quicksearch = $('.input-search-2').keyup( debounce( function() {
			quick = new RegExp( $quicksearch.val(), 'gi' );
			$container.isotope();
		}, 200 ) );

		$(document).on('click','.btn-link',function(){
			
			$('.btn-link').css('color','#D6D4D5');
			$('.menu-circle').css("background","#D6D4D5");

			var index = $('.btn-link').index(this);
			$('.btn-link').eq(index).css('color','red');
			$('.menu-circle').eq(index).css("background","red");

			thumbs.goToSlide($(this).data('slide'));
		});

		//filter menu
		$('div#menu li #a2').click(function(e)
		    {
		    	e.preventDefault();
		        $('div#menu li #a2').removeClass('active');
		        $(e.currentTarget).addClass('active');
		        curOffset=0;
		        if($(this).html()=='ALL'){
		        	category = '';
		        	LoadMorePost(true,false);
		        	//quick = new RegExp( '', 'gi' );
		        }else{
		        	category = $(this).html();
		        	LoadMorePost(true,false);
		        	//quick = new RegExp( $(this).html(), 'gi' );
		        	//$container.isotope({ filter: '.'+$(this).html() });
		        }
		        $container.isotope( 'reloadItems' ).isotope();
		        
		        //alert($(this).html());
		    }
		);		

		$('#wrapper-reload').click(function(e){
			LoadMorePost(false);
		});

		//event on enter
		$('.input-search-2').bind("enterKey",function(e){
		
		 //   	$('#wrapper-post').isotope({ filter: function() {
			//   var name = $(this).find('.title').text();
			//   return name.match(/$Cara$/);
			// } })
		});

		$('.input-search-2').keyup(function(e){
		    if(e.keyCode == 13)
		    {
		        $(this).trigger("enterKey");
		    }
		});

		$(".input-search-2").trigger('keyup');

		$(".social-provider-icon").click(function(event) {
			event.preventDefault();
			window.open($(this).attr("href"), "Sharing", "directories=0,height=600,width=800,location=0,menubar=0,status=0,titlebar=0,toolbar=0");
		});

		$(".social-provider-icon-2").click(function(event) {
			event.preventDefault();
			window.open($(this).attr("href"), "Sharing", "directories=0,height=600,width=800,location=0,menubar=0,status=0,titlebar=0,toolbar=0");
		});
	});
	</script>


	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slipry/dist/slippry.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/isotope-docs.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/packery-mode.pkgd.min.js"></script>
