<?php

class DefaultController extends Controller
{
	public $layout = "userpage";
	
	public function actionIndex()
	{
		// echo "masuk";
		$this->render('index');
	}
}