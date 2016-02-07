<?php

class TeamController extends Controller
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
				'actions'=>array('index','view'),
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
	public function actionCreate()
	{
		// $transaction=$connection->beginTransaction();
		// try
		// {
		$model=new Team;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_REQUEST['Team']))
		{
		$rnd = rand(0,9999);  // generate random number between 0-9999
		$model->attributes=$_POST['Team'];
	    $name=CUploadedFile::getInstance($model,'image');
	    $model->image =CUploadedFile::getInstance($model,'image');
		$fileName = "{$rnd}-{$name}";
		// echo $fileName;
		// exit;
		// $model->image = $fileName; 
		if($model->save()){
			if ($model->image->saveAs(Yii::app()->basePath."/../img/team/$fileName")){
				// $transaction->commit();
				$model->image = $fileName;
				$model->update();
				$this->redirect(array('admin'));
			}
			else{
				// $transaction->rollback();
			}

		}
		}

		$this->render('create',array(
			'model'=>$model,
		));
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

		if(isset($_POST['Team']))
		{
		    $name=CUploadedFile::getInstance($model,'image');
		    $rnd = rand(0,9999);  // generate random number between 0-999
			$model->attributes=$_POST['Team'];
		    $model->image =CUploadedFile::getInstance($model,'image');
	    	$fileName = "{$rnd}-{$name}";

			if($model->save()){
				if (!empty($model->image)){
					$model->image->saveAs(Yii::app()->basePath."/../img/team/$fileName");
					$model->image = $fileName;
					$model->update();
				}
				$this->redirect(array('admin','id'=>$model->id));
			}
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
		$dataProvider=new CActiveDataProvider('Team');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout = "landing";

		$filtersForm=new FiltersForm;
			if (isset($_GET['FiltersForm']))
				$filtersForm->filters=$_GET['FiltersForm'];	
			// $user  = Yii::app()->user->name;
			// $id = Nasabah::model()->find("username='$user'")->id_nasabah; 
			// $status = Pengguna::model()->find('user=:un',array(':un'=>"$user"))->status;
		
			$dataProvider = Yii::app()->db->createCommand()
			->select('*')
			->from('team')
			->queryAll();
			// $string_model =  json_encode($dataProvider);
			$filteredData=$filtersForm->filter($dataProvider);
			$model=new CArrayDataProvider($filteredData,array(
			 'sort'=>array(
		        'attributes'=>array(
		             'id', 'name', 'username','skype'
		        ),
		  	  ),
		    'pagination'=>array(
		        'pageSize'=>10,
		    ),
			)

			);
			$this->render('admin',array(
				'model'=>$model,
				'filtersForm' => $filtersForm,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Team::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='team-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}