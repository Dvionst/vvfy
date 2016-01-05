<?php
Yii::import('zii.widgets.CPortlet'); // you have to import the CPortlet first

class ResetPassWidget extends CWidget
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
        $model = new User();
        $this->render('ResetPassWidget', array('model'=>$model));
    }
}

?>