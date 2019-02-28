<?php

namespace app\controllers;

use Yii;
use app\controllers\CommonController;
use app\models\Advert;
use app\libs\Tool;

class IndexController extends CommonController
{

    public function actionIndex()
    {
        $isMobile = Tool::isMobile();
        if ($isMobile)
        {
            return $this->redirect(['mobile/index/index']);
        }
        $banner = Advert::get_ad(['atid' => 1]);
        return $this->render("index", ['banner' => $banner]);
    }

}
