<?php

class LandController extends Controller
{
	public $layout = "landing";
	public $menu = "";
	public $defaultAction = "dashboard";
	public $permission ;
	public $init ;
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('account','reloadredbox','getcircle'),
				'users'=>array('@'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('login','logout'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>$this->init,
				 'expression' => array('LandController','allowOnlyOwner')				
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('userme'),
				 'expression' => array('LandController','allowOnlyMember')				
			),
			// array('allow', // allow admin user to perform 'admin' and 'delete' actions
			// 	'actions'=>array('admin','delete'),
			// 	'users'=>array('admin'),
			// ),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	 public function actionInvite(){
	 	// $this->menu = 'uploaded';
	 	$this->renderPartial("invite",array(
	 		// 'model'=>$model
 		));
	 }
	  public function actionUploaded(){
	 	$this->menu = 'uploaded';
	 	$this->render("uploaded",array(
	 		// 'model'=>$model
 		));
	 }
	 public function actionAccount(){
	 	// $this->layout = "landing";
	 	// echo "masuk";
		$user = Yii::app()->user->id;
		// echo $user;
		// if (isset($user)){
		$model = User::model()->findByPk($user);
		$this->performAjaxValidation($model);
		// $model = new User;

		// print_r($model);
		// echo count($model);
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];

			// print_r($model->attributes);
			if ($model->validate()){	
				$model->password = $_POST['User']['new_password'];
				if ($model->update()){	
					// $this->redirect(array('land/account'));
					$this->redirect(array('site/logout'));
				}
				// else{
				// 	print_r($model->getErrors());
				// // echo $model->password."<br>";
				// // echo $_POST['User']['old_password'];
				// 	// echo $_POST['User']['old_password'];
				// }
				
			}else{

				// echo $model->password."<br>";
				// echo $_POST['User']['old_password'];
				// print_r($model->getErrors());
			}
			
				// echo "sukses";
			// else
	 	}

	 	$this->menu = "account";
	 	$this->render("account",array(
	 		'model'=>$model
 		));
	 }
 	public function allowOnlyOwner(){
 		$c =  Yii::app()->controller->id;
 		$a =  Yii::app()->controller->action->id;
 		$id = Yii::app()->user->id;
 		
 		$p_id = MasterPermission::model()->find("controllerID = '$c' and actionID='$a' ")->id;
 		$cek = Permission::model()->count("username = '$id' and permission_id = '$p_id' ");
 		if ($cek>0){
 			return true;
 		}else{
 			return false;
 		}

 		// $action = $this->action->Id;

        // if(Yii::app()->user->level()==1)
        //     return true;
    }
    public function allowOnlyMember(){
        if(Yii::app()->user->level()==3 || Yii::app()->user->level()==4 )
            return true;
    }
	public function init(){
		$permission = MasterPermission::model()->findAll();
		$per_new = array();
		foreach ($permission as $key) {
			array_push($per_new,$key->actionID);
		}

		// $this->init = array('dashboard','project','index','blog','financial');
		$this->init = $per_new;
		// $permission = false;
	}
	public function actionLogin(){
	$model=new LoginForm;

		if(isset($_POST['LoginForm']))
		{
			// print_r($_POST['LoginForm']);
			$model->attributes=$_POST['LoginForm'];
			// True
			// echo "<pre>";
			// print_r($model);
			// echo "</pre>";
			if($model->login()){
					$user = User::model()->findByPk(Yii::app()->user->id);
					if (count($user)!=0){						
						$user->last_login = date('Y-m-d h:i:s');
						$user->scenario = 'login';
						if ($user->save()){
							if ($user->level==1)
								$this->redirect(array('land/dashboard'));
							if ($user->level==2)
								$this->redirect(array('land/dashboard'));
							if ($user->level==3)
								$this->redirect(array('client/'));	
							if ($user->level==4)
								$this->redirect(array('client/userme'));
							
						}else{
							print_r($user->getErrors());
						}
					}
				// $user = Yii::app()->user->id;
				// $user = Pengguna::model()->find('username=:un',array(':un'=>$user));
				// $user = $user['hak_akses'];
				
				}else{
					echo "
					<script>
						alert('username or password incorect! please try again ')
					</script>

					";
				// echo "<pre>";
				// print_r($model);
				// echo "</pre>";
			}
		}
		
		// display the login form
		$this->renderPartial('login',array('model'=>$model));
	}

	public function actionBlog(){
		$this->menu = $this->action->Id;
		$this->render('blog',array());
	}
	public function actionUserme(){
		// $this->menu = $this->action->Id;
		$this->layout = 'landing-me';
		$this->render('userme',array());
	}
	public function actionIndex(){
		$this->menu = $this->action->Id;
		$this->render('index',array());
	}
	public function actionFinancial(){
		$this->menu = $this->action->Id;
		$this->render('index',array());
	}
	public function actionDashboard(){
		$this->menu = $this->action->Id;
		
		// $filterChain = "dashboard";
		//  $rules[] = array('allow');
		//  echo "<pre>";
		//  print_r($rules);
		//  echo "</pre>";
	 // 	 $filter = new CAccessControlFilter;
  //       $filter->setRules( $rules );
  //       $filter->filter($filterChain);
		// if (Yii::app()->user->isGuest){
		// 	$this->redirect('land/login');
		// }else{
		// 	// echo "hihihi";
		// }
		// $this->menu = $this->action->Id;
	
		// // $this->layout = "landing";
		// // echo "aman";
		$this->render('dashboard',array());
	}
	public function actionGetcircle(){
		$this->renderPartial('second-page',array());

	}
	public function actionConfiguration(){
		$this->menu = $this->action->Id;
		$this->render('configuration',array());

	}
	
	public function actionProject(){
		$this->menu = $this->action->Id;
		// $this->renderPartial('project',array());
		$this->render('project',array());
	}
	
	public function actionReloadredbox(){
		$this->menu = $this->action->Id;
		// $this->renderPartial('project',array());
		$this->renderPartial('red-box-dash',array());
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(array('land/login'));
	}

	
	protected function performAjaxValidation($model)
	{
	    if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	}
	
}