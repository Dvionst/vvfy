<?php 

// if ($level==)
if  (!Yii::app()->user->isGuest){	
	$level = Yii::app()->user->level();
	// echo $this
	if ($level==1) 
		//$url='vvfy.land/index.php?r=land/dashboard';
		$url=('land/dashboard');
	else if ($level==2)
		//$url='vvfy.land/index.php?r=land/dashboard';
		$url=('land/dashboard');
	else if ($level==3)
	    //$url='vvfy.land/index.php?r=client/index';
		$url=('client/index');
	else if ($level==4)
		//$url='vvfy.land/index.php?r=client/index';
		$url=('client/index');

	// $this->redirect(array($url);
}

?>