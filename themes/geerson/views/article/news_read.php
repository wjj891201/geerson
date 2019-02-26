<?php

use yii\helpers\Url;
use app\models\Type;

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>

<div class="main-bd">
    <div class="wrap">
        <h2><?= $info['title'] ?></h2>
        <div class="txt-top">
            <i>浏览次数：<script type="text/javascript" src="<?= Url::to(['article/click', 'did' => $info['did']]) ?>"></script>次</i>
        </div>
        <div>
            <?= $info['content']['content'] ?>
        </div>
    </div>
</div>