<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Type;
use app\models\Advert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body>
        <?php $this->beginBody() ?>
        <!--header-->
        <div class="header">
            <div class="topArea">
                <div class="wrap clearfix">
                    <div class="logo">
                        <a href="../">
                            <img src="<?= $this->params['config']['logo'] ?>" width="180" height="65" />
                        </a>
                    </div>
                    <div class="nav">
                        <ul class="clearfix">
                            <?php foreach ((array) $this->params['menu'] as $key => $vo): ?>
                                <li><a href="<?= Type::getUrl($vo['tid']); ?>" <?php if ($vo['select'] == 1): ?>class="cur"<?php endif; ?>><?= $vo['typename'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="header_right">
                        <div class="header_btn">
                            <a href="<?= Url::to(['member/center']) ?>">
                                <img src="/public/front/images/header_btn.png" />
                            </a>
                        </div>
                        <div class="header_login">
                            <?php if (Yii::$app->session['member']['isLogin'] == 1): ?>
                                <a href="<?= Url::to(['member/center']) ?>"><?= Yii::$app->session['member']['username'] ?></a> 丨 <a href="<?= Url::to(['public/logout']) ?>">退出</a>
                            <?php else: ?>
                                <a href="<?= Url::to(['public/login']) ?>">登录</a> 丨 <a href="<?= Url::to(['public/signup']) ?>">注册</a> 
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="head_tel">
                    <div class="wrap clearfix"> 客服电话：400-160-1100&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;025-85774822 </div>
                </div>
            </div>
        </div>
        <!--banner-->
        <?= $content ?>
        <!--footer-->
        <div class="footer">
            <div class="wrap">
                <div class="footer01 clearfix">
                    <div class="network clearfix">
                        <dl>
                            <dt>简介</dt>
                            <dd><a href="<?= Url::to(['article/list', 'tid' => 2]) ?>">经典案例</a></dd>
                            <dd><a href="<?= Url::to(['single/detail', 'tid' => 7]) ?>">服务流程</a></dd>
                            <dd><a href="<?= Url::to(['single/detail', 'tid' => 8]) ?>">付费方式</a></dd>
                            <dd><a href="<?= Url::to(['single/detail', 'tid' => 9]) ?>">联系方式</a></dd>
                        </dl>
                        <dl>
                            <dt>经典案例</dt>
                            <dd><a href="<?= Url::to(['article/list', 'tid' => 3]) ?>">家装效果图</a></dd>
                            <dd><a href="<?= Url::to(['article/list', 'tid' => 4]) ?>">公装效果图</a></dd>
                            <dd><a href="<?= Url::to(['article/list', 'tid' => 5]) ?>">建筑效果图</a></dd>
                            <dd><a href="<?= Url::to(['article/list', 'tid' => 6]) ?>">园林效果图</a></dd>
                        </dl>
                    </div>
                    <div class="code">
                        <h1>关注我们</h1>
                        <?php $qrcode = Advert::get_one(['atid' => 11, 'isclass' => 1]); ?>
                        <p><img src="<?= $qrcode ?>" width="114" height="114" /></p>
                    </div>
                    <div class="txt">
                        <h1>联系我们</h1>
                        <p>
                            客服热线：13966759087  18133693620<br/>
                            服务Q&nbsp;Q :31002665  66855999<br/>
                            邮箱投诉： yipints@qq.com<br/>
                            工作时间：9:00-18:00<br/>
                            加班时间：18:00-21:30
                        </p>
                    </div>
                </div>
                <div class="footer02"> &copy; 2004-2017 清泽效果图  版权所有 <a href="http://www.miibeian.gov.cn/" rel="nofollow" target="_blank">苏ICP备10079903号-3</a>  </div>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
