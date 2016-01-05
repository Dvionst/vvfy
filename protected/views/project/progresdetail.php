	<?php 
		$model = ProjectComment::model()->findByPk($id);
		// $idh = ProjectComment::model()->findByPk($id)->head_project_id;
		$head = ProjectCommentHead::model()->findByPk($model->head_project_id);
		
		$project =  Project::model()->findByPk($head->project_id);

		$project_name = Project::model()->findByPk(ProjectCommentHead::model()->findByPk($model->head_project_id)->project_id)->project_name;


		echo $idh;

	?>
    <img class="img-close" src="<?php echo Yii::app()->request->baseUrl; ?>/img/close.png">
    <center>
      <h1>
        DETAIL PROGRES IMAGE
      </h1>
    </center>
    <table>
      <tr>
          <td style="width:30%">Name </td>
          <td>:</td>
          <td style="width:70%">
            <input maxlength="30" img_id="<?php echo $model->id ?>" value="<?php echo $model->alias_name  ?>" type="text" id="input-edit-image">
          <?php 
          if ($model->alias_name=='')
            echo "<p class='text-image'>NO NAME</p>";
          else
            echo "<p class='text-image'>$model->alias_name</p>";
          ?>
          <div class="rename-image"></div>
          <div class="loader-image"></div>

          </td>
      </tr>
       <tr>
          <td>Project Name </td>
          <td>:</td>
          <td><?php echo $project_name ?></td>
      </tr>
      <tr>
          <td>Upload date </td>
          <td>:</td>
             <td><?php echo date('d M Y, H:i',strtotime($head->datetime)) ?></td>
      </tr>
       <tr>
          <td>Client Company </td>
          <td>:</td>
          <td><?php echo Member::model()->findByPk($project->id_member)->company_name ?></td>
      </tr>
       <tr>
          <td>Upload By </td>
          <td>:</td>
          <td><?php echo User::model()->find("id = '$head->user_id'")->username ?></td>
      </tr>
        <tr>
          <td>Phase </td>
          <td>:</td>
          <td><?php echo Phase::model()->findByPk($head->phase)->name ?></td>
      </tr>
    </table>

