<?php

use yii\helpers\Url;
use app\models\Type;
use app\models\News;

$this->registerCssFile('@web/public/jj/css/about-enterprise.css', ['depends' => 'app\assets\JjAsset']);

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>
<style type="text/css">
    .m-banner{height:auto;background:none;width:100%;}
    .bgimg img{width:100%;}
    .main{overflow: inherit;z-index: 15;position: relative;}
</style>
<div class="m-banner bgimg" id="main_1">
    <img src="<?= $type['typepic'] ?>" />
</div>
<div class="main center">
    <div class="qyjs">
        <div class="qyjs-img">
            <img src="<?= $info['pic'] ?>" />
        </div>
        <div class="qyjs-js">
            <div class="qyjs-title" style="padding-top:30px;">
                <?= $info['title'] ?>
            </div>
            <div class="qyjs-title2">
                Company Profile
            </div>
            <div class="qyjs-content qyjs-introduction">
                <?= $info['content']['content'] ?>
            </div>
            <div class="cl">&nbsp;</div>
        </div>
    </div>
</div>
<br/>