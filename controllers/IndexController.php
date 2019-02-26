<?php

namespace app\controllers;

use Yii;
use app\controllers\CommonController;
use app\models\Advert;

class IndexController extends CommonController
{

    public function actionIndex()
    {
        $banner = Advert::get_ad(['atid' => 1]);
        return $this->render("index", ['banner' => $banner]);
    }

}
