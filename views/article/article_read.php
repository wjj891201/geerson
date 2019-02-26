<?php

use yii\helpers\Url;
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
        <div class="artshow">
            <h1 class="title"><?= $info['title'] ?></h1>
            <div class="info">
                发布时间：<?= date('Y-m-d H:i:s', $info['addtime']) ?>　
                浏览次数：<span id="hits"><script type="text/javascript" src="<?= Url::to(['article/click', 'did' => $info['did']]) ?>"></script></span>
            </div>
            <div class="content infoimg">
                <?= $info['content']['content'] ?>
            </div>
            <div class="pn">
                <?php if (!empty($up)): ?>
                    <div class="pre">上一篇：
                        <a href="<?= Url::to(['article/detail', 'did' => $up['did']]) ?>" title="<?= $up['title'] ?>">
                            <?= $up['title'] ?>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (!empty($down)): ?>
                    <div class="next">下一篇：
                        <a href="<?= Url::to(['article/detail', 'did' => $down['did']]) ?>" title="<?= $down['title'] ?>">
                            <?= $down['title'] ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>