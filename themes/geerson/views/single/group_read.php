<?php

use app\models\Type;
use app\models\News;

//$this->registerCssFile('@web/public/jj/css/default.css', ['depends' => 'app\assets\JjAsset']);
$this->registerCssFile('@web/public/jj/css/styles.css', ['depends' => 'app\assets\JjAsset']);
$this->registerJsFile('@web/public/jj/js/tab.js', ['depends' => 'app\assets\JjAsset']);

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>

<?php $all = News::find()->where(['in', 'tid', [84, 85, 86, 87, 88, 89]])->all(); ?>
<article class="htmleaf-container">
    <div class="tabs">
        <div class="tabs-header">
            <div class="border" style="left: 76.4688px; width: 77px;"></div>
            <ul>
                <?php foreach ($all as $key => $vo): ?>
                    <li class="<?php if ($type['tid'] == $vo['tid']): ?>active<?php endif; ?>">
                        <a href="" tab-id="<?= $key + 1 ?>" ripple="ripple" ripple-color="#FFF"><?= $vo['title'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <nav class="tabs-nav">
                <i id="prev" ripple="ripple" ripple-color="#FFF" class="material-icons">&nbsp;&lt;&nbsp;</i>
                <i id="next" ripple="ripple" ripple-color="#FFF" class="material-icons">&nbsp;&gt;&nbsp;</i>
            </nav>
        </div>
        <div class="tabs-content" style="height: 22px;">

            <?php foreach ($all as $key => $vo): ?>
                <div tab-id="<?= $key + 1 ?>" class="tab <?php if ($type['tid'] == $vo['tid']): ?>active<?php endif; ?>" style="<?php if ($type['tid'] == $vo['tid']): ?>display: block;<?php else: ?>display: none;<?php endif; ?>">
                    <?= $vo['content']['content'] ?>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</article>
