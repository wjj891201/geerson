<?php

namespace app\modules\mobile\controllers;

use app\modules\mobile\controllers\CommonController;
use app\models\Advert;

/**
 * Default controller for the `mobile` module
 */
class IndexController extends CommonController
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $banner = Advert::get_ad(['atid' => 1]);
        return $this->render('index', ['banner' => $banner]);
    }

}
