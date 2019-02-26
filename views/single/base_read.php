<?php

use app\models\Type;

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>
<div class="banner">
    <img src="<?= $type['typepic'] ?>" />
</div>
<div class="wrap">
    <div class="article_cont">
        <?= $info['content']['content'] ?>
    </div>
</div>
