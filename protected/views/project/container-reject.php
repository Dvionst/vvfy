<div class="container-reject" id="container-reject">
    <?php 
      $allow = array('png','jpg','gif','PNG','JPG','GIF');

      $date =  $_REQUEST['date'];
      $phase =  $_REQUEST['phase'];
      $project =  $_REQUEST['project'];
      $client =  $_REQUEST['company'];
      $sql = " 
              SELECT pdm.id as id_pdm,ph.datetime, ph.project_id, pdm.name_file,p.project_name pn
              FROM
              project p INNER JOIN  

              project_comment_head AS ph
              
              ON 

              p.id = ph.project_id
              and
              ph.phase = '$phase'
              and
              p.id = '$project'
              and 
              date(ph.datetime) = '$date'
              and
              p.id_member = '$client'

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
            <?php $class = str_replace(" ","_",$key['pn']); ?>
              <div class="from-team wrapper-prj-comment  <?php echo $class ?> ">
                    <div class="caption-prj">
                    <a style="color:black" class="swipebox" href="<?php echo Yii::app()->baseurl; ?>/img/comment/<?php echo $key[name_file]; ?>">
                        <div  class="btn-choice action-full">Full Screen </div>
                    </a>
                        <div class="btn-choice action-full">Details </div>
                    </div>
                    <img class="prj-comment" src="<?php echo Yii::app()->baseurl; ?>/img/comment/<?php echo $key[name_file]; ?>" style="width:100%;height:auto"> 
              </div>
          <?php 
          }
      }
      ?>
      
  </div>