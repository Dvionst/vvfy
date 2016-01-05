<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
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
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// $this->layouts = "index";
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	public function actionBackend()
	{
		echo "asdasd";
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
	public function actionLogin()
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