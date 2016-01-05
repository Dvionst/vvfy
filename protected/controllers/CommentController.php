<?php 
class CommentController extends Controller
{
	public function actionSend(){
		// echo "<pre>";
		// print_r($_REQUEST['data']);
		// echo "</pre>";
		$saved = false;
		$head = new MemberCommentHead;
		$head->project_comment_id = $_REQUEST['id_pcm'];
		$head->comment_date = date('Y-m-d H:i:s');
		$head->description = "c";
		if ($head->save()){	
			if (count($_REQUEST['data'])!=0):
				foreach ($_REQUEST['data'] as $key) {
					$detail = new MemberCommentDetail;
					$detail->head_id = $head->id;
					$detail->no = $key['no'];
					$detail->description =  $key['value'];
					$detail->status = 0;
					if ($detail->save())
						$saved = true;
					// echo $key['no']. " ". $key['value']."<br>";
				}
			endif;
			//kirim email
			if ($saved){
				try{
					Yii::import('ext.yii-mail.YiiMailMessage');
					$message = new YiiMailMessage;
					$message->view = "new_comment";
					$email = Yii::app()->user->id;
					$member = Member::model()->find("email = '$email'");
					$params  = array(
							'member'=>$member,
							"email"=>$email,
							"project"=>$_REQUEST['project_name'],
							"phase"=>$_REQUEST['project_phase'],
							"view_name"=>$_REQUEST['view_name']
							);
					$message->from = Yii::app()->params['adminEmail'];
					$message->setBody($params, 'text/html');
					$message->subject = "Notification New Comment!";
					$message->addTo("try35u@gmail.com");
					// $message->addTo("arief@vvfy.me");
					// $message->addTo("jad@vvfy.me");
					// $message->addTo("majd@vvfy.me");
					$message->from = Yii::app()->params['adminEmail'];
					if (Yii::app()->mail->send($message)){
						$notif = new NotifTeam;
						$notif->tanggal = date('Y-m-d H:i:s');
						$notif->judul = "Comment's Client Notification";
						$notif->keterangan = "Hello $member->name just sent the comment of <b>$_REQUEST[view_name]</b> on <b>$_REQUEST[project_name]</b>'s Project phase $_REQUEST[project_phase]. ";
						$notif->username  = 'majd' ;
						$notif->url  = "vvfy.me";
						$notif->is_baca  = "0";
						if ($notif->save())
							echo $head->id;
					}
				}catch(Exception $e){
					
				}
			}else{
				echo "gagal ke detail ";
				print_r($detail->getErrors());
				echo "<br>";
				print_r($detail);
			}

				// return "sukses";

		}else{
			echo "gagal ke head ";
			print_r($head->getErrors());
		}

	}

	public function actionSaveimage(){
			$id = $_REQUEST['id'];
		    $imgData = str_replace('data:image/png;base64,','',$_REQUEST['imgBase64']);
		    $imgData = base64_decode($imgData);

		    $filePath = Yii::app()->basePath."/../img/revisi/$id.png";
		
		    file_put_contents($filePath, $imgData);
	}

	public function actionFull(){
		// echo "image";

		$this->renderPartial('full',array(
			'id'=>$_REQUEST['id'],
			'file'=>$_REQUEST['file'],
		));
	}

	public function actionSetdelete(){
		$model = MemberCommentDetail::model()->findByPk($_REQUEST[id]);
		$model->status = 1; //set delete
		if ($model->save())
			echo "sukses";
		// echo "set 1";
	}

}