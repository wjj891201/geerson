<?php

/**
 * 功能描述
 * ============================================================================
 * * All Rights Reserved by Renyitui Network Technology Co,.Ltd of JIANGSU.
 * 网站地址: http://www.renyitui.com；
 * ============================================================================
 * $Author: wujiepeng $
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\Lng;

class ErrorController extends Controller
{

    public function init()
    {
        $result = Lng::getData(['isopen' => 1]);
        $this->view->params['all_lng'] = $result;
    }

    public function actionForbidden()
    {
        $this->layout = "main";

        return $this->render('index');
    }

}

?>
