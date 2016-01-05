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
    $(document).ready(function(){

      $container = $('#container-waiting');
      $container.isotope({
        // filter:'.one',
        itemSelector : '.wrapper-prj-comment',
        // itemSelector : '.alltabs',
        masonry: {
          columnWidth: 1,
          layoutMode: 'masonry'
        }
      });
      
      
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
    $container = $('#container-waiting');
    $container.on('arrangeComplete',function(){
      alert('masuk');
    });
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
    $(document).on('submit', '#form-waiting', function(e) {
      e.preventDefault();
      
      var data = $(this).serialize();
      console.log(data);

      // $.post("<?php echo Yii::app()->createUrl('project/getwaiting'); ?>",data)
      // .beforeSend(function(){
      //     $('.loader-list-image').show();
      // })
      // .done(function(d){
      //   $('#container-waiting').replaceWith(d);
      // })
      // .always(function(){
      //    // $container.isotope({
      //    //     filter:"*",
      //    //  });
      //   $co = $('#container-waiting');
      //   $co.isotope({
      //   // filter:'.one',
      //   itemSelector : '.wrapper-prj-comment',
      //   // itemSelector : '.alltabs',
      //     masonry: {
      //       columnWidth: 1,
      //       layoutMode: 'masonry'
      //     }
      //   });

      // });



     
      $.ajax({
        url : "<?php echo Yii::app()->createUrl('project/getwaiting'); ?>",
        data : data,
        // cache : false,
        beforeSend:function(data){
          $('.loader-list-image').show();
           $('#container-waiting').fadeOut();
        },
        success:function(data){
           $('.loader-list-image').hide();
           $('#container-waiting').fadeIn();
           // $('#container-waiting').html(data);
            $('#container-waiting').replaceWith(data);
           output = data;

        }
      }).always(function(){
       
           // $container.imagesLoaded( function(){
          // alert('always');
            $('#container-waiting').isotope({
               // filter:'.one',
               itemSelector : '.from-team',
               // itemSelector : '.alltabs',
               // masonry: {
               //     columnWidth: 1,
               //     layoutMode: 'masonry'
               // }
             });
             $('.caption-prj').show();
            // $('.caption-prj').show();
         // });
      });
  
    });
    $(document).on('change', '.filter-project-waiting', function(e) {
        // alert($(this).val());

        $('#form-waiting').submit();
        // if ($(this).val()!='*'){       
        //    $container.isotope({
        //      filter:"."+$(this).val()+"",
        //   }); 
        // }
        // else{
        //    $container.isotope({
        //      filter:"*",
        //   });
        // }

    });


    $(document).on('click', '#full-screen,.img-close', function(e) {
        $('#full-screen').hide();
        $("#detail-progres").hide();
    });
    $(document).on('click', '.action-approve', function(e) {
      var id = $(this).attr('id_pdm');
      var from_team_index = $(this).closest('.from-team').index();
      // alert(id);
      var confirm = window.confirm("are you sure approve ?");
      if (confirm==true){            
             $.ajax({
              url: "<?php echo Yii::app()->createUrl("Project/setsent")?>",
              cache: false,
              data : "id="+id,
              beforeSend:function(){
                $('.loader-list-image').show();
              },
              success: function(msg){
                $('.loader-list-image').hide();
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
      // var id = $(this).attr('id_pdm');
      // var confirm = window.confirm("are you sure reject ?");
      // if (confirm==true){
      //    window.location.assign('<?php echo Yii::app()->createUrl("Project/setreject") ?>&id='+id);
   
      // } 
      var id = $(this).attr('id_pdm');
      var from_team_index = $(this).closest('.from-team').index();
      // alert(id);
      var confirm = window.confirm("are you sure approve ?");
      if (confirm==true){            
             $.ajax({
              url: "<?php echo Yii::app()->createUrl("Project/setreject")?>",
              cache: false,
              data : "id="+id,
              beforeSend:function(){
                // $('.loading').show();
              },
              success: function(msg){
                // alert(msg);
                $('.from-team').eq(from_team_index).hide();
                $container.isotope({
                  filter:"*",
                });
              }
            });


            // window.location.assign('<?php echo Yii::app()->createUrl("Project/setsent") ?>&id='+id);
        // alert('ok');
      }


  
    });

	    $("#content > div").hide(); // Initially hide all content
	    $("#tabs li:first a").attr("id","current"); // Activate first tab
	    $("#content > div:first").fadeIn(); // Show first tab content
	    
	    $("#tabs a").on("click",function(e) {
	        e.preventDefault();

      $container = $('.container-waiting');
      $container.imagesLoaded( function(){
          $container.isotope({
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



           $container_reject = $('.container-reject');
            $container_reject.imagesLoaded( function(){
            $container_reject.isotope({
             // filter:'.one',
             itemSelector : '.wrapper-prj-comment',
             // itemSelector : '.alltabs',
             masonry: {
                 columnWidth: 1,
                 layoutMode: 'masonry'
             }
             });
            // $('#content').show();
         });


         $container_sent = $('.container-sent');
            $container_sent.imagesLoaded( function(){
            $container_sent.isotope({
             // filter:'.one',
             itemSelector : '.wrapper-prj-comment',
             // itemSelector : '.alltabs',
             masonry: {
                 columnWidth: 1,
                 layoutMode: 'masonry'
             }
             });
            // $('#content').show();
         }); 

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

           // $container_reject.isotope('reloadItems');
           // $container_sent.isotope();
           // $container_.isotope('reloadItems');
       



            // alert('masuj');
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
</style>
<ul id="tabs">
    <li><a href="#" name="#tab1">Waiting confirm</a></li>
    <li><a href="#" name="#tab2">Reject </a></li>
    <li><a href="#" name="#tab3">Sent to client </a></li>
    <li><a href="#" name="#tab4">From client </a></li>
</ul>
<?php 

$allow = array('png','jpg','gif','PNG','JPG','GIF');

?>
<div id="content"> 
    <div id="tab1">

    <form id="form-waiting">
      <label>
        Client
       <select name="company" class="filter-project-waiting">
          <?php foreach (Member::model()->findAll() as $key): ?>
            <option value="<?php echo $key->id ?>"><?php echo $key->company_name ?></option>
          <?php endforeach ?>
        </select>
      </label>
      <label>
        Project
      <select name="project" class="filter-project-waiting">
          <?php foreach (Project::model()->findAll("status = 1") as $key): ?>
            <option value="<?php echo $key->id ?>"><?php echo $key->project_name ?></option>
          <?php endforeach ?>
        </select>
      </label>
       <label>
        Phase
      <select name="phase" class="filter-project-waiting">
          <?php foreach (Phase::model()->findAll() as $key): ?>
            <option value="<?php echo $key->id ?>"><?php echo $key->name ?></option>
          <?php endforeach ?>
        </select>
      </label>
      <label>
        Date
        <input name="date" value="<?php echo date('Y-m-d') ?>" type="date" class="filter-project-waiting" style="border-radius:0;" >
      </label>
    </form>



        <center>
          <img class="loader-list-image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif">      
        </center>
        <div id="container-waiting" class="container-waiting">

          <?php 
  
             $sql = "
            SELECT pdm.id as id_pdm,ph.datetime, ph.project_id, pdm.name_file,p.project_name pn
            FROM
            project p 
            INNER JOIN  project_comment_head AS ph
            ON 
            p.id = ph.project_id
            INNER JOIN
            project_comment AS pdm
            ON 
            pdm.head_project_id = ph.id and 
            pdm.status = 0
            ";
            $comment = Yii::app()->db->createCommand($sql)->queryAll();
            foreach ($comment as $key) {
              $path = Yii::app()->baseurl."/img/comment/$key[name_file]";
              $ext = pathinfo($path, PATHINFO_EXTENSION);
              if (in_array($ext,$allow )){
                ?>
                    <?php
                     $class = str_replace(" ","_",$key['pn']); ?>
                    <div  class="from-team wrapper-prj-comment <?php echo $class ?>">
                      <!-- <a class="swipebox" href="<?php echo Yii::app()->baseurl; ?>/img/comment/<?php echo $key[name_file]; ?>"> -->
                          <div class="caption-prj">
                              <div id_pdm="<?php echo $key[id_pdm] ?>" class="btn-choice action-approve ">Approve & send</div>
                              <div id_pdm="<?php echo $key[id_pdm] ?>"  class="btn-choice action-reject">Reject </div>
                              <a  file="<?php echo $key[name_file]  ?>" class="download"><div class="btn-choice  action-download">Download </div></a>
                              <div  id_pdm="<?php echo $key[id_pdm] ?>" class="btn-choice action-detail">Details </div>
                              <!-- <a  file="<?php echo $key[name_file]  ?>" class="download"><div class="btn-choice  action-download">Delete </div></a> -->
            
                          </div>
                        
                          <img class="prj-comment" src="<?php echo Yii::app()->baseurl; ?>/img/comment/<?php echo $key[name_file]; ?>" style="width:100%;height:auto"> 
                      <!-- </a> -->
                    </div>
                <?php 
                }
            }
            ?>
        </div>


    </div>
    <div id="tab2">
       <div class="container-reject">
            <?php 
            $sql = " 
                    SELECT pdm.id as id_pdm,ph.datetime, ph.project_id, pdm.name_file,p.project_name pn
                    FROM
                    project p INNER JOIN  project_comment_head AS ph
                    ON p.id = ph.project_id

                    INNER JOIN
                    project_comment AS pdm
                    ON pdm.head_project_id = ph.id

                    and pdm.status = 2
                ";
            // echo $sql;
            $comment = Yii::app()->db->createCommand($sql)->queryAll();
            foreach ($comment as $key) {
                $path = Yii::app()->baseurl."/img/comment/$key[name_file]";
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                // if ($ext=='png' || $ex)
                if (in_array($ext,$allow )){
                ?>
                    <div class="wrapper-prj-comment">
                      <a class="swipebox" href="<?php echo Yii::app()->baseurl; ?>/img/comment/<?php echo $key[name_file]; ?>">
                         <!--  <div class="caption-prj">
                              <div class="btn-choice action-approve ">Approve & send</div>
                              <div class="btn-choice action-reject">Reject </div>
                              <div class="btn-choice action-full">Full Screen </div>
                              <div class="btn-choice action-full">Details </div>
                          </div> -->
                          <img class="prj-comment" src="<?php echo Yii::app()->baseurl; ?>/img/comment/<?php echo $key[name_file]; ?>" style="width:100%;height:auto"> 
                      </a>
                    </div>
                <?php 
                }
            }
            ?>
            
        </div>

    </div>
    <div id="tab3">
       <div class="container-sent">
            <?php 
            $sql = " 
                  SELECT pdm.id as id_pdm,ph.datetime, ph.project_id, pdm.name_file,p.project_name pn
                    FROM
                    project p INNER JOIN  project_comment_head AS ph
                    ON p.id = ph.project_id

                    INNER JOIN
                    project_comment AS pdm
                    ON pdm.head_project_id = ph.id

                    and pdm.status = 1

                    order by ph.datetime desc
                    ";
                    // echo $sql;
            $comment = Yii::app()->db->createCommand($sql)->queryAll();
            foreach ($comment as $key) {
                 $path = Yii::app()->baseurl."/img/comment/$key[name_file]";
$ext = pathinfo($path, PATHINFO_EXTENSION);
                // if ($ext=='png' || $ex)
                if (in_array($ext,$allow )){
                ?>

                    <div class="wrapper-prj-comment">
                      <a class="swipebox" href="<?php echo Yii::app()->baseurl; ?>/img/comment/<?php echo $key[name_file]; ?>">
                          <div class="caption-prj">
                              <div id_pdm="<?php echo $key[id_pdm] ?>" class="btn-choice action-detail">Details </div>
                          </div>
                          <img class="prj-comment" src="<?php echo Yii::app()->baseurl; ?>/img/comment/<?php echo $key[name_file]; ?>" style="width:100%;height:auto"> 
                      </a>
                    </div>


                <?php 
                }
            }
            ?>
            
        </div>

    </div>
    <div id="tab4">
           <select class="filter-project-client">
        <option value="*">All Project</option>
        <?php foreach (Project::model()->findAll("status = 1") as $key): ?>
          <option value="<?php echo str_replace(" ", "_", $key->project_name) ?>"><?php echo $key->project_name ?></option>
        <?php endforeach ?>
      </select>
        <div class="container-client">
            <?php 
            $sql = "
                    SELECT mcd.id as id_mcd ,mch.id AS id, pm.name_file file
                    FROM
                    project_comment pm INNER JOIN  member_comment_head AS mch
                    ON pm.id = mch.project_comment_id
                    INNER JOIN
                    member_comment_detail AS mcd
                    ON mch.id = mcd.head_id
                    and  mcd.status = 0
                    GROUP BY mch.id
                    ORDER BY mch.id DESC

                    ";
            $comment = Yii::app()->db->createCommand($sql)->queryAll();
            foreach ($comment as $key) {
               $path = Yii::app()->baseurl."/img/revisi/$key[id].png";
               $url =Yii::app()->basePath."/../img/revisi/$key[id].png";
              $ext = pathinfo($path, PATHINFO_EXTENSION);
              $available = file_exists($url);
               
                // if ($ext=='png' || $ex)
                if (in_array($ext,$allow )){
                ?>
                    <?php $class = str_replace(" ","_",$key['pn']); ?>
                    <div  class="from-client wrapper-prj-comment <?php echo $class ?>">
                      <!-- <a class="swipebox" href="<?php echo Yii::app()->baseurl; ?>/img/comment/<?php echo $key[name_file]; ?>"> -->
                          <?php if ($available){ ?>
                            <div class="caption-prj">
                                <!-- <div id_pdm="<?php echo $key[id_pdm] ?>" class="btn-choice action-approve ">Approve & send</div> -->
                                <!-- <div id_pdm="<?php echo $key[id_pdm] ?>"  class="btn-choice action-reject">Reject </div> -->
                                <a style="text-decoration:none;color:black"  file="<?php //echo $key[name_file]  ?>" href="<?php echo Yii::app()->createUrl("comment/full",array("id"=>$key['id'],"file"=>$key['file']) ); ?>" ><div class="btn-choice">Full Screen </div></a>
                                <div  id_pdm="<?php echo $key[id_pdm] ?>" class="btn-choice action-detail">Details </div>
                                <div  id_mcd="<?php echo $key[id_mcd] ?>" class="btn-choice action-delete">Delete </div>
              
                            </div>
                          <?php } else { ?>
                            <div class="caption-prj">
                                <div  id_mcd="<?php echo $key[id_mcd] ?>" class="btn-choice action-delete">Delete </div>
              
                            </div>

                          <?php } ?>

                        
                           <?php 
                           if ($available) { ?>
                         
                          <img  
                          style="
                          width:100%;
                          height:auto;
                          background-size:100% 100%;
                          background-image:url('<?php echo Yii::app()->request->baseUrl."/img/comment/$key[file]" ?>');" 
                          class="prj-comment" src="<?php echo Yii::app()->baseurl; ?>/img/revisi/<?php echo $key[id]; ?>.png"
                          > 
                          <?php }else{  ?>
                          <img style="width:150px;" src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/notfound.jpg">
                          <?php } ?>
                    
                    </div>
                <?php 
                }
            }
            ?>
            
        </div>



    </div>
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