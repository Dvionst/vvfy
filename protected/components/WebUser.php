<?php
class WebUser extends CWebUser{
	public $_model;
	
	public function loadModel()
	{
		// echo "masuk";
		// if($this->_model==null)
		// {
			// echo $this->id;
			$this->_model=User::model()->findByPk(Yii::app()->user->id);
			return "masuk";
		 
		// }
		// return $this->_model;
	}
		
	protected function level()
	{
		$user=$this->loadModel();
		if($user)	
			return $user->level;
			// return "asd";

	}
	protected function MemberTipe()
	{
		$user=$this->loadModel();
		$user = $user->username;
		if($user){
			$tipe = Member::model()->find("email = '$user' ")->type_account;
			return $tipe;
		}else{
			return "Guest";
		}

	}
}
?>