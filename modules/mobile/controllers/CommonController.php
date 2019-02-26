<?php

namespace app\modules\mobile\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\ArrayHelper;
use app\models\Config;
use app\models\Type;
use app\models\News;

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
        if (empty($tid))
        {
            //特殊导航
            $did = Yii::$app->request->get('did', '');
            $tid = News::find()->select('tid')->where(['did' => $did])->scalar();
        }
        $topid = Type::find()->select('topid')->where(['tid' => $tid])->scalar();
        $this->view->params['topid'] = $topid;
    }

}
