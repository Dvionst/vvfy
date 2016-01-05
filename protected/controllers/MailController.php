<?php 
class MailController extends Controller
{
	public function actionIndex()
	{
		// $this->layout = "blog";
		$this->renderPartial('project_notif',array());
		
	}

	public function actionInvite()
	{
		// $this->layout = "blog";
		$this->renderPartial('invite',array());
		
	}
	public function actionNewcomment()
	{
		$this->renderPartial('new_comment',array());		
	}



}