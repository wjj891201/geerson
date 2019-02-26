<?php

use yii\web\View;
use yii\helpers\Url;
use app\libs\Image;
use app\models\Advert;
use app\models\News;

$this->registerJsFile('@web/public/front/js/jquery.SuperSlide.2.1.2.js', ['depends' => ['app\assets\AppAsset'], 'position' => View::POS_HEAD]);

$this->title = $this->params['config']['sitename'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['config']['keyword']]);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['config']['description']], 'description');
?>

<div class="full_banner">
    <div class="bd">
        <ul>
            <?php $ads = Advert::get_ad(['atid' => 1, 'isclass' => 1]); ?>
            <?php foreach ($ads as $key => $vo): ?>
                <li><img src="<?= $vo['filename'] ?>" /></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="hd">
        <ul></ul>
    </div>
    <script>
        //banner
        jQuery(".full_banner").slide({
            titCell:".hd ul", 
            mainCell:".bd ul", 
            effect:"fold",  
            autoPlay:true, 
            autoPage:true,
            trigger:"click",
            interTime:3500
        });	
    </script> 
</div>
<div class="wrap">
    <div class="index_bg">
        <div class="ad">
            <?php $active = Advert::get_one(['atid' => 7, 'isclass' => 1]); ?>
            <img src="<?= $active ?>" />
        </div>
        <div class="ind_jd">
            <h1 class="h1">经典案例<a href="<?= Url::to(['article/list', 'tid' => 2]) ?>" class="more">更多>></a></h1>
            <ul class="clearfix">
                <?php $case = News::getNews(['mid' => 1, 'tid' => 2, 'max' => 6, 'lng' => 'cn']); ?>
                <?php foreach ($case as $key => $vo): ?>
                    <li> 
                        <a href="<?= Url::to(['article/detail', 'did' => $vo['did']]) ?>">
                            <img src="<?= Image::img($vo['pic'], 355, 265) ?>"/>
                            <span><?= $vo['title'] ?></span> 
                        </a> 
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="ind_fw">
            <h1 class="h2">服务客户</h1>
            <div class="fw_cont">
                <ul class="clearfix">
                    <?php $customer = Advert::get_ad(['atid' => 10, 'isclass' => 1]); ?>
                    <?php foreach ($customer as $key => $vo): ?>
                        <li><img src="<?= $vo['filename'] ?>" /></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>