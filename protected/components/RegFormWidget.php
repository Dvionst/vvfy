<?php
Yii::import('zii.widgets.CPortlet'); // you have to import the CPortlet first

class RegFormWidget extends CWidget
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
        $member = new Member();
        $this->render('RegFormWidget', array('user'=>$user,'member'=>$member));
    }
}

?>