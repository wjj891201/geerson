<?php

use app\models\Type;
use app\models\News;

$this->registerCssFile('@web/public/jj/css/about-enterprise.css', ['depends' => 'app\assets\JjAsset']);

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>

<style>
    .training{width: 100%;height:auto;margin: 0 auto;text-align: center;padding-bottom: 60px;border-bottom: 1px solid #e5e5e5;}
    .wrap{width: 1174px;margin: 0 auto;}
    .training h2{font-size: 28px;line-height: 36px;color:#444444;padding-top: 50px;padding-bottom: 40px;}
</style>

<div class="training">
    <div class="wrap">
        <h2><?= $info['title'] ?></h2>
        <?= $info['content']['content'] ?>
    </div>
</div>
