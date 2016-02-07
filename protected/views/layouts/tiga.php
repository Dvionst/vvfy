<?php $idLoaded = ""; ?>
<div id="third">			
		<div class="wrapper-down" id="our-work" >
			<h2>OUR WORK</h2>
			<a title="back to top" class="wadah lm2" href="#first">
			</a>
			
			<ul id="menu-right" class="mr-3">
				<li><a href="#first"><div class="up2"></div></a> </li>
				<li><a   id="mn-prem" href="#premium">PREMIUM</a> </li>
				<li><a style="color:red"  id="mn-our" href="#our-work">Our Work   </a></li>
				<li><a  id="mn-blog" href="#blog">Blog</a></li>
				<li><a  id="mn-team" href="#team">The team </a></li>
			</ul>

		</div>
			<!-- is all architecture & interior -->
			
	<style>
		#loader-img{
			width:100%;
			height:100%;
			position:absolute;
			background:black;
			z-index:110000!important;
			
			
		}
		
		.fill{
			cursor:pointer;
		}
		
	</style>	

<style>

	.horizontal li{
		display:inline-block;
		font-size:17px;
	}
	.horizontal li a{
		color:white;
	}
</style>
<div style="position: relative; min-height: calc(100vh - 80px)" class='tabs'>
    <ul  class='horizontal filtering' style="">
      <li><a style="color:red" class="fill filter-all" >ALL&nbsp;&nbsp;</a></li>
      <li><a class="fill filter-architecture">ARCHITECTURE&nbsp;&nbsp;</a></li>
      <li><a class="fill filter-interior" >INTERIOR&nbsp;&nbsp;</a></li>
    </ul>
	
    <div id='image-all'>
		<div id="loader-img" >
			<center>
			 </br></br></br></br></br></br></br></br></br></br>
			 <img style="width:120px;height:70px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="Loading" /><br>
			 <img style="width:40px;height:40px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" alt="Loading" />
			</center>
		</div>
		<style>
		.lazy{
			background-color:white!important;
		}
		</style>
      	<!--CONTENT-->
			<div class="grid">
			      <div class="grid-sizer"></div>

			      <?php  
			      	$idLoaded = "";
					$data = Yii::app()->db->createCommand()
					->select("*")
					->from('portofolio')
					->where('status = 1')
					->limit(15)
					->order('RAND()')
					->queryAll();
			      	//foreach (Portofolio::model()->findAll() as $fd) { 
					foreach ($data as $fd){	
						if($idLoaded==""){
							$idLoaded=$fd['id'];
						}else{$idLoaded.=",".$fd['id'];}
			      ?>
			      
			      <?php 
			      if ($fd['type']==1){
			        $class = "interior";
			      }else{
			        $class = "architecture";
			      }
			      ?>
			      <div class="grid-item alltabs <?php echo $class." ".$fd['order'] ?>  ">
			        <a class="swipebox" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/<?php echo $fd['id'] ?>.jpg" >
			        <div class="grid-info">
			        	<div class="grid-info-text">
			            	<p><?php echo $fd['nama']; ?></p>
			        	</div>
			        </div>
			         <img class="lazy" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/<?php echo $fd['id'] ?>.jpg" />
			        </a>
			      </div>
			      
			      <?php  }  ?>
			</div>
		
		<script>

		
		</script>
	</div>
	<div title="" class="wadah lm">
		<div id="img-load-more" style="background-image:url('<?php echo Yii::app()->baseUrl ?>/img/reload2.png')"></div>
			Reload More
	</div>
</div>
</div>



	<script>
		var $grid;
		var isIsotope = true;
		var incPost = 4;
		var curOffset = 0;
		var id_loaded = "";

	    function reloadIso(){
	    	if(isIsotope){
		        $grid = $('.grid').isotope({
					layoutMode: 'masonry',
					itemSelector: '.grid-item',
					percentPosition: false,
					packery: {
						gutter: 2
					}
				});
				$grid.isotope("layout");
			}
	    }

		function LoadMorePort(isFirst,IsIncOffset,Except){
			IsIncOffset = typeof IsIncOffset !== 'undefined' ? IsIncOffset : true;
			var Ids = typeof Except !== 'undefined' ? Except : 0;
			$.ajax({
		        'url': '<?php echo Yii::app()->createUrl("portofolio/get"); ?>',
				'async': false,
				'type': "POST",
				'global': false,	
				'data': { 'offset': curOffset,'limit': incPost, 'except': Ids},		        
		        'datatype':'json',
		        // async: false,
		        'beforeSend': function() {
		            // do some loading options
		            //$('#wrapper-reload').fadeOut();
		            //$('.preload-more').fadeIn();
				},
		        'complete': function() {
		            // success alerts
		            //$('.preload-more').fadeOut();
		            //$('#wrapper-reload').fadeIn();
		        },				        
		        'success': function (data) {
		        	var obj = jQuery.parseJSON(data); 
		        	if(isFirst){
		        		//$("#wrapper-post").html($(obj.html));
		        		//$(".btn-load").fadeIn();
		        	}else{
		        		var $item = $(obj.html);	
		        		$grid.append( $item ).isotope( 'appended', $item );
		        		$grid.isotope("layout");

		        		if(obj.remain==0){
		        			$(".wadah").fadeOut();
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


		$(document).ready( function() {
		    
		    reloadIso();

		    $('.filter-all').click(function () {
		        $('.fill').css('color','white');
		        $('.filter-all').css('color','red');
		        $('.grid').isotope({
		            filter:'.alltabs',
		        });         
		        count_lm = 0;               
		    });
		    $('.filter-architecture').click(function () {
		        $('.fill').css('color','white');
		        $('.filter-architecture').css('color','red');
		        $('.architecture').css('width','20%');
		       $('.grid').isotope({
		            filter:'.architecture',
		        });             
		    });
		    
		    $('.filter-interior').click(function () {
		        $('.fill').css('color','white');
		        $('.filter-interior').css('color','red');
		        $('.interior').css('width','20%');
		        // alert('haha');
		        $('.grid').isotope({
		            filter:'.interior',
		        });
		    });
		        // $( window ).scroll(function() {
		    $('.fill').click(function () {
		          $('.img-reload').removeClass("btn-two");
		          $('.img-reload').last().addClass("btn-one");
		      // alert('masda');
		    });

			$('.lm').click(function(e){
				LoadMorePort(false,true,"<?php echo $idLoaded; ?>");
			});

         $('#third *').on("mousemove",function(e){
            $grid.isotope("layout");
         });	

         //$("#our-work").click(function(e){
         //	$grid.isotope("layout");
         //});

		});
	</script>