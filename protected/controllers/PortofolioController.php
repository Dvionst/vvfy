<?php

class PortofolioController extends Controller
{

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
				'actions'=>array('get'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(''),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionGet(){
		$offset=$_POST['offset'];
		$limit=$_POST['limit'];
		$except=$_POST['except'];

		$data = Yii::app()->db->createCommand()
		->select("*")
		->from('portofolio')
		->limit($limit)
		->offset($offset)
		->where(' id not in ('.$except.')')
		->order('id desc')
		->queryAll();

		$remain = Yii::app()->db->createCommand()
		->select("*")
		->from('portofolio')
		->limit(1)
		->offset($offset+$limit)
		->where(' id not in ('.$except.')')
		->order('id desc')
		->queryAll();

		$html = $this->renderPartial('get',array(
			'data'=>$data,
		),true);

	    echo CJSON::encode(array(
            'html'=>$html,
           	'remain'=>sizeof($remain),
        ));
	}

	public function loadModel($id)
	{
		$model=Portofolio::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}