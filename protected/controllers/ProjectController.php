<?php

class ProjectController extends Controller
{

	public function _construct(){

	}

	public function actionCreate(){
		// echo "masuk";
		$transaction = Yii::app()->db->beginTransaction();
		try {
			$model = new Project;
			if (isset($_POST['Project'])){
				$id = Yii::app()->user->id;
				$model->scenario = "user_create";
				$model->attributes=$_POST['Project'];
				$idm = Member::model()->find("email = '$id'")->id;
				$model->start_date = date('Y-m-d');
				$model->id_member  = $idm;
				$model->status  = 1 ;

					// $this->redirect(array('client/index'));
				if ($model->save()){
					$calendar = new Calendar;
					$calendar->project_id = $model->id;
					$calendar->start_date =$model->start_date;
					$calendar->due_date = $_POST['Project']['due_date'];
					$calendar->description	 = $_REQUEST['descriptionca']." of ";
					$calendar->type	 = "due";
					if ($calendar->save()){
						 $transaction->commit();
						echo "sukses";
					}else{
						echo json_encode($calendar->getErrors());					
					}
				}
				else
					echo json_encode($model->getErrors());
			}else{
				echo "not isset";
			}
		}catch (Exception $e) {
		    $transaction->rollBack();
		    // other actions to perform on fail (redirect, alert, etc.)
		} 
	

	} //end function
	

	public function actionLoadMore(){
		$this->renderPartial("application.views.client.reloadLoadMoreProject");
	}
	public function actionView($id){
		// $this->layout = "land";
		$this->renderPartial('detail_project');
	}
	public function actionGetgambar($id){
	
		$user = Yii::app()->user->id;
		if (Yii::app()->user->level()=='3'){		
			$id_member = Member::model()->find("TRIM(email) = '$user'")->id;
		}else{
			$id_member = MemberSub::model()->find("TRIM(email) = '$user'")->id_member;

		}
	
		$sql = "SELECT 
		pv.view_name name_view, 
		pv.id idviews ,
		project_name,
		phase,
		ph.datetime, ph.project_id, 
		pdm.name_file,pdm.id AS id_comment,
		SUBSTRING_INDEX(pdm.name_file,'.',-1) AS ext,
		pdm.description description,
		pdm.confirmer confirmer

		FROM
		project AS p 
		INNER JOIN 
		project_views AS pv
		ON p.id = pv.project_id
		INNER JOIN
		project_comment_head AS ph 
		ON pv.id = ph.project_views_id
		INNER JOIN

		(
		SELECT 
		MAX(id) id ,
		MAX(head_project_id) head_project_id,
		MAX(name_file) name_file,
		MAX(comment_id) comment_id,
		STATUS,
		MAX(alias_name) alias_name,
		MAX(confirmer) confirmer,
		MAX(confirmed_date) confirmed_date,
		MAX(description) description,
		MAX(project_views_id) project_views_id

		FROM project_comment pc
		where status = 1
		GROUP BY 
		pc.project_views_id
		)
		 AS pdm
		ON pdm.head_project_id = ph.id
		WHERE 
		p.id_member = '$id_member'
		AND
		pdm.status = 1 
		AND
		SUBSTRING_INDEX(pdm.name_file,'.',-1) IN ('jpg','png','gif','PNG','JPG','GIF')
		
		and pv.id = '$id'
		 
		GROUP BY pdm.project_views_id
		ORDER BY pv.created_date DESC";

		// echo $sql;
		$model = Yii::app()->db->createCommand($sql)->queryRow();
		// print_r($model);
		$array = array();
		$array["name_file"] = $model["name_file"];
		$array["id_comment"] = $model["id_comment"];
		$array["name_view"] = $model["name_view"];
		$array["description"] = $model["description"];
		$array["confirmer"] = $model["confirmer"];
		$array["project_name"] = $model["project_name"];
		$array["phase"] = $model["phase"];
		// $array["budget"] = 0;
		// $array["number_views"] = $model["number_views"];
		// $array["status"] = Status::model()->findByPk($model["status"])->name;
		// $array["team"] = $model["worker"];
		echo json_encode($array);



	}
	public function actionGetdetailproject($id){
		// $model = Project::model()->findByPk($id);
		// echo $gambar;
		$sql = "SELECT 
		p.id,p.due_date due_date , pch.datetime latest_upload,
		pv.jumlah_v number_views ,p.status status, p.worker worker

		FROM 
		project p
		INNER JOIN 
		project_comment_head pch
		ON 
		p.id = pch.project_id
		INNER JOIN
		(
			SELECT COUNT(*) jumlah_v,project_id FROM project_views WHERE 
			project_id = '$id'
		) AS pv
		ON 
		p.id = pv.project_id
		GROUP BY p.id
		ORDER BY pch.datetime DESC
		";

		$model = Yii::app()->db->createCommand($sql)->queryRow();
		// print_r($model);
		$array = array();
		$array["due_date"] = $model["due_date"];
		$array["latest_upload"] = $model["latest_upload"];
		$array["budget"] = 0;
		$array["number_views"] = $model["number_views"];
		$array["status"] = Status::model()->findByPk($model["status"])->name;
		$array["team"] = $model["worker"];
		// echo "masuk";
		echo json_encode($array);
	    // echo json_encode($model->getAttributes(array('id','project_name','start_date','due_date','id_member','username')));
        
	}
	public function actionGetwaiting(){
        $this->renderPartial('container-waiting');
	}
	public function actionGetreject(){
        $this->renderPartial('container-reject');
	}
	public function actionGetsent(){
        $this->renderPartial('container-sent');
	}
	public function actionGetclient(){
        $this->renderPartial('container-client');
	}
	public function actionTestPusher(){
		$app_id = '163881';
		$app_key = '06626efc2ad436f73364';
		$app_secret = 'e434d8ce60e96058f3e8';

		$pusher = new Pusher(
		  $app_key,
		  $app_secret,
		  $app_id,
		  array('encrypted' => true)
		);

		$data['message'] = 'hello worlds';
		$pusher->trigger('my_channel', 'new_message', $data);
		echo $data['message'];
	}


	public function actionChangeimgname(){
		if (isset($_REQUEST['img_id']))
		$image = ProjectComment::model()->findByPk($_REQUEST["img_id"]);
		$image->alias_name = $_REQUEST['img_name'];
		if ($image->update()){
			echo "sukses";
		}

	}
	public function actionProjectmail(){
			// echo "masuk";
		// echo Yii::getVersion();
		$this->renderPartial('//mail/project_mail',array('id'=>$_REQUEST['id']));
	}
	public function actionProgresDetail(){
		// echo "masuk";
		$this->renderPartial('progresdetail',array('id'=>$_REQUEST['id']));
	}
	public function actionSetsent(){
		// echo $_REQUEST[id];
		if (isset($_REQUEST['id'])){	
			$model = ProjectComment::model()->findByPk($_REQUEST['id']);
			$model->status = 1;
			if ($model->save()){
				if ($this->sendMailProgres($model->project_views_id)){
					$app_id = '163881';
					$app_key = '06626efc2ad436f73364';
					$app_secret = 'e434d8ce60e96058f3e8';

					$pusher = new Pusher(
					  $app_key,
					  $app_secret,
					  $app_id,
					  array('encrypted' => true)
					);

					$data['message'] = 'hello worlds';
					$pusher->trigger('test_channel', 'my_event', $data);
				}
			}
				// echo "succes set sent";main
				// $this->redirect(array('land/uploaded'));
				// echo "sukses";
		}
	}

	public function actionSetReject(){
		// echo $_REQUEST[id];
		if (isset($_REQUEST['id'])){	
			$model = ProjectComment::model()->findByPk($_REQUEST['id']);
			$model->status = 2;
			$model->save();
				// $this->redirect(array('land/uploaded'));
				// echo "sukses";
		}
	}

	public function actionDeleteworker(){
		if (ProjectDetail::model()->findByPk($_REQUEST['id'])->delete()){
			echo "sukses";
		}
	}
	public function actionUpdateAlldoing(){
		if (ProjectDetail::model()->updateAll(array( 'doing' => 0 ))){
			echo "sukses";
		}
	}
	public function actionUpdateWorkerDashboard(){

		if ($_REQUEST[project_id]!=0){
			//$project = Project::model()->find("id = $_REQUEST[project_id] and status = 1 ");
			//$project->worker =  $_REQUEST['worker'];
			//$model_update =Project::model()->updateAll(array( 'worker' => 0 ), "worker = $_REQUEST[worker] and status!=5" );
			//if ($model_update){
				// $dataAll = Project::model()->findAll("worker = $_REQUEST[worker] and status!=5");
				// foreach ($dataAll as $dl):
					// $dl->worker = 0;
					// $dl->save();
				// endforeach;
				
				// ProjectDetail::model()->updateAll(array( 'doing' => 0 ));
				// $exist = ProjectDetail::model()->count("worker_id = $_REQUEST[worker] and project_id=$_REQUEST[project_id]");
				// $record = ProjectDetail::model()->find("worker_id = $_REQUEST[worker] and project_id=$_REQUEST[project_id]");
				$record = ProjectDetail::model()->find("worker_id = $_REQUEST[worker] and project_id=$_REQUEST[project_id]");
				// $record->doing = 
				if (count($record)==0){
					ProjectDetail::model()->deleteAll("worker_id = $_REQUEST[worker]");
					ProjectDetail::model()->updateAll(array( 'doing' => 0 ), "worker_id = $_REQUEST[worker]" );
					$pd = new ProjectDetail;
					$pd->project_id = $_REQUEST[project_id];
					$pd->worker_id = $_REQUEST[worker];
					$pd->task_id = 1;
					$pd->doing = 1;
					$pd->save();
				}
				//else{
					// ProjectDetail::model()->updateAll(array( 'doing' => 0 ), "worker_id = $_REQUEST[worker]" );
					// // $pd = new ProjectDetail;
					// $record->project_id = $_REQUEST[project_id];
					// $record->worker_id = $_REQUEST[worker];
					// $record->task_id = 1;
					// $record->doing = 1;
					// if ($record->save())
					// 	echo "hihi";
					// else{}
				//}

				// $project = Project::model()->find("id = $_REQUEST[project_id] and status = 1 ");
				// $project->worker =  $_REQUEST['worker'];
				

				// $project->username = $_REQUEST["manager"];

				// if ($project->save())
					// echo " aman worker".$_REQUEST['worker']."mengerjakan $_REQUEST[project_id]";
				// else
					// echo "tidak aman";
			//}else{
			//	echo "update All eror worker = $_REQUEST[worker] and status!=5";
			//	print_r($model_update->getErrors());
			//}
				// print_r($project->getErrors());
		}
		else{
			//echo "projek = 0";
			if (ProjectDetail::model()->find("worker_id = $_REQUEST[worker]")->delete())
				echo "deleted";
			else
				echo "no deleted";
			// echo " project 0 for worker".$_REQUEST['worker'];
			// $project = Project::model()->find("worker = $_REQUEST[worker] and status = 1 ");
			// $project->worker = 0;
			// if ($project->save())
			// 	echo "aman";
			// else
			// 	echo "tidak aman";

		}

	}

	
	public function actionUpdatepermission(){
		$count = Permission::model()->count("username='$_REQUEST[username]' and permission_id=$_REQUEST[permission_id]");
		if ($count==0){
			$p = new Permission;
			$p->username = $_REQUEST['username'];
			$p->permission_id = $_REQUEST['permission_id'];
			$p->status = 1;
			if ($p->save())
				echo "sukses";
			else
				print_r($p->getErrors());
		}else if($count>=1){
			$p = Permission::model()->find("username='$_REQUEST[username]' and permission_id=$_REQUEST[permission_id]");
			$p->delete();
			// echo "delete sukse";
		}
	}
	public function actionListpermission(){
		// $id = Yii::app()->user->id;
		$this->renderPartial("list_permission",array('id'=>$_GET['id']));
	}
	
	public function actionDircomment(){
		$this->renderPartial('list_comment',array('project_id'=>$_REQUEST['project_id'],'comment_id'=>$_REQUEST['comment_id']));
	}
	public function actionReloadCalendar(){
		$this->renderPartial('reloadCalendar');
	}
	public function actionListcount(){	
		$this->renderPartial('list_count',array('view_id'=>$_REQUEST['view_id'],'project_id'=>$_REQUEST['project_id'],'type'=>$_REQUEST['type']));
	}
	public function actionNewcomment(){
		$this->renderPartial('create_comment');
	}
	public function actionSavecomment(){
		$time = time();
		if ($_FILES['file-comment']['tmp_name']){
			// echo "sukses";
			$hm = new ProjectCommentHead;
			$hm->project_id = $_REQUEST['project_id'];
			$hm->project_views_id = $_REQUEST['views_id'];
			$hm->phase = $_REQUEST['phase_id'];
			$hm->description = "p";
			$hm->datetime = date('Y-m-d H:i:s');
			$hm->user_id = User::model()->findByPk(Yii::app()->user->id)->id;
			// $hm->type = $_REQUEST['type'];
			$hm->type = 1;
			if ($hm->save()){
				foreach($_FILES['file-comment']['tmp_name'] as $key => $tmp_name ){
					$file_name=$_FILES['file-comment']['name'][$key];
					$file_size=$_FILES['file-comment']['size'][$key];
					$file_tmp =$_FILES['file-comment']['tmp_name'][$key];
					$file_type=$_FILES['file-comment']['type'][$key];
					$model = new ProjectComment;
					$model->head_project_id = $hm->id;
					$model->name_file = $key.$time.$file_name;
					$model->comment_id = 999;
					$model->description = "nothing";
					$model->confirmer = Yii::app()->user->id;
					$model->confirmed_date	 = date('Y-m-d H:i:s');
					$model->project_views_id = $_REQUEST['views_id'];
					if ($model->save()){
						if (move_uploaded_file($file_tmp,Yii::app()->basePath."/../img/comment/$key$time$file_name")){
							// if ( $this->sendMailProgres($_REQUEST['views_id']) ){
								echo "sukses";
							// }
							// else{
							// 	echo "mail gagal";
							// }
						}else{
							echo "eror";
						}
					}
						// echo "sukses";
					// else
						// print_r($model->getErrors());
				}
			}else{
				echo "not sukses save head";
			}
			
		
		// $this->renderPartial('create_comment');
	}
	}
	protected function sendMailProgres($vid){
		//kirim email pada saat team memberikan progres
		// $project = Project::model()->findByPk($idp)->id_member;
		// $member = 
		$sql  = "SELECT 
		pv.view_name,p.id_member,p.project_name, m.email ,m.name
		FROM
		project p
		INNER JOIN
		project_views pv
		ON 
		p.id = pv.project_id
		INNER JOIN
		member m
		ON
		m.id = p.id_member
		WHERE
		pv.id= '$vid'";
		$model = Yii::app()->db->createCommand($sql)->queryRow();
		try{
			
			Yii::import('ext.yii-mail.YiiMailMessage');
			$message = new YiiMailMessage;
			$message->view = "new_progres";
			$params  = array('model'=>$model);
			$message->setBody($params, 'text/html');
			$message->subject = "Notification New Progres!";
			$message->addTo($model[email]);
			$message->from = Yii::app()->params['adminEmail'];
			if (Yii::app()->mail->send($message)){
				$notif = new Notification;
				$notif->tanggal = date('Y-m-d H:i:s');
				$notif->judul = "Progres Notification";
				$notif->keterangan = "Hello the team already sent the progres of <b>$model[view_name]</b> on <b>$model[project_name]</b>'s Project. ";
				$notif->id_member  = $model[id_member] ;
				$notif->url  = "vvfy.me";
				$notif->is_baca  = "0";
				if ($notif->save()){
					return true;
				}else{
					return print_r($notif->getErrors());
				}
				


			}
		}catch(Exception $e){
			// return false;	
		}
		//akhir
	}
	public function actionReload(){
		// dd
		$this->renderPartial('row',array('status'=>$_REQUEST['status'],'sortby'=>$_REQUEST['sortby'],'ascdesc'=>$_REQUEST['ascdesc']));
	
	}
	public function actionNew(){
		//cek eror tidaknya
		foreach  ($_FILES['fileupload']['error'] as $error ){
			// if ($error
			if  ($error==0)
				$no_error = true;
			else
				$no_error = false;

		}
		// print_r($_FILES['fileupload']);
		// exit;
		$model = new Project;
		$model->id_member = $_REQUEST['member'];
		$model->project_name =  $_REQUEST['name'];
		$model->start_date = $_REQUEST['start'];
		$model->due_date = $_REQUEST['due'];
		$model->username = 1;
		$model->task = 1;
		$model->progres = 0;
		$model->priority = 1;
		$model->worker = 0;
		$model->status = 1;
		if ($model->save()){
			$calendar = new Calendar;
			$calendar->project_id = $model->id;
			$calendar->start_date =$_REQUEST['start'];
			$calendar->due_date = $_REQUEST['due'];
			$calendar->description	 = $_REQUEST['descriptionca']." of ";
			$calendar->type	 = "due";
			if ($calendar->save()){
			// echo "sukses";
				if ($no_error){
					$time = time();
					$hm = new ProjectCommentHead;
					$hm->datetime = date('Y-m-d H:i:s');
					$hm->user_id= 1;
					$hm->project_id =$model->id ;
					$hm->type =1 ;
					if ($hm->save()){	
					
							foreach($_FILES['fileupload']['tmp_name'] as $key => $tmp_name ){
								$comment = new ProjectComment;
								$file_name = $_FILES['fileupload']['name'][$key];
								$file_size =$_FILES['fileupload']['size'][$key];
								$file_tmp =$_FILES['fileupload']['tmp_name'][$key];
								$file_type=$_FILES['fileupload']['type'][$key];
								// echo Yii::app()->request->baseUrl."/img/comment/".".$file_name";
								$comment->name_file = $key.$time.$file_name;
								$comment->head_project_id = $hm->id;
								$comment->comment_id = 0;
								if  ($comment->save()){			
									if (move_uploaded_file($file_tmp,Yii::app()->basePath."/../img/comment/$key$time$file_name")){
										// echo "sukses";
									}
									// else{
									// 	// echo "sukses";
									// }
								}			
								// echo $file_name. " ";
							}
						}


				

				}
				//kirim email start
				Yii::import('ext.yii-mail.YiiMailMessage');
				$message = new YiiMailMessage;
				$message->view = "project_notif";
				$params  = array('email'=>$email,'name'=>$name,'code'=>$code);
				$message->setBody($params, 'text/html');
				$message->subject = "New Project on vvfy";
				$message->addTo("try35u@gmail.com");
				$message->addTo("ARIEF.FAUZIAKBAR@gmail.com");
				$message->addTo("jad@vvfy.me");
				$message->addTo("majd@vvfy.me");
				$message->from = Yii::app()->params['adminEmail'];
				//  emails to keep in cc
               // $emails = array("try35u@gmail.com","try.setyoutomo@yahoo.com");
               // // foreach($emails as $value){
               //    $message->addCC(trim($value));  
               // }
  
				// $message->from = "Support";
				// if (Yii::app()->mail->send($message))
					echo "sukses";
				// else
					// echo "gagal";

				//kirim emai end
			}
			// echo "sukses";
		}else{
			echo json_encode($model->getErrors());
		}
		// echo
		// echo count($_FILES['uploads']['fileupload']);
		// if(count($_FILES['uploads']['fileupload'])) {
			// foreach ($_FILES['uploads']['fileupload'] as $file) {

			// //do your upload stuff here
				// echo $file;

			// }
		// }else{
			// echo "asdsa";
		// }
		// if ($_FILES['fileupload']){
			// // echo "masuk";
			// print_r($_FILES['fileupload']);
			// // $no=1;
			// // foreach ($_FILES['fileupload'] as $name) { 
			// // $no++;
			// // echo "<pre>";
			// // print_r($name);
			// // echo "</pre>";
				// // // echo $name['name']." ";
			// // }
				// error_reporting(E_ALL);

				// /*** the upload directory ***/
				// $upload_dir= './uploads';

				// /*** numver of files to upload ***/
				// $num_uploads = 5;

				// /*** maximum filesize allowed in bytes ***/
				// $max_file_size  = 51200;

				// /*** the maximum filesize from php.ini ***/
				// $ini_max = str_replace('M', '', ini_get('upload_max_filesize'));
				// $upload_max = $ini_max * 1024;

				// /*** a message for users ***/
				// $msg = 'Please select files for uploading';

				// /*** an array to hold messages ***/
				// $messages = array();
				// /** loop through the array of files ***/
				// echo count($_FILES['fileupload']['tmp_name']);
				// for($i=0; $i < count($_FILES['fileupload']['tmp_name']);$i++)
				// {
					// // echo $i;
					// // check if there is a file in the array
					// if(!is_uploaded_file($_FILES['fileupload']['tmp_name'][$i]))
					// {
						// echo 'No file uploaded';
						// $messages[] = 'No file uploaded';
					// }
					// /*** check if the file is less then the max php.ini size ***/
					// elseif($_FILES['fileupload']['size'][$i] > $upload_max)
					// {
						// echo 'about size';
						// $messages[] = "File size exceeds $upload_max php.ini limit";
					// }
					// // check the file is less than the maximum file size
					// elseif($_FILES['fileupload']['size'][$i] > $max_file_size)
					// {
						// $messages[] = "File size exceeds $max_file_size limit";
						// echo 'File size exceeds $max_file_size limit';

					// }
					// else
					// {
						// // copy the file to the specified dir 
						// if(@copy($_FILES['fileupload']['tmp_name'][$i],$upload_dir.'/'.$_FILES['fileupload']['name'][$i]))
						// {
							// /*** give praise and thanks to the php gods ***/
							// $messages[] = $_FILES['fileupload']['name'][$i].' uploaded';
							// echo "uploadded";
						// }
						// else
						// {
							// /*** an error message ***/
							// $messages[] = 'Uploading '.$_FILES['fileupload']['name'][$i].' Failed';
							// echo "fail";
						// }
					// }
				// }
						
		// }else{
			// echo "not isset";
		// }
			// // echo "masuk";
		// // }else{
		// echo "no";
		// }
		// $model = new Project;
		// $model->id_member = $_REQUEST['member'];
		// $model->project_name =  $_REQUEST['name'];
		// $model->start_date = $_REQUEST['start'];
		// $model->due_date = $_REQUEST['due'];
		// $model->username = 1;
		// $model->task = 1;
		// $model->progres = 0;
		// $model->priority = 1;
		// $model->status = 1;
		// if ($model->save()){
			// echo "sukses";
		// }else{
			// print_r($model->getErrors());
		// }
	
	}
	public function actionDelete(){
		if (Project::model()->findByPk($_GET['id'])->delete()){
			$calendar = Calendar::model()->deleteAll("project_id = $_GET[id]");
			if ($calendar){
				echo "sukses";
			}
		}
	
	}
	public function actionUpdatestatus(){
		// echo "masuk ke update sttatus";
		// echo "update id ".$_GET['id'];
		if (Project::model()->updateByPk($_GET['id'],array('status'=>"$_GET[nilai]")) ){
			// echo "sukses";
			if (ProjectDetail::model()->deleteAll("project_id =  $_GET[id]"))
				echo "sukses";
			// foreach ($variable as $key => $value) {
			// 	# code...
			// }
		}else{
			echo "id : ".$_REQUEST['id'];
			echo "nilai : ".$_REQUEST['nilai'];
		
		}
	}
	public function actionUpdateprogres(){
		if ($_REQUEST['idpd']=='undefined'){
			if (Project::model()->updateByPk($_GET['id'],array('progres'=>"$_GET[nilai]")) ){
				echo "sukses";
				if ($_GET['nilai']==100){
					Project::model()->updateByPk($_GET['id'],array('status'=>5))	;
				}
			}else{
				echo "id : ".$_REQUEST['id'];
				echo "nilai : ".$_REQUEST['nilai'];
			
			}
		}else{
		
			if (ProjectDetail::model()->updateByPk($_REQUEST[idpd],array('progres'=>$_REQUEST[nilai])))
				echo "sukses";
			else	
				echo "eror".$_REQUEST[idw]. " ".$_REQUEST[nilai];
			// echo "ini".$_REQUEST['idw'];
		}
	}
	public function actionUpdatedue(){
		if (Project::model()->updateByPk($_GET['id'],array('due_date'=>"$_GET[nilai]")) ){
			$data = Calendar::model()->find("project_id = $_GET[id] and type='due' ");
			$data->due_date = $_GET['nilai'];
			if ($data->save())
				echo "sukses";
			
		}else{
			echo "id : ".$_REQUEST['id'];
			echo "nilai : ".$_REQUEST['nilai'];
		
		}
	}
	public function actionReloadlistuser(){
		$this->renderPartial('reloadListuser',array('id'=>$_REQUEST['id']));
	}
	public function actionUpdateworker(){
	
		if ($_REQUEST['id']!=0){
			// echo $_REQUEST[id];
			// echo $_REQUEST[nilai];
			$detail = ProjectDetail::model()->find("project_id = $_REQUEST[id] and worker_id=$_REQUEST[nilai]");
			if (count($detail)==0){
				$pd = new ProjectDetail;
				$pd->project_id = $_REQUEST[id];
				$pd->worker_id = $_REQUEST[nilai];
				if ($pd->save())
					echo "sukses";
				else
					echo "eror";
			}
			// $idp = Project::model()->findByPk($_GET['id']);
			// $idp->worker = $_GET['nilai'];
			// $idp->username = $_GET['manager'] ;
			// if ($idp->save())
				// echo "kosongkan projek sukses";
			// else
				// print_r($idp->getErrors());
		}else{
			// echo "kosongkan projek /n";
			$idp = Project::model()->find("worker = $_GET[nilai] and status!=5 ");
			$idp->worker = 0;
			$idp->username = $_GET['manager'] ;
			if ($idp->save())			
				echo "kosongkan projek sukses";
			else
				print_r($idp->getErrors());
				// echo "tidak bisa kosongkan projek ";
			
		}
	}
	public function actionUpdatename(){
		if (Project::model()->updateByPk($_GET['id'],array('project_name'=>"$_GET[nilai]")) ){
			echo "sukses";
		}else{
			echo "id : ".$_REQUEST['id'];
			echo "nilai : ".$_REQUEST['nilai'];
		
		}
	}

	public function actionUpdatetask(){
		// echo "masuk ke update sttatus";
		// echo "update id ".$_GET['id'];
		if (Project::model()->updateByPk($_GET['id'],array('task'=>"$_GET[nilai]")) ){
			echo "sukses";
		}else{
			echo "you dont doing project ..";
			// echo "id : ".$_REQUEST['id'];
			// echo "nilai : ".$_REQUEST['nilai'];
		
		}
	}

	public function actionUpdatepriority(){
		// echo "masuk ke update sttatus";
		// echo "update id ".$_GET['id'];
		if (Project::model()->updateByPk($_GET['id'],array('priority'=>"$_GET[nilai]")) ){
			echo "sukses";
		}else{
			echo "id : ".$_REQUEST['id'];
			echo "nilai : ".$_REQUEST['nilai'];
		
		}
	}
	
	public function actionAddclient(){
		$model = new Member;
		$model->name = $_REQUEST['nama'];
		$model->color = $_REQUEST['color'];
		if ($model->save()){
			// echo "sukses";
			foreach(Member::model()->findAll() as $q){
				echo "<option value='$q->id'>$q->name</option>";
			}
		}
		else
			print_r($model->getErrors());
	}
	public function actionUpdateTaskPD(){
		if (ProjectDetail::model()->updateByPk($_REQUEST['idw'],array('task_id'=>$_REQUEST['nilai'])))
			echo "sukses";
		else
			echo "eror";
	}
	public function actionAddlistuser(){
		$this->renderPartial('add-list-user');
	}
	public function actionCreatelistuser(){
		$pj = ProjectDetail::model()->find("project_id = $_REQUEST[pid] and worker_id = $_REQUEST[worker] ");
		if (count($pj)==0){
			// ProjectDetail::model()->deleteAll("worker_id = $_REQUEST[worker]" );
			$model = new ProjectDetail;
			$model->project_id = $_REQUEST['pid'];
			$model->worker_id = $_REQUEST['worker'];
			$model->task_id = 0;
			$model->doing = 1;
			if ($model->save())
				echo "sukses";
			else
				echo "no";
		}else{
			echo "no";
		}
		
		// $this->renderPartial('add-list-user');
	}
}