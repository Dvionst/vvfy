
<script type="text/javascript">
  // external js: isotope.pkgd.js, imagesloaded.pkgd.js

   
$(document).ready( function() {
      
    reloadIso();
      // layout Isotope after each image loads
      // $grid.imagesLoaded().progress( function() {
      //   $grid.isotope('layout');
      // }); 

    $('.filter-all').click(function () {
        $('.fill').css('color','white');
        $('.filter-all').css('color','red');
        $('.grid').isotope({
            filter:'.alltabs',
        });         
        $('.lm').show();
        $('.lm').css('visibility','visible');
        count_lm = 0;               
    });
    $('.filter-architecture').click(function () {
        $('.fill').css('color','white');
        $('.filter-architecture').css('color','red');
        $('.architecture').css('width','33%');
       $('.grid').isotope({
            filter:'.architecture',
        });             
        $('.lm').show();
        $('.lm').css('visibility','hidden');
    });
    
    $('.filter-interior').click(function () {
        $('.fill').css('color','white');
        $('.filter-interior').css('color','red');
        $('.interior').css('width','33%');
        // alert('haha');
        $('.grid').isotope({
            filter:'.interior',
        });
    
        $('.lm').show();
    });
        // $( window ).scroll(function() {
    $('.fill').click(function () {
          $('.img-reload').removeClass("btn-two");
          $('.img-reload').last().addClass("btn-one");
      // alert('masda');
    });
      // reloadIso();
        function reloadIso(){
          // $('#container')
           // alert('masuk');
          var width_grid = $('.grid').width();
           var $grid = $('.grid').isotope({
              itemSelector: '.grid-item',
              percentPosition: true,
              masonry: {
                // columnWidth: '.grid-sizer'
              }
            });
        }


          $('.btn-link').on("mousemove",function(e){
              reloadIso();
          });

         $('#portofolio *').on("mousemove",function(e){
            // alert('masuk');
            reloadIso();
            // var $grid = $('.grid').isotope({
            // itemSelector: '.grid-item',
            // percentPosition: true,
            // masonry: {
            //   columnWidth: '.grid-sizer'
            // }
            // });
         });

        // });
         $('.grid').isotope({
            filter:'.one',
        });

        // $(document).on("click",".btn-one",function(e){
        $(document).on("click",".btn-one",function(e){
             $('.grid').isotope({
              filter:'.one,.two',
             });

             $(this).removeClass("btn-one");
             $(this).last().addClass("btn-two");
             reloadIso();
         });
         $(document).on("click",".btn-two",function(e){

             $('.grid').isotope({
              filter:'.one,.two,.three',
             });

             $(this).removeClass("btn-two");
             $(this).last().addClass("btn-one");
             reloadIso();
         });



});

</script>
<div id="portofolio">
    <div class="porto-filter">
        <ul>
          <li><a style="color:red" class="fill filter-all" >ALL</a></li>
          <li><a class="fill filter-architecture">ARCHITECTURE</a></li>
          <li><a class="fill filter-interior" >INTERIOR</a></li>
        </ul>
    </div>

<div class="grid">
      <div class="grid-sizer"></div>

      <?php  foreach (Portofolio::model()->findAll() as $fd) { ?>
      
      <?php 
      if ($fd->type==1){
        $class = "interior";
      }else{
        $class = "architecture";
      }
      ?>
      <div class="grid-item alltabs <?php echo $class." ".$fd->order ?>  ">
        <a class="swipebox" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/<?php echo $fd->id ?>.jpg" >
        <div class="grid-info">
            <p><?php echo $fd->nama; ?></p>
        </div>
         <img class="lazy" data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/<?php echo $fd->id ?>.jpg" />
        </a>
      </div>
      
      <?php  }  ?>
      

      <div id="wrapper-reload" class="btn-one">
        <span class="helper"></span>
          <label>
             <img class="img-reload" style="" src="<?php echo Yii::app()->request->baseUrl ?>/img/reload2.png">
             <P class="lblreload">RELOAD MORE</P>
          </label>
      </div>
</div>

    <!-- <div class="grid">
        <div class="grid-item">
            <img  class=" img-porto"  data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/1.jpg" alt="" />
        </div>
        <div class="grid-item">    
            <img  class=" img-porto"  data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/2.jpg" alt="" />
        </div>
        <div class="grid-item">    
            <img  class=" img-porto"  data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/3.jpg" alt="" />
        </div>
         <div class="grid-item">    
            <img  class=" img-porto"  data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/3.jpg" alt="" />
        </div>
         <div class="grid-item">    
            <img  class=" img-porto"  data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/3.jpg" alt="" />
        </div>
        <div class="grid-item">    
            <img  class=" img-porto"  data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/2.jpg" alt="" />
        </div>
        <div class="grid-item">    
            <img  class=" img-porto"  data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/2.jpg" alt="" />
        </div> -->
    </div>
    
</div>
