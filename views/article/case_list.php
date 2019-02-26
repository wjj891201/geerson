<?php

use app\libs\Image;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use app\models\Type;

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>

<div class="banner">
    <img src="<?= $info['typepic'] ?>" />
</div>

<div class="wrap">
    <div class="index_bg">
        <div class="nav_list">
            <ul class="clearfix">
                <?php $child = Type::getData(['upid' => 2]); ?>
                <?php foreach ($child as $key => $vo): ?>
                    <li><a href="<?= Type::getUrl($vo['tid']); ?>" <?php if ($vo['tid'] == $info['tid']): ?>class="cur"<?php endif; ?>><?= $vo['typename'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="ind_jd">
            <h1 class="h3"><?= $info['typename'] ?></h1>
            <ul class="clearfix">
                <?php foreach ($data as $key => $vo): ?>
                    <li> 
                        <a href="<?= Url::to(['article/detail', 'did' => $vo['did']]) ?>"> 
                            <img src="<?= Image::img($vo['pic'], 355, 265) ?>"/> 
                            <span><?= $vo['title'] ?></span> 
                        </a> 
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

