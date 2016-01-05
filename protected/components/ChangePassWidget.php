<?php
Yii::import('zii.widgets.CPortlet'); // you have to import the CPortlet first

class ChangePassWidget extends CWidget
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
        $user = new User();    
        $this->render('ChangePassWidget', array('user'=>$user));
    }
}

?>