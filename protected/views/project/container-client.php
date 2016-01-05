<div class="container-client" id="container-client">
    <?php 
     $allow = array('png','jpg','gif','PNG','JPG','GIF');

//    $sql = "SELECT mcd.id as id_mcd ,mch.id AS id, pm.name_file file
    $sql = "SELECT mch.id AS id, pm.name_file file
    FROM
    project_comment pm INNER JOIN  member_comment_head AS mch
    ON pm.id = mch.project_comment_id
 
    GROUP BY mch.id
    ORDER BY mch.id DESC

    ";
    // echo $sql;
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
            <div  class="from-team wrapper-prj-comment <?php echo $class ?>">
              <!-- <a class="swipebox" href="<?php echo Yii::app()->baseurl; ?>/img/comment/<?php echo $key[name_file]; ?>"> -->
                  <?php if ($available){ ?>
                    <div class="caption-prj">
                        <!-- <div id_pdm="<?php echo $key[id_pdm] ?>" class="btn-choice action-approve ">Approve & send</div> -->
                        <!-- <div id_pdm="<?php echo $key[id_pdm] ?>"  class="btn-choice action-reject">Reject </div> -->
                        <a style="text-decoration:none;color:black"  file="<?php //echo $key[name_file]  ?>" href="<?php echo Yii::app()->createUrl("comment/full",array("id"=>$key['id'],"file"=>$key['file']) ); ?>" ><div class="btn-choice">Full Screen </div></a>
                        <div  id_pdm="<?php echo $key[id_pdm] ?>" class="btn-choice action-detail">Details </div>
                        <div  id_mcd="<?php echo $key[id_mcd] ?>" class="btn-choice action-delete">Send to the team </div>
      
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