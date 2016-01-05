<?php
Yii::import('zii.widgets.CPortlet'); // you have to import the CPortlet first

class EditProfileWidget extends CWidget
{

    /**
     * Is called when $this->beginWidget() is called
     */
    public function init()
    {

    }

    /**
     * Is called when $this->endWidget() is called
     */
    public function run()
    {
        //$model = Member::model()->findByAttributes(array('email'=>Yii::app()->user->name));
        $model = new Member();
        $this->render('EditProfileWidget', array('model'=>$model));
    }
}

?>