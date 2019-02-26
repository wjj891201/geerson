<?php

namespace app\modules\mobile;

/**
 * mobile module definition class
 */
class mobile extends \yii\base\Module
{

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\mobile\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->layout = 'main';
        // custom initialization code goes here
    }

}
