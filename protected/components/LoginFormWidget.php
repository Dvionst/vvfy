<?php
Yii::import('zii.widgets.CPortlet'); // you have to import the CPortlet first

class LoginFormWidget extends CWidget
{

    public static function actions(){
        return array(
                   'GetLogin'=>'application.components.actions.getLogin',
        );
    }
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
        $model = new LoginForm();
        $this->render('LoginFormWidget', array('model'=>$model));
    }
}

?>