<?php

use yii\helpers\Url;

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>
<div class="contact-img">
    <img src="<?= $type['typepic'] ?>" />
</div>
<div class="contact-map">
    <?= $info['content']['content'] ?>
</div>