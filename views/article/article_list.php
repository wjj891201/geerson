<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
use app\models\Type;

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>

<div class="w smtop">
    <?= $this->render('../layouts/left.php'); ?>
    <div class="righter">
        <div class="subject"> 
            <?= $this->render('../layouts/path.php'); ?>
            <?php $cate = Type::getone(['tid' => $info['tid']]); ?>
            <b><?= $cate['typename'] ?></b> 
        </div>
        <ul class="news_l">
            <?php foreach ($data as $key => $vo): ?>
                <div class="top_news" style="border-bottom-color:#ccc; ">
                    <h2>
                        <span style="font-size:12px; color:#999; float:right;"><?= date('Y-m-d', $vo['addtime']) ?></span>
                        <a href="<?= Url::to(['article/detail', 'did' => $vo['did']]) ?>" title="<?= $vo['title'] ?>">
                            <?= $vo['title'] ?>
                        </a>
                    </h2>
                    <p><?= mb_substr($vo['summary'], 0, 135, 'utf-8') ?></p>
                </div>
            <?php endforeach; ?>
        </ul>
        <div class="list_page page_group">
            <?=
            LinkPager::widget([
                'pagination' => $pages,
            ]);
            ?>
        </div>
    </div>
    <div class="clear"></div>
</div>