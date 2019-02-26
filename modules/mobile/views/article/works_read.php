<?php

use yii\helpers\Url;

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>
<div class="w100 mb10 imgss">
    <?php if ($info['album']): ?>
        <?php foreach ($info['album'] as $key => $vo): ?>
            <img src="<?= $vo['picfile'] ?>" alt="">
        <?php endforeach; ?>
    <?php endif; ?>
</div>