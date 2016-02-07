<script src="<?php echo Yii::app()->request->baseurl; ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/select2.min.css">

<style type="text/css">

  .loading{
    margin: auto;
    top: 0; left: 0; bottom: 0; right: 0;
    width: 100px;
    height: 100px;
    background: url('<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif');
    background-size: 100% 100%;
    position: absolute;
    z-index: 100;
    display: none;
  }
  .from-team{
    position: relative;
  }

</style>
<div class="loading"></div>

<script type="text/javascript">
	function resetTabs(){
	    $("#content > div").hide(); //Hide all content
	    $("#tabs a").attr("id",""); //Reset id's      
	}

	var myUrl = window.location.href; //get URL
	var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For mywebsite.com/tabs.html#tab2, myUrlTab = #tab2     
	var myUrlTabName = myUrlTab.substring(0,4); // For the above example, myUrlTabName = #tab

	// (function(){
    // $(document).ready(function(){
// });
    $(document).ready(function(){
      $('select').select2();
      $('.swipebox').swipebox();

    
      var tipe_tab = 0;
      // $('#form-waiting').trigger("submit");
      // $('#container-waiting').imagesLoaded()
      // .always( function( instance ) {
      //   console.log('all images loaded');
      // })
      // .done( function( instance ) {
      //     $container = $('#container-waiting');
      //     $container.isotope({
      //       // filter:'.one',
      //       itemSelector : '.wrapper-prj-comment',
      //       // itemSelector : '.alltabs',
      //       masonry: {
      //         columnWidth: 1,
      //         layoutMode: 'masonry'
      //       }
      //     });
      //   // console.log('all images successfully loaded');
      // });
      // .fail( function() {
      //   console.log('all images loaded, at least one is broken');
      // })
      // .progress( function( instance, image ) {
      //   var result = image.isLoaded ? 'loaded' : 'broken';
      //   console.log( 'image is ' + result + ' for ' + image.img.src );
      // });

      // $container = $('#container-waiting');
      // $container.isotope({
      //   // filter:'.one',
      //   itemSelector : '.wrapper-prj-comment',
      //   // itemSelector : '.alltabs',
      //   masonry: {
      //     columnWidth: 1,
      //     layoutMode: 'masonry'
      //   }
      // });
      
      
    $(document).on('change', '#input-edit-image', function(e) {
        // var confirm = confirm('are you sure cjha')
        // alert('changed');
        $(this).hide();
        var img_id = $(this).attr("img_id");
        var img_name = $(this).val();
        // alert(img_id);
        // alert(img_name);
        if (confirm('are you sure to change name ? ')==true){
          $.ajax({
            url: "<?php echo Yii::app()->createUrl("project/Changeimgname")?>",
            cache: false,
            data : "img_id="+img_id+"&img_name="+img_name,
            beforeSend:function(data){
              $('.loader-image').show();
              $('.rename-image').hide();
            },
            success: function(msg){
              $('.rename-image').show();
              $('.loader-image').hide();
              if (msg=='sukses'){
                alert('name has been changed!');
                window.location.reload();
              }
            }
           });
        }

    });

     

/*
*/
    // $container = $('#container-waiting');
    // $container.on('arrangeComplete',function(){
    //   alert('masuk');
    // });
    var count = 0;
    // function reloadWaiting(data){
    //   // $('#container-waiting').html(data);
    //   alert(data);
    //   if (count==0){
    //     $container.imagesLoaded( function(){
    //       // alert('init');
    //         $container.isotope({
    //          // filter:'.one',
    //          itemSelector : '.wrapper-prj-comment',
    //          // itemSelector : '.alltabs',
    //          masonry: {
    //              columnWidth: 1,
    //              layoutMode: 'masonry'
    //          }
    //          });
    //         $('.caption-prj').show();
    //      });
    //   }else{
    //      // alert('filter');
    //       $container.isotope({
    //          filter:"*",
    //       }); 
    //   }
    //   // alert(count);
    // }
    var  output = 0;
    var $container;
    var container_inside;
    var $url;
    // var  

    $(document).on('click', '#refresh-filter', function(e) {
      $('#form-filter').trigger('submit');
    });
    $(document).on('submit', '#form-filter', function(e) {
      e.preventDefault();
      var data = $(this).serialize();

      
      if (tipe_tab==0){ //jika waiting
        $container = $('#tab1');
        container_inside = "#container-waiting";
        $url = "<?php echo Yii::app()->createUrl('project/getwaiting'); ?>";
      }else if (tipe_tab==2){ //jika reject
        container_inside = "#container-reject";
        $container = $('#tab2'); 
        $url = "<?php echo Yii::app()->createUrl('project/getreject'); ?>";
      }else if (tipe_tab==3){ //jika reject
        container_inside = "#container-sent";
        $container = $('#tab3'); 
        $url = "<?php echo Yii::app()->createUrl('project/getsent'); ?>";
      }
        else if (tipe_tab==4){ //jika reject
          container_inside = "#container-client";
          $container = $('#tab4'); 
          $url = "<?php echo Yii::app()->createUrl('project/getclient'); ?>";
      }
      // alert(tipe_tab); 
      // alert($url);
      // alert(data.tipe_tab);
      // if ()
      // console.log(data);
      // alert(JSON.stringify(data));
      $.ajax({
        url : $url,
        data : data,
        cache : true,
        beforeSend:function(data){
          $('.loader-list-image').fadeIn();
          $('#full-screen').fadeIn();
          
          // $container_inside.fadeOut();
        },
        success:function(data){
          // alert(data);
          $('.caption-prj').fadeOut();
           // $('#container-waiting').fadeIn();
           // $('#container-waiting').html(data);
           output = data;
           $container.html(data);
           // alert(data);
           $container.html(data).imagesLoaded().done(function(){
                $(container_inside).isotope({
                   itemSelector : '.from-team',
                   masonry: {
                       columnWidth: 1,
                       layoutMode: 'masonry'
                   }
                 });
            }).fail(function(){
                // do stuff if any one of the images fails to load
            });

        }
      }).done(function(){
          // alert(JSON.stringify(container_inside));
          // var json = jQuery.parseJSON($container_inside);
          // alert(json.selector);
          // if (tipe_tab==0){
            // alert(container_inside);
            // $(container_inside).imagesLoaded( function(){
            //   $(container_inside).isotope({
            //        itemSelector : '.from-team',
            //        masonry: {
            //            columnWidth: 1,
            //            layoutMode: 'masonry'
            //        }
            //      });
               $('#full-screen').fadeOut();
               $('.loader-list-image').fadeOut();
             // });
          // }else if (tipe_tab==2){
          //   // alert('go');
          //    $("#container-reject").imagesLoaded( function(){
          //     $("#container-reject").isotope({
          //          itemSelector : '.wrapper-prj-comment',
          //          masonry: {
          //              columnWidth: 1,
          //              layoutMode: 'masonry'
          //          }
          //        });
          //      $('.loader-list-image').hide();
          //    });
          // }



             $('.caption-prj').show();
      });
  
    });
   $('#form-filter').trigger("submit");
    $(document).on('change', '.filter-project-waiting', function(e) {
        $('#form-filter').submit();
    });


    $(document).on('click', '.img-close', function(e) {
        $('#full-screen').hide();
        $("#detail-progres").hide();
    });
    $(document).on('click', '.action-approve', function(e) {
      var id = $(this).attr('id_pdm');
      var from_team_index = $(this).closest('.from-team').index();
      // alert(id);
      var confirm = window.confirm("are you sure approve this image ?");
      if (confirm==true){       

                 
             $.ajax({
              url: "<?php echo Yii::app()->createUrl("Project/setsent")?>",
              cache: false,
              data : "id="+id,
              beforeSend:function(){
                $('.loader-list-image').fadeIn();
                  $('#full-screen').fadeIn();
              },
              success: function(msg){
                // alert(msg);
                $('.loader-list-image').fadeOut();

                // alert(msg);
                $('.from-team').eq(from_team_index).remove();
                 $container = $('.container-waiting');
                 // $container.imagesLoaded( function(){
                  $container.isotope({
                   // filter:'.one',
                   itemSelector : '.wrapper-prj-comment',
                   // itemSelector : '.alltabs',
                   masonry: {
                       columnWidth: 2,
                       layoutMode: 'masonry'
                   }
                   });
                  $('.caption-prj').show();
                  $('#full-screen').fadeOut();
               // });
                // $container.isotope({
                //   filter:"*",
                // });
              }
            });


            // window.location.assign('<?php echo Yii::app()->createUrl("Project/setsent") ?>&id='+id);
        // alert('ok');
      } 
  
    });
  $(document).on('click', '.rename-image', function(e) {
    $('#input-edit-image').show();
    $('#input-edit-image').focus();
  });
    $(document).on('click', '.action-detail', function(e) {
        e.preventDefault();
        var id = $(this).attr('id_pdm');
         $('#full-screen').show()
        // alert(id);
           $.ajax({
              url: "<?php echo Yii::app()->createUrl("project/progresdetail")?>",
              cache: false,
              data : "id="+id,
              beforeSend:function(){
                $('.loading').show();
              },
              success: function(msg){
                $('.loading').hide();
                // alert(msg);/
                $('#detail-progres').html(msg);
               $('#detail-progres').show()

              }
          });

      });
      $(document).on('click', '.action-delete', function(e) {
        var id = $(this).attr('id_mcd');
        var from_client_index = $(this).closest('.from-client').index();
        // alert(from_client);
        
         // $('#full-screen').show()
        // alert(id);
        if (confirm('Are you sure to delete  ? ')){
           $.ajax({
              url: "<?php echo Yii::app()->createUrl("Comment/setdelete")?>",
              cache: false,
              data : "id="+id,
              beforeSend:function(){
                // $('.loading').show();
              },
              success: function(msg){
                // alert(msg);
                // window.location.reload();
                $('.from-client').eq(from_client_index).hide();
                 $container_client = $('.container-client');
                  $container_client.imagesLoaded( function(){
                      $container_client.isotope({
                       // filter:'.one',
                       itemSelector : '.wrapper-prj-comment',
                       // itemSelector : '.alltabs',
                       masonry: {
                           columnWidth: 1,
                           layoutMode: 'masonry'
                       }
                       });
                      $('.caption-prj').show();
                   });
               //  $('.loading').hide();
               //  // alert(msg);/
               //  $('#detail-progres').html(msg);
               // $('#detail-progres').show()

              }

          });
      }

      });

    $(document).on('click', '.download', function(e) {
      // $('a').click(function(e) {
      e.preventDefault();
      var file = $(this).attr('file');
      // alert(file);
        window.location.href = '<?php echo Yii::app()->request->baseUrl ?>/img/comment/'+file ;  
    });
    $(document).on('click', '.action-reject', function(e) {
      var id = $(this).attr('id_pdm');
      var from_team_index = $(this).closest('.from-team').index();
      var confirm = window.confirm("are you sure approve ?");
      if (confirm==true){            
         $.ajax({
          url: "<?php echo Yii::app()->createUrl("Project/setreject")?>",
          data : "id="+id,
          beforeSend:function(){},
          success: function(msg){
            $('.from-team').eq(from_team_index).hide();
            $container.isotope({
              filter:"*",
            });
          }
        });
    }
    });

	    $("#content > div").hide(); // Initially hide all content
	    $("#tabs li:first a").attr("id","current"); // Activate first tab
	    $("#content > div:first").fadeIn(); // Show first tab content
	    
	    $("#tabs a").on("click",function(e) {
	        e.preventDefault();
          tipe_tab = $(this).attr("value");
          // alert(tipe_tab);
          $('#tipe_tab').val(tipe_tab);
          // alert(tipe_tab);/
        if ($(this).attr("id") == "current"){ //detection for current tab
           // alert('asdas');
            return       
        }
        else{             
  	        resetTabs();
  	        $(this).attr("id","current"); // Activate this
  	        $($(this).attr('name')).fadeIn(); // Show content for current tab
        }
	    });

	    for (i = 1; i <= $("#tabs li").length; i++) {
	      if (myUrlTab == myUrlTabName + i) {
	          resetTabs();
	          $("a[name='"+myUrlTab+"']").attr("id","current"); // Activate url tab
	          $(myUrlTab).fadeIn(); // Show url tab content        
	      }
	    }
    });
	

</script>
<style type="text/css">
.wrapper-prj-comment{
  /*display: none;*/
}
.text-image{
  display: inline;
}
#input-edit-image{
  width: 300px;
  /*height: 20px;*/
  position: absolute;
  display: none;
  border:none;

}
.rename-image{
  width: 20px;
  height: 20px; 
  background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/img/red-edit.png');
  background-size: 100% 100%;
  float: right;
  cursor: pointer;
  position: relative;
  right: -10px;
}
.loader-image{
  width: 20px;
  height: 20px; 
  background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif');
  background-size: 100% 100%;
  float: right;
  cursor: pointer;
  position: relative;
  right: -10px;
  display: none;
}


	#tabs {
  overflow: hidden;
  width: 100%;
  margin: 0;
  padding: 0;
  list-style: none;
}

#tabs li {
  float: left;
  margin: 0 -15px 0 0;
}

#tabs a {
  float: left;
  position: relative;
  padding: 0 40px;
  height: 0; 
  line-height: 30px;
  text-transform: uppercase;
  text-decoration: none;
  color: #fff;
  border-right: 30px solid transparent;
  border-bottom: 30px solid #3D3D3D;
  border-bottom-color: #7779;
  opacity: .3;
  filter: alpha(opacity=30);    
}

#tabs a:hover,
#tabs a:focus {
  border-bottom-color: #2ac7e1;
  opacity: 1;
  filter: alpha(opacity=100);
}

#tabs a:focus {
  outline: 0;
}

#tabs #current {
  z-index: 3;
  border-bottom-color: #3d3d3d;
  opacity: 1;
  filter: alpha(opacity=100);   
}
#tabs a {
  height: 0; 
  line-height: 30px;
  border-right: 30px solid transparent;
  border-bottom: 30px solid #3D3D3D;    
}
.caption-prj{
  display: none;
  height: auto;
  background-color: rgba(1,1,1,0.5);
  width:100% ;
  height:100%;
  opacity: 0;
  padding: 10px;
  /*left: 50%;*/
  /*top: 50%;*/
  bottom: 0px;
  position: absolute;
  box-sizing:border-box;
  color: black;

  transition:opacity 500ms;

}
.caption-prj:hover{
  opacity: 1;
}
.wrapper-prj-comment{
   width:300px;
   height:auto;
  /*width: 50px;*/
}
.btn-choice{
  width: 100%;
  height: auto;
  background-color: yellow;
  margin: 2px;
  padding-top: 2px;
  padding-bottom: 2px;
  box-sizing:border-box;
  padding-left: 5px;
  padding-right: 5px;
  text-align: center;
  font-weight: bolder;
} 
.btn-choice:hover{
  background: black;
  color:white;
  cursor: pointer;

}
.filter-project-waiting{
  margin: 10px;
  border:0;
  text-transform: uppercase;
  border:1px solid black;
}
label{
  font-weight: bolder;
}
.loader-list-image{
  width:100px;
  margin:0 auto;
  display: none;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  z-index: 100000;
}
.wrap-caption-prj{
  position: relative;
}
</style>
<ul id="tabs">
    <li><a value="0" href="#" name="#tab1">Waiting confirm</a></li>
    <li><a value="2" href="#" name="#tab2">Reject </a></li>
    <li><a value="3" href="#" name="#tab3">Sent to client </a></li>
    <li><a value="4" href="#" name="#tab4">From client </a></li>
</ul>
<?php 

$allow = array('png','jpg','gif','PNG','JPG','GIF');

?>
<div id="content"> 
<form id="form-filter">
    <label>
      Client
     <select required name="company" class="filter-project-waiting">
        <?php foreach (Member::model()->findAll() as $key): ?>
          <option value="<?php echo $key->id ?>">

          <?php 
          if ($key->company_name!='')
            echo $key->company_name;
          else
            echo $key->name;


          ?>

          </option>
        <?php endforeach ?>
      </select>
    </label>
    <label>
      Project
    <select required name="project" class="filter-project-waiting">
        <?php foreach (Project::model()->findAll("status = 1") as $key): ?>
          <option value="<?php echo $key->id ?>"><?php echo $key->project_name ?></option>
        <?php endforeach ?>
      </select>
    </label>
     <label>
      Phase
    <select required name="phase" class="filter-project-waiting">
        <?php foreach (Phase::model()->findAll() as $key): ?>
          <option value="<?php echo $key->id ?>"><?php echo $key->name ?></option>
        <?php endforeach ?>
    </select>

    <input type="hidden" name="tipe_tab" id="tipe_tab" value="0">


    </label>
    <label>
      Date
      <input name="date" value="<?php echo date('Y-m-d') ?>" type="date" class="filter-project-waiting" style="border-radius:0;" >
    </label>
    <label>
      <input name="date"  type="button" value="REFRESH" class="filter-project-waiting" id="refresh-filter"  >
    </label>
</form>
  <center>
    <img class="loader-list-image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif">      
  </center>

    <div id="tab1"></div>
    <div id="tab2"></div>
    <div id="tab3"></div>
    <div id="tab4"></div>
</div>
<style type="text/css">
  #detail-progres{
    width: 500;
    height: auto;
    background-color: white;
    position: fixed;
    top: 0px;
    padding: 10px;
    right: 0px;
    border:1px solid black;
    display: none;
    z-index: 100;
    /*position: absolute;*/
    margin: auto;
    top: 0; left: 0; bottom: 0; right: 0;
  }
  #detail-progres table td{
      padding: 10px;
  }
  .img-close{
      width:20px;
      height:auto;
      position: absolute;
      right: 4px;
      cursor: pointer;
  }
</style>
<div id="detail-progres">
</div>