<?php

class RulesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='landing';

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
				'actions'=>array('index','view','setpermission'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionSetpermission(){
		// echo "set permission";
		$user =  $_REQUEST['user'];
		$permission_id =  $_REQUEST['per_id'];
		$bool =  $_REQUEST['bool'];
		echo $bool;
		if ($bool=="true")
			$bool = 1;
		else
			$bool = 0;

		// $ =  $_REQUEST['per_id'];
		$model = Permission::model()->count("username = '$user' and permission_id = '$permission_id' ");
		if ($model==0){
			$p = new Permission;
			$p->username = $user;
			$p->permission_id = $permission_id;
			$p->status = 1;
			if ($p->save())
				echo "added";
			else
				print_r($p->getErrors());

			
		}else{
			$p = Permission::model()->find("username = '$user' and permission_id = '$permission_id' ");
			$p->status = $bool;
			if ($p->save())
				echo "updated";
			else
				print_r($p->getErrors());
		}


	}
	public function actionAdmin()
	{
		$this->render('admin',array(
			// 'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	
}
