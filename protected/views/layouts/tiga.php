
<div id="third">			
		<div class="wrapper-down" id="our-work" >
			<h2>OUR WORK</h2>
			<div title="" class="wadah lm">
				<div id="img-load-more" style="background-image:url('<?php echo Yii::app()->baseUrl ?>/img/reload2.png')"></div>
					Reload More
			</div>
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
<script>
		// jQuery(document).ready(function($){
			// "use strict";
			// $( '.swipebox' ).swipebox();			
			// port_setup();
			
			// var $container = $('.is_all');
		
			// $container.imagesLoaded( function(){
				// $container.isotope({
					// itemSelector : '.blogpost_preview_fw',
					// // itemSelector : '.alltabs',
					// masonry: {
						// columnWidth: 1,
						// layoutMode: 'masonry'
					// }
				 // });
			 // });
			
			
				// $container.isotope({
					// filter:'.alltabs',
					// masonry: {
						// columnWidth: 1,
						// layoutMode: 'masonry'
					// }
				// });			
			
			 // $('.filter-all').click(function () {
				// $('.fill').css('color','white');
				// $('.filter-all').css('color','#F5B800');
				// $container.isotope({
					// filter:'.alltabs',
				// });				
				// $('.lm').show();
			// });
			// $('.filter-architecture').click(function () {
				// $('.fill').css('color','white');
				// $('.filter-architecture').css('color','#F5B800');
				// $container.isotope({
					// filter:'.architecture',
				// });				
				// $('.lm').show();
			// });
			// $('.filter-interior').click(function () {
				// $('.fill').css('color','white');
				// $('.filter-interior').css('color','#F5B800');
				// $container.isotope({
					// filter:'.f_interior',
				// });				
				// $('.lm').show();
			// });
			// var count_lm = 0;
			// $('.lm').click(function () {
				// if (count_lm==0){
					// $container.isotope({
						// filter:'.architecture,.interior',
					// });
					// count_lm++;
				// }else{
					// $container.isotope({
						// filter:'.blogpost_preview_fw',
					// });
					// $('.lm').css('visibility','hidden');
				// }
			// });


		// });	
		// function port_setup() {
			// "use strict";
			// jQuery('.fw-portPreview-content').each(function(){
				// jQuery(this).css('margin-top', -1*jQuery(this).height()/2+'px');
			// });
		// }	
</script>
<style>

	.horizontal li{
		display:inline-block;
		font-size:17px;
	}
	.horizontal li a{
		color:white;
	}
</style>
<div style="" class='tabs'>
    <ul  class='horizontal filtering' style="">
      <li><a style="color:red" class="fill filter-all" >ALL&nbsp;&nbsp;</a></li>
      <li><a class="fill filter-architecture">ARCHITECTURE&nbsp;&nbsp;</a></li>
      <li><a class="fill filter-interior" >INTERIOR&nbsp;&nbsp;</a></li>
    </ul>
	
    <div id='image-all'>
		<div class="fullscreen_block hided ">
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
        <div class="fs_blog_module fw_port_module2 is_all mt0 ml0">		
		    <div rel="architecture_img"   style="width: calc(40% - 1px);"   class="mobile alltabs blogpost_preview_fw fw-portPreview interior" data-category="architecture" >
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a class="featured_ico_link swipebox architecture_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/1.jpg" data-rel="swipebox[gallery111]"  >
                        	<img  class="lazy" width="540"  data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/1.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                            <div class="name-proj">Africa Office</div>
                           
                        </div>									
                    </div>                    
                </div>
            </div>           
            <div rel="architecture_img" style="width:calc(30% - 1px)"  class="mobile alltabs blogpost_preview_fw fw-portPreview architecture" data-category="architecture">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox architecture_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/2.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/2.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add already_liked">
                              <div class="name-proj">house number fourteen</div>
                        
                        </div>									
                    </div>                    
                </div>
            </div>                              
            <div rel="architecture_img" style="width:calc(30% - 1px)"    class="mobile alltabs blogpost_preview_fw fw-portPreview architecture" data-category="architecture">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox architecture_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/3.jpg" data-rel="swipebox[gallery111]" title="">  
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/3.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                              <div class="name-proj">light house</div>
                        </div>									
                    </div>                    
                </div>
            </div>    			
            <div rel="architecture_img"  style="width:calc(30% - 1px)"  class="mobile alltabs blogpost_preview_fw fw-portPreview architecture" data-category="architecture" >
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox architecture_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/4.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/4.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                              <div class="name-proj">Australian villa</div>
                        </div>									
                    </div>                    
                </div>
            </div>    
			<div rel="architecture_img"  style="width:calc(40% - 1px)" class=" mobile alltabs blogpost_preview_fw fw-portPreview  architecture " data-category="interior">
			 
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/5.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/5.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add already_liked">
                               <div class="name-proj">Villa Bdeir</div>
                        </div>									
                    </div>                    
                </div>
            </div>     
			
            <div  rel="interior_img"  style="width:calc(30% - 1px)"  class="mobile alltabs blogpost_preview_fw fw-portPreview architecture " data-category="interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/6.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/6.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                              <div class="name-proj">Villa Bdeir</div>
                        </div>									
                    </div>                    
                </div>
            </div>                              
		
			<div rel="interior_img" style="width:calc(30% - 1px)" class="mobile alltabs blogpost_preview_fw fw-portPreview interior " data-category="interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/7.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/7.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add already_liked">
                               <div class="name-proj">Wood Studio</div>
                        </div>									
                    </div>                    
                </div>
            </div>          
                         
            <div  style="width:calc(40% - 1px)"  rel="interior_img" class="mobile alltabs blogpost_preview_fw fw-portPreview architecture " data-category="interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/9.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/9.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Kahale</div>
                        </div>									
                    </div>                    
                </div>
            </div>   
  <div rel="interior_img" style="width:calc(30% - 1px)" class="mobile2 alltabs blogpost_preview_fw fw-portPreview interior" data-category="interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/8.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/8.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add already_liked">
                               <div class="name-proj">Confrence Center</div>
                        </div>									
                    </div>                    
                </div>
            </div>               			
		 <div  style="width:calc(70% - 1px)"  rel="interior_img" class="mobile2 alltabs blogpost_preview_fw fw-portPreview architecture" data-category="interior">
			<div class="fw-portPreview-wrapper featured_items pr0 pb0">
				<div class="img_block wrapped_img">
					<a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/10.jpg" data-rel="swipebox[gallery111]" title="">
						<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/10.jpg" alt="" />
						<div class="featured_item_fadder"></div>
					</a>
					<div class="gallery_likes gallery_likes_add">
						   <div class="name-proj">Villa Hitti</div>
					</div>									
				</div>                    
			</div>
		</div>            
		 <div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs blogpost_preview_fw fw-portPreview interior" data-category="interior">
			<div class="fw-portPreview-wrapper featured_items pr0 pb0">
				<div class="img_block wrapped_img">
					<a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/11.jpg" data-rel="swipebox[gallery111]" title="">
						<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/11.jpg" alt="" />
						<div class="featured_item_fadder"></div>
					</a>
					<div class="gallery_likes gallery_likes_add">
						   <div class="name-proj">Apartement</div>
					</div>									
				</div>                    
			</div>
		</div>            
		 <div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs  blogpost_preview_fw fw-portPreview architecture" data-category="interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/12.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/12.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                              <div class="name-proj">Golf Club Villas</div>
                        </div>									
                    </div>                    
                </div>
            </div>  
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs blogpost_preview_fw fw-portPreview architecture" data-category="interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/13.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/13.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                              <div class="name-proj">Capital house</div>
                        </div>									
                    </div>                    
                </div>
            </div>  
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="mobile2 alltabs blogpost_preview_fw fw-portPreview interior" data-category="interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/14.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/14.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Business center</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
<!-- 			
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs blogpost_preview_fw fw-portPreview interior" data-category="interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/15.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/15.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">project name</div>
                        </div>									
                    </div>                    
                </div>
            </div>  
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview interior" data-category="interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/16.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/16.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">project name</div>
                        </div>									
                    </div>                    
                </div>
            </div>  
			-->
			
			<!-- interior -->
			
		
		<!--
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/19.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/19.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                              <div class="name-proj">project name</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/20.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/20.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">project name</div>
                        </div>									
                    </div>                    
                </div>
            </div> 


            

			
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/21.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/21.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">project name</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/22.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/22.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">project name</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
		-->
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/23.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/23.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                              <div class="name-proj">Kahale Interior</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<!--
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/24.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/24.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">project name</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			-->
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/25.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/25.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Unihouse Competition</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/26.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/26.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Consol</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/27.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/27.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Nino Apartement</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/28.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/28.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Edward Sofa</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/29.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/29.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Interior</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/30.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/30.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Consol</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/31.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/31.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Khang's Bedroom</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="mobile2 alltabs2 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/32.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/32.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                              <div class="name-proj">Consol</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<!--
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/33.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/33.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">project name</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			-->
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/34.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/34.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                              <div class="name-proj">Soho</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/35.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/35.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                              <div class="name-proj">Commercial Lounge</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/36.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/36.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Consol</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/37.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/37.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Rishanie</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/38.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/38.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Rishanie</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/39.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/39.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Rishanie</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/40.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/40.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Rishanie</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/41.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/41.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Rishanie</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/42.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/42.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Rishanie</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
				<div  style="width:calc(30% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 architecture">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/45.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/45.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">City Tower</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<!--
			<div  style="width:calc(40% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview loadmore2 interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox " href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/43.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/43.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">project name</div>
                        </div>									
                    </div>                    
                </div>
            </div>
-->			
				<div  style="width:calc(30% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/17.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/17.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">Habis</div>
                        </div>									
                    </div>                    
                </div>
            </div> 
			<!--
			<div  style="width:calc(30% - 1px)"  rel="interior_img" class="alltabs3 blogpost_preview_fw fw-portPreview interior">
                <div class="fw-portPreview-wrapper featured_items pr0 pb0">
                    <div class="img_block wrapped_img">
                        <a    class="featured_ico_link swipebox interior_image" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/18.jpg" data-rel="swipebox[gallery111]" title="">
                        	<img class="lazy" width="540" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/18.jpg" alt="" />
                            <div class="featured_item_fadder"></div>
                        </a>
                        <div class="gallery_likes gallery_likes_add">
                               <div class="name-proj">project name</div>
                        </div>									
                    </div>                    
                </div>
            </div>  
			-->
			
			<!-- hiden image -->
		<div class="clear"></div>     
		</div>

		</div>
		
		<script>

		
		</script>
		<div id="load-more">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/plus-white.png" ></img>
			LOAD MORE
		</div>
		<div style="display:none" id="load-less">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/min-white.png" ></img>
			LOAD LESS
		</div>
		
	</div>
	</div>
</div>
<style>

</style>

<script>
	// $("#team").hide();
	// var totalMember = $(".member").length;
	// var iMember = 0;
	// $(".member").each(function ()
	// {
		// iMember++;
		// alert(iMember);
		// if(iLoaded == totalMember)
		// {
			// $('#team').fadeIn();
		// }
		// $(this).attr('src', $(this).attr("src"));		
	// });

</script>

