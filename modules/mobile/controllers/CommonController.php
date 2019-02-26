<?php

namespace app\modules\mobile\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\ArrayHelper;
use app\models\Config;
use app\models\Type;

class CommonController extends Controller
{

    public function init()
    {
        //获取配置
        $config = Config::getConfig(['lng' => 'cn']);
        $config = ArrayHelper::map($config, 'name', 'value');
        $this->view->params['config'] = $config;
        //获取头部导航
        $tid = Yii::$app->request->get("tid");
        $tid = !empty($tid) ? $tid : '';
        $menu = Type::getMenu(['lng' => 'cn', 'upid' => 0], $tid);
        $this->view->params['menu'] = $menu;
    }

}
