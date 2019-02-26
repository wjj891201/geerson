<?php

use app\assets\GsAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Type;

GsAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body oncontextmenu="return false" onselectstart="return false" ondragstart="return false" onbeforecopy="return false" oncopy=document.selection.empty() onselect="document.selection.empty()">
        <?php $this->beginBody() ?>
        <div class="header">
            <div class="nav fl">
                <ul>
                    <?php if ($this->context->id == 'article' && ($this->params['topid'] == 110 || $_GET['tid'] == 110)): ?>
                        <?php $tid_arr = Type::find()->select('tid')->where(['upid' => 110])->asArray()->column(); ?>
                        <?php $works = Type::find()->select(['tid', 'typename', 'typename_en'])->where(['tid' => $tid_arr])->asArray()->orderBy(['pid' => SORT_ASC])->all(); ?>
                        <?php foreach ($works as $key => $vo): ?>
                            <li><a data-text='<?= $vo['typename'] ?>' href="<?= Type::getUrl($vo['tid']); ?>"><?= $vo['typename_en'] ?></a></li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <?php foreach ((array) $this->params['menu'] as $key => $vo): ?>
                            <li><a data-text='<?= $vo['typename'] ?>' href="<?= Type::getUrl($vo['tid']); ?>"><?= $vo['typename_en'] ?></a></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="logo fr">
                <a href="../">
                    <img src="<?= $this->params['config']['logo'] ?>"/>
                </a>
            </div>
        </div>
        <?= $content ?>
        <div class="clr"></div>
        <div class="footer">
            <div class="footer-left fl">
                <a href="project/index.html">ALL PROJECTS</a>
                <div class="copyright">Sens Design all right reserved.</div>
            </div>
            <div class="footer-right fr">
                <ul>
                    <li>0574-2789-0110<span class="ml10"></span><Br>135-8688-4554<span class="ml10">邹老师</span></li>
                    <li>mail@sensbc.com<Br>www.sensbc.com</li>
                    <li>
                        浙江省宁波市鄞州区启明路818号<br />
                        创新128园区12幢90号
                    </li>
                </ul>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

