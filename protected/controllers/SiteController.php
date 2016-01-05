<?php

class SiteController extends Controller
{
	public $layout = "main";
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
	      'oauth' => array(
	        // the list of additional properties of this action is below
	        'class'=>'ext.hoauth.HOAuthAction',
	        // Yii alias for your user's model, or simply class name, when it already on yii's import path
	        // default value of this property is: User
	        'model' => 'User', 
	        // map model attributes to attributes of user's social profile
	        // model attribute => profile attribute
	        // the list of avaible attributes is below
	        'attributes' => array(
	          'username' => 'email',
	          //'fname' => 'firstName',
	          //'lname' => 'lastName',
	          //'gender' => 'genderShort',
	          //'birthday' => 'birthDate',
	          // you can also specify additional values, 
	          // that will be applied to your model (eg. account activation status)
	          'confirm_email' => 1,
	        ),
	        ), 
			'oauthadmin' => array(
				'class'=>'ext.hoauth.HOAuthAdminAction',
			), 			
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
			'login.' =>  array('class'=>'application.components.LoginFormWidget'), 
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// $this->layout = "cek"; 
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if(Yii::app()->user->isGuest){
			$this->render('index');
		}else{
			$level=Yii::app()->user->level();
			if ($level==1){
				//$url='vvfy.land/index.php?r=land/dashboard';
				$url=('land/dashboard');
			}else if ($level==2){
				//$url='vvfy.land/index.php?r=land/dashboard';
				$url=('land/dashboard');
			}else if ($level==3){
			    //$url='vvfy.land/index.php?r=client/index';
				$url=('client/index');
			}else if ($level==4){
				//$url='vvfy.land/index.php?r=client/index';
				$url=('client/index');
			}	
			$this->redirect(array($url));
		}
	}
	public function actionBackend()
	{
		// echo "asdasd";
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('contact');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		// echo "Masuk";
		$this->layout = "error";
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error',$error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		// $this->layout = "main";
		// echo "asdasd";
		$this->render('contact',array('model'=>$model));
	}
 
	/**
	 * Displays the login page
	 */

	public function actionLoginAjax(){
		$model=new LoginForm;

		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// True
			// echo "<pre>";
			// print_r($model);
			// echo "</pre>";
			if($model->validate() && $model->login()){
					$user = User::model()->findByPk(Yii::app()->user->id);
					if($user->confirm_email == 1){
						if (count($user)!=0){						
							$user->last_login = date('Y-m-d h:i:s');
							$user->scenario = 'login';
							if ($user->save()){
								if ($user->level==1){
									//$url='vvfy.land/index.php?r=land/dashboard';
									$url=('land/dashboard');
								}else if ($user->level==2){
									//$url='vvfy.land/index.php?r=land/dashboard';
									$url=('land/dashboard');
								}else if ($user->level==3){
								    //$url='vvfy.land/index.php?r=client/index';
									$url=('client/index');
								}else if ($user->level==4){
									//$url='vvfy.land/index.php?r=client/index';
									$url=('client/index');
								}	
							}
						}
	                    echo CJSON::encode(array(
	                        'login'=>'success',
	                        //'redirect'=>$url,
	                        'redirect' => $this->createUrl($url),
	                    ));
	                }else{
						echo CJSON::encode(array(
	                        'login'=>'failed'
	                    ));                	
	                }
				
				}else{
					echo CJSON::encode(array(
                        'login'=>'failed'
                    ));
				// echo "<pre>";
				// print_r($model);
				// echo "</pre>";
			}
		}
	}



	public function actionLogin(){
		$model=new LoginForm;

		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// True
			// echo "<pre>";
			// print_r($model);
			// echo "</pre>";
			$url='site/index';
			if($model->validate() && $model->login()){
					$user = User::model()->findByPk(Yii::app()->user->id);
					if($user->confirm_email == 1){
						if (count($user)!=0){						
							$user->last_login = date('Y-m-d h:i:s');
							$user->scenario = 'login';
							if ($user->save()){
								if ($user->level==1);
									$url=('land/dashboard');
								if ($user->level==2);
									$url=('land/dashboard');
								if ($user->level==3);
									$url=('land/userme');
								if ($user->level==4);
									$url=('land/userme');
							}
						}            	
	                }
				
			}
		}
		$this->redirect(array($url));    
	}

	public function actionSocialLogin()
    {
        //Yii::import('components.HybridAuthIdentity');
        $path = Yii::getPathOfAlias('ext.HybridAuth');
        require_once $path . '/hybridauth-' . HybridAuthIdentity::VERSION . '/hybridauth/index.php';
 
    }

	/*public function actionLogin()
	{
		if(isset($_REQUEST['email']))
		{
			$model=new LoginForm;
			// echo $_REQUEST['email']."<br>";
			// echo $_REQUEST['password']."<br>";
			$model->username=$_REQUEST['email'];
			$model->password=$_REQUEST['password'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				$user = User::model()->findByPk(Yii::app()->user->id);
				$user->last_login = date('Y-m-d h:i:s');
				$user->scenario = 'login';
				if ($user->save()){
					echo $user->level;
					
				}else{
					print_r($user->getErrors());
				}
				// echo "succesfull";

			}
				// $this->redirect(Yii::app()->user->returnUrl);
			else{
				echo "failed";
				// print_r($model->getErrors());
			}
		}else{
			echo "ga post ke login form";
		}
		
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(array('site/index'));
	}
}