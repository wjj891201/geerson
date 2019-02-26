<?php

use yii\helpers\Url;
use app\models\News;
use app\models\Type;

$this->registerCssFile('@web/public/jj/css/service_base.css', ['depends' => 'app\assets\JjAsset']);
$this->registerCssFile('@web/public/jj/css/service1.css', ['depends' => 'app\assets\JjAsset']);
$this->registerCssFile('@web/public/jj/css/main.css', ['depends' => 'app\assets\JjAsset']);

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>
<style tyle="text/css" type="text/css">
    .main .mcontainer .mcontent .infos h2{line-height: 30px;padding:14px 0;color:#434343;font-size:16px;}
    .main .mcontainer .mcontent .infos p{line-height:26px;color:#656565;font-size:14px;}
</style>
<!--<style type="text/css">
.bgimg{background-image:url('/zgstyle/images/Product/banner57.png');display:none;}
</style>
<div class="m-banner bgimg">
<div class="container">
<div class="m-msg">
<h1></h1>
<h2></h2>
</div>
</div>
</div>-->
<!--<div class="nav-b">
    <div class="wrap-b">
        <h3 class="fl" style="width:auto;">服务与支持</h3>
        <ul class="fr">
            <li><a href="http://www.unisiot.com/a/fwyzc/xwzx/">新闻中心</a></li>
            <li><a href="http://www.unisiot.com/a/fwyzc/wdzx/">文档中心</a></li>
            <li><a href="http://www.unisiot.com/a/fwyzc/wtjd/">问题解答</a></li>
            <li><a href="http://www.unisiot.com/a/fwyzc/rjxz/">软件下载</a></li>
            <li><a href="http://www.unisiot.com/a/fwyzc/pxzx/">培训中心</a></li>
            <li class="current curr"><a href="http://www.unisiot.com/a/fwyzc/shfw/">售后服务</a></li>
        </ul>
    </div>
</div>-->

<?php $all = News::find()->where(['in', 'tid', [101, 102, 103, 104, 105, 106, 107]])->all(); ?>
<div class="main">
    <div class="container">
        <div class="minfo">
            <p>竭诚为客户提供完备、高效、周到的售后服务，“顾客至上、服务至上、信誉至上、效率至上”是我们的服务宗旨。我们致力于为所有用户提供卓越、高效的售后服务。</p>
        </div>
        <div class="mcontainer">
            <div class="mnav">
                <ul>
                    <?php foreach ($all as $key => $vo): ?>
                        <a href="<?= Type::getUrl($vo['tid']); ?>">
                            <li>
                                <h2><?= $vo['title'] ?></h2>
                                <div class="sbg"></div>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="mcontent">
                <h2 class="title"><?= $info['title'] ?></h2>
                <div class="infos">
                    <?= $info['content']['content'] ?>
                </div>
            </div>
        </div>
    </div>
</div>

