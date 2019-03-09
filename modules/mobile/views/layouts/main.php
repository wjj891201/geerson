<?php

use app\assets\MbAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\Type;
use app\models\Advert;

MbAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= Html::encode($this->title) ?></title>
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <?php $this->head() ?>
    </head>

    <body>
        <?php $this->beginBody() ?>
        <div class="header">
            <div class="mobile-inner-header">
                <div class="mobile-inner-header-icon mobile-inner-header-icon-out">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <div class="mobile-inner-nav">
                <?php if ($this->context->id == 'article' && ($this->params['topid'] == 110 || $_GET['tid'] == 110)): ?>
                    <?php $tid_arr = Type::find()->select('tid')->where(['upid' => 110])->asArray()->column(); ?>
                    <?php $works = Type::find()->select(['tid', 'typename', 'typename_en'])->where(['tid' => $tid_arr])->asArray()->orderBy(['pid' => SORT_ASC])->all(); ?>
                    <a href="<?= Url::to(['mobile/article/list', 'tid' => 110]) ?>" style="animation-delay: 0s;">ALL</a>
                    <?php foreach ($works as $key => $vo): ?>
                        <a href="<?= Type::getMobileUrl($vo['tid']); ?>" style="animation-delay: 0s;"><?= $vo['typename_en'] ?></a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <?php foreach ((array) $this->params['menu'] as $key => $vo): ?>
                        <a href="<?= Type::getMobileUrl($vo['tid']); ?>" style="animation-delay: 0s;"><?= $vo['typename_en'] ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="logo">
                <a href="../">
                    <img src="<?= $this->params['config']['logo'] ?>"/>
                </a>
            </div>
        </div>
        <script>
            $(window).load(function () {
                $(".mobile-inner-header-icon").click(function () {
                    $(this).toggleClass("mobile-inner-header-icon-click mobile-inner-header-icon-out");
                    $(".mobile-inner-nav").slideToggle(250);
                });
                $(".mobile-inner-nav a").each(function (index) {
                    $(this).css({
                        'animation-delay': (index / 10) + 's'
                    });
                });
            });
        </script>

        <?= $content ?>
        <div class="footer">
            <?php $words = Advert::get_ad(['atid' => 15]); ?>
            <div class="footer-icon">
                <a href="javascript:;" id="footer-tel">
                    <img src="/public/mobile/images/tel.png"/>
                </a>
                <a href="javascript:;" id="footer-ads">
                    <img src="/public/mobile/images/position.png"/>
                </a>
                <a href="javascript:;" id="footer-email">
                    <img src="/public/mobile/images/email.png"/>
                </a>
            </div>
            <div class="footer-con" id="footer-tel-icon">
                <img src="/public/mobile/images/tel_1.png"/>
                <br/>
                <?= $words[0]['content'] ?>
            </div>
            <div class="footer-con" id="footer-ads-icon">
                <img src="/public/mobile/images/position_1.png"/>
                <br/>
                <?= $words[2]['content'] ?>
            </div>
            <div class="footer-con" id="footer-email-icon">
                <img src="/public/mobile/images/email_1.png"/>
                <br/>
                <?= $words[1]['content'] ?>
            </div>
        </div>
        <script>
            $(function () {
                $("#footer-tel").click(function () {
                    $("#footer-ads-icon").fadeOut(500);
                    $("#footer-email-icon").fadeOut(500);
                    $("#footer-tel-icon").slideToggle('slow');
                });
                $("#footer-ads").click(function () {
                    $("#footer-tel-icon").fadeOut(500);
                    $("#footer-email-icon").fadeOut(500);
                    $("#footer-ads-icon").slideToggle('slow');
                });
                $("#footer-email").click(function () {
                    $("#footer-ads-icon").fadeOut(500);
                    $("#footer-tel-icon").fadeOut(500);
                    $("#footer-email-icon").slideToggle('slow');
                });
            });
        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
