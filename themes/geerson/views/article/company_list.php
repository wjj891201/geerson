<?php

use yii\helpers\Url;
use app\models\Advert;

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>
<div class="contact-img">
    <img src="<?= $info['typepic'] ?>">
</div>
<div class="info mb50">
    <ul>
        <li>
            <div class="info-content ml50 mt30 mr50">
                <?= $info['content'] ?>
            </div>
        </li>
        <li>
            <div class="info-other mr30"></div>
        </li>
    </ul>
    <div class="clr"></div>
</div>
<?php foreach ($data as $key => $vo): ?>
    <?php if ($key % 2 == 0): ?>
        <div class="info">
            <ul>
                <li>
                    <div class="info-title mt50 ml50"><?= $vo['title'] ?></div>
                    <div class="info-more ml50 mt30 mr50">
                        <?= $vo['content']['content'] ?>
                    </div>
                </li>
                <li>
                    <img src="<?= $vo['pic'] ?>">
                </li>
            </ul>
            <div class="clr"></div>
        </div>
    <?php else: ?>
        <div class="info">
            <ul>
                <li>
                    <img src="<?= $vo['pic'] ?>">
                </li>
                <li>
                    <div class="info-title mt50 ml50"><?= $vo['title'] ?></div>
                    <div class="info-more ml50 mt30 mr50">
                        <?= $vo['content']['content'] ?>
                    </div>
                </li>
            </ul>
            <div class="clr"></div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
<?php $filename = Advert::get_one(['atid' => 14]) ?>
<img src="<?= $filename ?>" width="100%" alt="">