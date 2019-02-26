<?php

use yii\helpers\Url;
use app\models\Advert;

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>

<div class="w100">
    <img src="<?= $info['typepic'] ?>">
</div>
<div class="about-title"></div>
<div class="about-con">
    <?= $info['content'] ?>
</div>
<?php foreach ($data as $key => $vo): ?>
    <div class="about-title"><?= $vo['title'] ?></div>
    <div class="about-con">
        <?= $vo['content']['content'] ?>
    </div>
    <div class="w100">
        <img src="<?= $vo['pic'] ?>">
    </div>
<?php endforeach; ?>


