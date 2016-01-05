<?php

class MemberController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	// public $layout='//layouts/column2';
	public $layout='aksi';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('editable','emailSendComment','membersetting','resendinvite','sendinvite','ceksend','forgetpassword','notificationsucces','notification','index','view','register','sendmail','seemail','confirm','emailv'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('listsubmember'),
				'users'=>array('*'),

			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update','ChangeInfo'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionEditable(){
		$email =  Yii::app()->user->id;
		// echo $_REQUEST['atr'];
		// echo $_REQUEST['value'];
		$model = Member::model()->find("email = '$email' ");
		if ($_REQUEST['atr']==='name'){
			$model->name = $_REQUEST['value'];
		}else if ($_REQUEST['atr']==='company'){
			$model->company_name = $_REQUEST['value'];
		}
		if ($model->save()){
			echo $_REQUEST['value'];;
		}
	}
	public function actionEmailsendcomment(){
		// echo "email send comment";
		Yii::import('ext.yii-mail.YiiMailMessage');
		$message = new YiiMailMessage;
		$message->view = "new_comment";
		$params  = array('email'=>$email,'name'=>$name,'code'=>$code);
		$message->setBody($params, 'text/html');
		$message->subject = "Notification New Comment!";
		$message->addTo("try35u@gmail.com");
		$message->from = Yii::app()->params['adminEmail'];
		if (Yii::app()->mail->send($message))
			return "sukses";
	}

	public function actionMembersetting(){
		$this->renderPartial('member-setting');
	}

	public function actionForgetpassword(){
		$this->renderPartial('forgot-password');
	}
	
	public function actionNotification(){
		$this->renderPartial('notification_confirm');
	}
	public function actionNotificationsucces(){
		$this->renderPartial('notification_confirm_succes');
	}
	public function actionEmailv($email){
		$data = User::model()->findByPk($email);
		if (count($data)==1){
			echo "duplicate";
		}
	}
	public function actionConfirm(){
		$email = Member::model()->find("code='$_REQUEST[id]'")->email;
		$user = UserController::getToken($_REQUEST['token']);
		if (($email!='')&&($user!='')){
			$user->scenario="";
			$user->token="";
			$user->confirm_email=1;
			if($user->save()){
				$this->redirect(array('member/notificationsucces'));	
			}else{
				print_r($user->getErrors());
			}
			//if (User::model()->updateByPk($email,array('confirm_email'=>1)))
		}else{
			$this->redirect(array('site/index'));
		}
		
	}
	public function actionSeeMail(){
		// $this->renderPartial('confirm_register');
		 Yii::import('ext.yii-mail.YiiMailMessage');
		$message = new YiiMailMessage;
		$message->view = "test";
		print_r();
		// $this->renderPartial('test');
		
		// $message->setBody($pesan, 'text/html');
		// $message->subject = "dear  you has been invited for join vvfy.me";
		// $message->addTo("try35u@gmail.com");
		// $message->from = Yii::app()->params['adminEmail'];
		// if (Yii::app()->mail->send($message))
			// return "sukses";
	}

	public function actionListSubMember(){
		$this->renderPartial('list-sub-member');
	}
	public function actionDeleteSubMember($id){
		// $this->renderPartial('list-sub-member');
	}
	public function actionResendinvite($email){
		$name = Yii::app()->user->name;
		Yii::import('ext.yii-mail.YiiMailMessage');
		$message = new YiiMailMessage;
		$message->view = "invite";
		$params  = array('email'=>$email,'name'=>$name);
		$message->setBody($params, 'text/html');
		$message->subject = "invitation for join vvfy";
		$message->addTo($email);
		$message->from = Yii::app()->params['adminEmail'];
		if (Yii::app()->mail->send($message)){
			$submember = MemberSub::model()->find("email = '$email' ");
			$submember->status_email = 1;
			$submember->update();
		}else{
			echo "email invitation has not been sent";
		}

	}


	public function actionSendinvite(){
		$email = $_REQUEST['email'];
		$name = Yii::app()->user->name;
		if (isset($_REQUEST['email'])){
			$sub = new MemberSub;
			$sub->name = "uknown";
			$sub->email = $email;
			$sub->id_member = Member::model()->find("email = '$name' ")->id;
			$sub->date_invite = date('Y-m-d h:i:s');
			$sub->status = 0;
			$sub->status_email = 0;
			if ($sub->save()){
				Yii::import('ext.yii-mail.YiiMailMessage');
				$message = new YiiMailMessage;
				$message->view = "invite";
				$params  = array('email'=>$email,'name'=>$name);
				$message->setBody($params, 'text/html');
				$message->subject = "invitation for join vvfy";
				$message->addTo($email);
				$message->from = Yii::app()->params['adminEmail'];
				if (Yii::app()->mail->send($message)){
					$sub->status_email = 1;
					if ($sub->update())
						echo "succes";
				}else{
					echo "email invitation has not been sent";
				}
			}else{
				// print_r($sub->getErrors());
				echo CHtml::errorSummary($sub);
				// echo $sub->email;
			}		
		}else{
			echo "requset not found";
		}
	}

	public function actionCeksend(){
		// echo "<pre>";
		// print_r(get_loaded_extensions());
		// echo "</pre>";
		$email = "try35u@gmail.com";
		$name = "Try Setyo ";

		Yii::import('ext.yii-mail.YiiMailMessage');
		$message = new YiiMailMessage;
		$message->view = "cek";
		$params  = array('email'=>$email,'name'=>$name,'code'=>$code);
		$message->setBody($params, 'text/html');
		$message->subject = "Verify your vvfy e-mail address";
		$message->addTo($email);
		$message->from = Yii::app()->params['adminEmail'];
		if (Yii::app()->mail->send($message))
			echo "sukses";
		else
			echo "eror";

	}
	public static function SendMail($email,$name,$code,$token)
    {   
		Yii::import('ext.yii-mail.YiiMailMessage');
		$message = new YiiMailMessage;
		$message->view = "confirm_register";
		$params  = array('email'=>$email,'name'=>$name,'code'=>$code,'token'=>$token);
		$message->setBody($params, 'text/html');
		$message->subject = "Verify your vvfy e-mail address";
		$message->addTo($email);
		$message->from = Yii::app()->params['adminEmail'];
		if (Yii::app()->mail->send($message))
			return "sukses";
		
    }

    public function actionChangeInfo(){
		$model=new Member;

		if(isset($_POST['Member']))
		{
			
			$model=Member::model()->findByAttributes(array('email'=>Yii::app()->user->name));
			if($_POST['Member']['name']!=""){$model->name=$_POST['Member']['name'];}
			if($_POST['Member']['company_name']!=""){$model->company_name=$_POST['Member']['company_name'];}
			if($_POST['Member']['phone']!=""){$model->phone=$_POST['Member']['phone'];}
			if($_POST['Member']['address']!=""){$model->address=$_POST['Member']['address'];}
			$model->scenario = 'change_info';
			if($model->save()){
				if($model->type_account=="1"){
  					$tipe="Standar Account";
  				}elseif($member->type_account="2"){
  					$tipe="Premium Account";
  				}else{$tipe="wow";}
				$result =    $tipe."<br><br>	".
		  					 $model->email."<br>".
		  					 $model->name."<br>".
		  					 $model->company_name."<br><br>".
		  					 $model->phone."<br>".
		  					 $model->address;
				echo CJSON::encode(array(
	                'result'=>'success',
	                'html'=>$result,
	                'message'=>'Your information has been changed.',
	            ));
			}else{
			     echo CJSON::encode(array(
	                'result'=>'failed',
	                'name'=>CHtml::error($model,'name'),
	                'company'=>CHtml::error($model,'company_name'),
	                'phone'=>CHtml::error($model,'phone'),
	                'address'=>CHtml::error($model,'address'),
	                'all'=>Chtml::errorSummary($model),
	            ));
			}
		}
    }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionRegister()
	{
		$model=new Member;
		$model2=new User;
		$model2->scenario = "register";
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		// echo "masuk";
		if(isset($_REQUEST['Member']))
		{
			// echo "ini".$_REQUEST['Member']['name'];
			// echo "<pre>";
			// print_r($_REQUEST['Member']);
			// echo "</pre>";
			// exit;
			$model->attributes=$_REQUEST['Member'];
			$model2->username=$_REQUEST['Member']['email'];
			$model2->password=$_REQUEST['Member']['password'];
			$model2->level=3;
			
			// $model->email_confirm=0;
			$model->date_register=date('Y-m-d H:i:s');
			$model->code=strtoupper(substr(md5(uniqid(rand(), true)),0,5));
			$getToken=rand(0, 99999);
            $getTime=date("H:i:s");
            $model2->token=md5($getToken.$getTime);
			if ($model->validate() && $model2->validate()){
				if($model->save()){
					if($model2->save()){
						IF ($this->sendmail($_REQUEST['Member']['email'],$_REQUEST['Member']['name'],$model->code,$model2->token)){
							$this->redirect(array('member/notification'));
						}else{
						print_r($model2->getErrors());
					}
					// $this->redirect(array('site/index'));
					}
					else{
						echo "masuk";
						print_r($model2->getErrors());
					}
				 }else{
						print_r($model->getErrors());
				 
				 }
			}else{
				  echo CHtml::errorSummary($model2);
				  echo CHtml::errorSummary($model," "," ",array('style'=>' '));
			}

		// $this->renderPartia('create',array(
			// 'model'=>$model,
		// ));
	}else{
		echo "not isset";
	}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Member']))
		{
			$model->attributes=$_POST['Member'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Member');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Member('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Member']))
			$model->attributes=$_GET['Member'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Member::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='member-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
