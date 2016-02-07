<?php

class BlogController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	// public $layout='landing';

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
				'actions'=>array('change','baru','addcomment','view','updateblog','index','view','getsub','addblog','deleteblog','post'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
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
	public function actionAddcomment(){
		$this->layout = " ";
		$model=new BlogComment;
		$model->datetime = date('Y-m-d H:i:s');
		$model->name = $_REQUEST['name'];
		$model->comment = $_REQUEST['comment'];
		$model->blog_id = $_REQUEST['blog_id'];
		if($model->save()){
			$this->redirect(array('blog/view','id'=>$_REQUEST['blog_id']));
		}else{
			print_r($model->getErrors());
		}

	}
	public function actionUpdateblog(){
		// echo "masuk";
		// $this->layout = " ";
		// echo "hihi".$_REQUEST['id'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_name=$_FILES['image']['name'];
		$detail = Blog::model()->findByPk($_REQUEST['id']);
		$detail->title = $_REQUEST['title'];
		$detail->content = $_REQUEST['content'];
		$detail->category = $_REQUEST['category'];
		$detail->tags = $_REQUEST['tags'];
		$time = time();				
		// if (isset($_FILES['image']))
		// 	$detail->image = $time.$file_name;
		$im = $detail->image;
		if($detail->save()){
					// $file_name=$_FILES['image']['name'];
			if (isset($_FILES['image']['name'])){			
				move_uploaded_file($file_tmp,Yii::app()->basePath."/../img/blog/$im");	
					// echo "save and upload sukses";
				
			}
			
				$this->redirect(array('land/blog',));

		}else{
			print_r($detail->getErrors());
		}

		// print_r($detail);
		// // echo $detail->title;
		// $array = array();
		// $array['title'] = $detail->title;
		// $array['content'] = $detail->content;
		// $array['category'] = $detail->category;
		// $array['tags'] = $detail->tags;
		// echo $array['title'];
		// foreach ($detail as $d){
			// echo " ".$d->datetime." ";
		// }
		// echo json_encode($array);
		// print_r($array);
	}
	public function actionDeleteblog(){
		if (Blog::model()->deleteByPk($_REQUEST['id']))
			echo "sukses";
		else
			echo "eror ".$_POST['id'];
		// if ($this->loadModel($_REQUEST['idb'])->delete())
			// echo "sukses";
		// else
			// echo "eror";
	}
	public function actionBaru(){
		$this->layout = "landing";
		$this->render('baru');
	}
	public function actionChange($id){
		$model = Blog::model()->findByPk($id);
		$this->layout = "landing";
		$this->render('update',array(
			'model'=>$model,
		));
	}
	public function actionAddblog(){
		// print_r($_REQUEST['tags']);
		$file_name=$_FILES['image']['name'];
		$file_size=$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];
		$model = new Blog;
		$model->title = $_REQUEST['title'];
		$model->content = $_REQUEST['content'];
		$model->category = $_REQUEST['category'];
		// $model->image= "tes1.jpg";
		$time = time();
		$model->image = $time.$file_name;
		$model->datetime= date('Y-m-d H:i:s');
		$model->username = Yii::app()->user->id;
		$model->tags =  $_REQUEST['tags'];
		if ($model->save()){
			if (move_uploaded_file($file_tmp,Yii::app()->basePath."/../img/blog/$time$file_name")){
				// echo "sukses";
				$this->redirect(Yii::app()->user->returnUrl);
				// print_r($_REQUEST['tags']);
				// foreach ($_REQUEST['tags'] as $d){
				// 	$bd = new BlogDetail;
				// 	$bd->blog_id = $model->id;
				// 	$bd->tag_id = $d;
				// 	$bd->save();
				// 	$st = "sukses";
				// }
			if ($st=='sukses'){
				echo "sukses";
			}
			}else{
				echo "eror";
			}
		}
		else	
			print_r($model->getErrors());
	}
	public function actionGetsub($id_data){
		// echo $id_data;
		$id_head = HeadCategories::model()->find("id_name='$id_data'")->id;
		// echo $id_head;
		$data = DetailCategories::model()->findAll("id_head = $id_head");
		echo  "<ul class='sub-topics' >";
		foreach ($data  as $d){
			echo "<li >$d[name]</li>";
		}
		echo "</ul>";
	}
	public function actionView()
	{
		$this->layout = "blog";
		$this->render('view',array(
			// 'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['CategoriesMain']))
		{
			$model=new CategoriesMain;
			$model->attributes=$_POST['CategoriesMain'];
			if($model->save())
				echo "sukses";
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
		$this->layout = "landing";
		$model=Blog::model()->findByPk($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Blog']))
		{
			$model->attributes=$_POST['Blog'];
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
		$this->layout = "blog";
			$this->render('index',array(
		));
		
	}


	public function actionPost(){
		$offset=$_POST['offset'];
		$limit=$_POST['limit'];
		$category=$_POST['category'];

		if($category==""){
			$fcat="category <> ''";
		}else{
			$fcat="category = '{$category}'";
		}

		$data = Yii::app()->db->createCommand()
		->select("*")
		->from('blog')
		->limit($limit)
		->offset($offset)
		->where($fcat)
		->order('datetime desc')
		->queryAll();

		$remain = Yii::app()->db->createCommand()
		->select("*")
		->from('blog')
		->limit(1)
		->offset($offset+$limit)
		->where($fcat)
		->order('datetime desc')
		->queryAll();

		$html = $this->renderPartial('post',array(
			'data'=>$data,
		),true);

	    echo CJSON::encode(array(
            'html'=>$html,
           	'remain'=>sizeof($remain),
        ));
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout = "landing";
		// $model=new Blog('search');
		// $model->unsetAttributes();  // clear any default values
		// if(isset($_GET['Blog']))
		// 	$model->attributes=$_GET['Blog'];

		// $this->render('admin',array(
		// 	'model'=>$model,
		// ));
		$filtersForm=new FiltersForm;
			if (isset($_GET['FiltersForm']))
				$filtersForm->filters=$_GET['FiltersForm'];	
			// $user  = Yii::app()->user->name;
			// $id = Nasabah::model()->find("username='$user'")->id_nasabah; 
			// $status = Pengguna::model()->find('user=:un',array(':un'=>"$user"))->status;
		
			$dataProvider = Yii::app()->db->createCommand()
			->select('*')
			->from('blog')
			->queryAll();
			// $string_model =  json_encode($dataProvider);
			$filteredData=$filtersForm->filter($dataProvider);
			$model=new CArrayDataProvider($filteredData,array(
			 'sort'=>array(
		        'attributes'=>array(
		             'id', 'title', 'datetime','username',
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
		$model=CategoriesMain::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='categories-main-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
