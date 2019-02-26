<?php

namespace app\controllers;

use Yii;
use yii\base\Theme;
use yii\web\Controller;
use yii\helpers\ArrayHelper;
use app\models\Config;
use app\models\Type;
use app\models\Skin;
use app\models\News;

class CommonController extends Controller
{

    public function init()
    {
        //切换模板
        $skin = Skin::findOne(['isclass' => 1]);
        if (!empty($skin['code']))
        {
            Yii::$app->view->theme = new Theme([
                'pathMap' => ['@app/views' => "@app/themes/" . $skin['code'] . "/views"],
                'baseUrl' => "@app/themes/" . $skin['code'] . "/views",
            ]);
        }
        //获取配置
        $config = Config::getConfig(['lng' => 'cn']);
        $config = ArrayHelper::map($config, 'name', 'value');
        $this->view->params['config'] = $config;
        //获取头部导航
        $tid = Yii::$app->request->get('tid', '');
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
