<?php

class CalculationHeadController extends Controller
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
				'actions'=>array('create','SendMail'),
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

	public function SendMail($data,$detail)
    {   
		Yii::import('ext.yii-mail.YiiMailMessage');
		$message = new YiiMailMessage;
		$message->view = "price_submission";
		$params = array('data'=>$data,'detail'=>$detail);
		$message->setBody($params, 'text/html');
		$message->subject = "Price calculation submission";
		$message->addTo($data->email);
		$message->from = Yii::app()->params['adminEmail'];
		if (Yii::app()->mail->send($message))
			return "sukses";
		
    }	

	public function actionCreate()
	{
		$head=new CalculationHead;
		if(isset($_POST['CalculationHead'])){
			$head->attributes=$_POST['CalculationHead'];	
			$head->scenario = $head->project_type;
			$valid=$head->validate();
			$valid2=true;
			if(isset($_POST['CalculationDetail'])){
				$det = array();
				$i=0;
				$errorDet="";
				$detail = $_POST['CalculationDetail'];
				foreach ($detail as $data) {
				 	$det[$i] = new CalculationDetail;
				 	$det[$i]->area_type=$data['area_type'];
				 	$det[$i]->area_size=$data['area_size'];
				 	$det[$i]->head_id=$i;
				 	if(!$det[$i]->validate()){
				 		$errorDet=$det[$i];
				 		$valid2=false;
				 		break;
				 	}
				 	$i+=1;
				}
			}

			if($valid&&$valid2){
				$head->datetime=new CDbExpression('NOW()');
				$head->deadline=date(
			      'Y-m-d', // convert the timestamp to the mySQL format
			      mktime(        // create the timestamp from the posted date and time vars
			        0, // set the hour
			        0, // set the min
			        0, // set the sec
			        $head->month, // set the month
			        $head->date, // set the day
			        $head->year // set the year
			        )
			     );
				if($head->save()){
					if(isset($det)){
						foreach ($det as $d) {
							$d->head_id=$head->id;
							$d->save();
						}
					}
					$this->SendMail($head,$det);
					echo CJSON::encode(array(
		                    'result'=>'success',
		            ));
				}
			}else{
				//print_r($head->getErrors());
				echo CJSON::encode(array(
	                'result'=>'failed',
	                'vc'=>CHtml::error($head,'views_count'),
	                'ia'=>CHtml::error($head,'interior_areas'),
	                'nv'=>CHtml::error($head,'number_views'),
	                'sop'=>CHtml::error($head,'project_style'),
	                'pt'=>CHtml::error($head,'product_type'),
	                'date'=>CHtml::error($head,'date'),
	                'month'=>CHtml::error($head,'month'),
	                'year'=>CHtml::error($head,'year'),
	                'ref'=>CHtml::error($head,'reference'),
	                'email'=>CHtml::error($head,'email'),
	                'area_type'=>$errorDet ? CHtml::error($errorDet,'area_type') : "",
	                'area_size'=>$errorDet ? CHtml::error($errorDet,'area_size') : "",
	                'det_idx'=>$errorDet ? $errorDet->head_id+1 : 0,
	            ));
			}
		}
	}


	public function loadModel($id)
	{
		$model=CalculationHead::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}