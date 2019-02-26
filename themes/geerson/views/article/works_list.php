<?php

use yii\helpers\Url;

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>
<div class="project imggray">
    <ul>
        <?php foreach ($data as $key => $vo): ?>
            <li>
                <a href="<?= Url::to(['article/detail', 'did' => $vo['did']]) ?>">
                    <img src="<?= $vo['pic'] ?>" alt="<?= $vo['title'] ?>">
                    <span class="title"><?= $vo['title'] ?></span>
                    <span class="small"><?= $vo['longtitle'] ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="clr"></div>
</div>