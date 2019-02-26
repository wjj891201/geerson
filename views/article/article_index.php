<?php

use yii\helpers\Url;
use app\models\Type;
use app\models\News;

$this->registerCssFile('@web/public/front/css/tempates_div.css', ['depends' => 'app\assets\AppAsset']);

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>

<div class="w smtop">
    <?= $this->render('../layouts/left.php'); ?>
    <div class="righter">
        <div class="subject" style="margin-bottom: 15px;"> 
            <?= $this->render('../layouts/path.php'); ?>
            <?php $cate = Type::getone(['tid' => $info['tid']]); ?>
            <b><?= $cate['typename'] ?></b> 
        </div>
        <div class="frameleft margintleft10">
            <?php
            $child = Type::getData(['AND', ['upid' => $info['tid']], ['IN', 'styleid', [1, 2]]]);
            ?>
            <?php foreach ($child as $key => $vo): ?>
                <div class="fup2 margintop8">
                    <span class="spantitle"><?= $vo['typename'] ?></span>
                    <span class="spanmone">
                        <a class="morn" title="<?= $vo['typename'] ?>" href="<?= Url::to(['article/list', 'tid' => $vo['tid']]) ?>">更多消息</a>
                    </span>
                </div>
                <div class="fcontent2">
                    <?php $news = News::getNews(['mid' => $vo['mid'], 'tid' => $vo['tid'], 'max' => 6, 'lng' => 'cn']); ?>
                    <ul class="textlist" style="width:100%">
                        <?php foreach ($news as $k => $v): ?>
                            <li>
                                <span class="names"><?= date('Y-m-d', $v['addtime']) ?></span> 
                                <a class="infolist" title="<?= $v['title'] ?>" href="<?= Url::to(['article/detail', 'did' => $v['did']]) ?>">
                                    <?= $v['title'] ?>
                                </a> 
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="fdown2"></div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="clear"></div>
</div>