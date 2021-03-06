<?php

class CalendarController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='kosong';

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
				'actions'=>array('getdeadline','index','view','hapus','editdesc'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
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

	public function actionGetDeadline($id){
		$model2 = array();
		$model = Project::model()->findByPk($id);
		$model2[0]["title"] = " " ; 
		$model2[0]["start"] = $model->due_date; 
		// $model2[0]["title"] = $model->project_name; 
		// $model2[0]["footer"] = "Paisley city"; 
		// $model2[0]["classname"] = "cinta";

		// echo "<pre>";
		// print_r($model);
		// echo "<pre>";
		echo json_encode($model2);

	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Calendar']))
		{	
			$pn = Project::model()->findByPk($_POST['Calendar']['project_id'])->project_name;
			$model=new Calendar;
			$model->attributes=$_POST['Calendar'];
			$model->description = $_POST['Calendar']['description']. " of";
			if($model->save())
				echo "sukses";
			else
				print_r($model->getErrors());
				// $this->redirect(array('view','id'=>$model->id));
		}

		// $this->render('create',array(
			// 'model'=>$model,
		// ));
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

		if(isset($_POST['Calendar']))
		{
			$model->attributes=$_POST['Calendar'];
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
	public function actionEditdesc(){
		if (Calendar::model()->updateByPk($_GET['id'],array('description'=>"$_GET[nilai]")) ){
			echo "sukses";
		}else{
			echo "id : ".$_REQUEST['id'];
			echo "nilai : ".$_REQUEST['nilai'];
		
		}
	}
	public function actionHapus()
	{
		// $this->layout = "asik";
		// if(Yii::app()->request->isPostRequest)
		// {
			// we only allow deletion via POST request
			if ($this->loadModel($_REQUEST['id'])->delete())
				echo "sukses";
			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			// if(!isset($_GET['ajax']))
				// $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		// // }
		// else
			// throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Calendar');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Calendar('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Calendar']))
			$model->attributes=$_GET['Calendar'];

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
		$model=Calendar::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='calendar-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
