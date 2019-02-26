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
                <?php if ($this->params['topid'] == 110): ?>
                    <?php $tid_arr = Type::find()->select('tid')->where(['upid' => 110])->asArray()->column(); ?>
                    <?php $works = Type::find()->select(['tid', 'typename', 'typename_en'])->where(['tid' => $tid_arr])->asArray()->orderBy(['pid' => SORT_ASC])->all(); ?>
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
            <div class="footer-copyright">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 30" style="enable-background:new 0 0 100 30; width:100px;" xml:space="preserve">
                    <style type="text/css">
                        .st_footer_copy{fill:#666666;}
                    </style>
                    <g id="XMLID_13975_">
                        <path id="XMLID_13976_" class="st_footer_copy" d="M3.9,12.1H3.4l-0.4-1H0.9l-0.5,1H0l1.7-3.8h0.4L3.9,12.1z M1.9,8.8l-0.9,1.9h1.7L1.9,8.8z"></path>
                        <path id="XMLID_13979_" class="st_footer_copy" d="M4.9,8.3h0.4v3.4h2.2v0.4H4.9V8.3z"></path>
                        <path id="XMLID_13981_" class="st_footer_copy" d="M8.6,8.3H9v3.4h2.2v0.4H8.6V8.3z"></path>
                        <path id="XMLID_13983_" class="st_footer_copy" d="M15.5,10.8h-0.9v1.3h-0.4V8.3h1.4c0.9,0,1.4,0.5,1.4,1.2C17,10.4,16.3,10.8,15.5,10.8z
                              M15.5,8.7h-1v1.7h0.9c0.6,0,1-0.3,1-0.8C16.6,9,16.2,8.7,15.5,8.7z"></path>
                        <path id="XMLID_13986_" class="st_footer_copy" d="M20.7,12.1l-1.1-1.5h-1.1v1.5h-0.4V8.3h1.6c0.8,0,1.4,0.5,1.4,1.1c0,0.6-0.4,1-1,1.1
                              l1.2,1.6H20.7z M19.7,8.7h-1.2v1.6h1.2c0.6,0,1-0.3,1-0.8C20.6,9,20.3,8.7,19.7,8.7z"></path>
                        <path id="XMLID_13989_" class="st_footer_copy" d="M24.1,12.2c-1.2,0-1.9-0.9-1.9-2c0-1.1,0.8-2,2-2c1.2,0,1.9,0.9,1.9,2
                              C26,11.3,25.2,12.2,24.1,12.2z M24.1,8.6c-0.9,0-1.5,0.7-1.5,1.6c0,0.9,0.6,1.6,1.5,1.6c0.9,0,1.5-0.7,1.5-1.6
                              C25.6,9.4,24.9,8.6,24.1,8.6z"></path>
                        <path id="XMLID_13992_" class="st_footer_copy" d="M27.8,12.2c-0.6,0-0.9-0.3-1.2-0.7l0.3-0.3c0.2,0.4,0.5,0.5,0.9,0.5c0.4,0,0.7-0.3,0.7-0.9
                              V8.3H29v2.6C29,11.7,28.5,12.2,27.8,12.2z"></path>
                        <path id="XMLID_13994_" class="st_footer_copy" d="M33.1,8.7h-2.3V10h2.1v0.4h-2.1v1.3h2.4v0.4h-2.8V8.3h2.8V8.7z"></path>
                        <path id="XMLID_13996_" class="st_footer_copy" d="M36,12.2c-1.1,0-1.9-0.9-1.9-2c0-1.1,0.8-2,1.9-2c0.7,0,1.1,0.2,1.5,0.6l-0.3,0.3
                              c-0.3-0.3-0.7-0.5-1.2-0.5c-0.8,0-1.5,0.7-1.5,1.6c0,0.9,0.6,1.6,1.5,1.6c0.5,0,0.9-0.2,1.2-0.6l0.3,0.3
                              C37.1,11.9,36.7,12.2,36,12.2z"></path>
                        <path id="XMLID_13998_" class="st_footer_copy" d="M40,12.1h-0.4V8.7h-1.3V8.3h3v0.4H40V12.1z"></path>
                        <path id="XMLID_14000_" class="st_footer_copy" d="M43.7,10c0.9,0.2,1.2,0.5,1.2,1.1c0,0.7-0.5,1.1-1.3,1.1c-0.6,0-1.1-0.2-1.6-0.6l0.3-0.3
                              c0.4,0.4,0.8,0.5,1.3,0.5c0.5,0,0.9-0.3,0.9-0.7c0-0.4-0.2-0.6-1-0.7c-0.9-0.2-1.3-0.5-1.3-1.1c0-0.6,0.5-1,1.3-1
                              c0.6,0,1,0.2,1.3,0.5l-0.3,0.3c-0.4-0.3-0.7-0.4-1.1-0.4c-0.5,0-0.8,0.3-0.8,0.6C42.6,9.6,42.8,9.8,43.7,10z"></path>
                        <path id="XMLID_14002_" class="st_footer_copy" d="M1.7,18.8c0.9,0.2,1.2,0.5,1.2,1.1c0,0.7-0.5,1.1-1.3,1.1c-0.6,0-1.1-0.2-1.6-0.6L0.3,20
                              c0.4,0.4,0.8,0.5,1.3,0.5c0.5,0,0.9-0.3,0.9-0.7c0-0.4-0.2-0.6-1-0.7C0.6,19,0.2,18.7,0.2,18c0-0.6,0.5-1,1.3-1
                              c0.6,0,1,0.2,1.3,0.5l-0.3,0.3c-0.4-0.3-0.7-0.4-1.1-0.4c-0.5,0-0.8,0.3-0.8,0.6C0.7,18.4,0.9,18.6,1.7,18.8z"></path>
                        <path id="XMLID_14004_" class="st_footer_copy" d="M5.3,20.6c0.4,0,0.7-0.2,0.9-0.4l0.3,0.2c-0.3,0.3-0.6,0.5-1.2,0.5c-0.8,0-1.4-0.6-1.4-1.5
                              c0-0.8,0.6-1.5,1.4-1.5c0.8,0,1.3,0.7,1.3,1.5c0,0,0,0.1,0,0.1H4.3C4.3,20.2,4.8,20.6,5.3,20.6z M6.1,19.3c0-0.5-0.3-1-0.9-1
                              c-0.5,0-0.9,0.4-0.9,1H6.1z"></path>
                        <path id="XMLID_14007_" class="st_footer_copy" d="M8,20.9H7.5v-2.8H8v0.5c0.2-0.3,0.5-0.6,1-0.6c0.7,0,1.1,0.5,1.1,1.1v1.8H9.6v-1.6
                              c0-0.5-0.3-0.9-0.8-0.9c-0.5,0-0.8,0.4-0.8,0.9V20.9z"></path>
                        <path id="XMLID_14009_" class="st_footer_copy" d="M12.4,20.6c0.4,0,0.7-0.2,0.9-0.4l0.3,0.2c-0.3,0.3-0.6,0.5-1.2,0.5c-0.8,0-1.4-0.6-1.4-1.5
                              c0-0.8,0.6-1.5,1.4-1.5c0.8,0,1.3,0.7,1.3,1.5c0,0,0,0.1,0,0.1h-2.2C11.5,20.2,11.9,20.6,12.4,20.6z M13.2,19.3c0-0.5-0.3-1-0.9-1
                              c-0.5,0-0.9,0.4-0.9,1H13.2z"></path>
                        <path id="XMLID_14012_" class="st_footer_copy" d="M16.2,20.9c-0.5,0-0.9-0.3-1.1-0.6v0.5h-0.4v-4h0.4v1.7c0.2-0.3,0.6-0.6,1.1-0.6
                              c0.7,0,1.3,0.5,1.3,1.5C17.5,20.4,16.9,20.9,16.2,20.9z M16.1,18.4c-0.5,0-1,0.4-1,1.1c0,0.7,0.5,1.1,1,1.1c0.5,0,1-0.4,1-1.1
                              C17.1,18.8,16.6,18.4,16.1,18.4z"></path>
                        <path id="XMLID_14015_" class="st_footer_copy" d="M19.8,20.9c-0.8,0-1.4-0.7-1.4-1.5c0-0.8,0.6-1.5,1.4-1.5c0.5,0,0.9,0.2,1.1,0.5l-0.3,0.3
                              c-0.2-0.2-0.5-0.4-0.9-0.4c-0.6,0-1,0.5-1,1.1c0,0.6,0.4,1.1,1,1.1c0.4,0,0.6-0.2,0.9-0.4l0.3,0.3C20.7,20.7,20.4,20.9,19.8,20.9z"></path>
                        <path id="XMLID_14017_" class="st_footer_copy" d="M25.3,20.9H24v-3.8h1.3c1.2,0,2,0.8,2,1.9C27.3,20,26.5,20.9,25.3,20.9z M25.3,17.5h-0.9v3
                              h0.9c1,0,1.6-0.7,1.6-1.5C26.9,18.1,26.2,17.5,25.3,17.5z"></path>
                        <path id="XMLID_14020_" class="st_footer_copy" d="M29.7,20.6c0.4,0,0.7-0.2,0.9-0.4l0.3,0.2c-0.3,0.3-0.6,0.5-1.2,0.5c-0.8,0-1.4-0.6-1.4-1.5
                              c0-0.8,0.6-1.5,1.4-1.5c0.8,0,1.3,0.7,1.3,1.5c0,0,0,0.1,0,0.1h-2.2C28.7,20.2,29.2,20.6,29.7,20.6z M30.5,19.3c0-0.5-0.3-1-0.9-1
                              c-0.5,0-0.9,0.4-0.9,1H30.5z"></path>
                        <path id="XMLID_14023_" class="st_footer_copy" d="M32.9,20.9c-0.4,0-0.9-0.2-1.2-0.4l0.2-0.3c0.3,0.2,0.6,0.4,1,0.4c0.3,0,0.6-0.2,0.6-0.4v0
                              c0-0.3-0.3-0.4-0.7-0.5c-0.4-0.1-0.9-0.3-0.9-0.8v0c0-0.5,0.4-0.8,1-0.8c0.3,0,0.7,0.1,1,0.3l-0.2,0.3c-0.3-0.2-0.6-0.3-0.8-0.3
                              c-0.3,0-0.5,0.2-0.5,0.4v0c0,0.3,0.3,0.4,0.7,0.5c0.4,0.1,0.9,0.3,0.9,0.8v0C33.9,20.6,33.4,20.9,32.9,20.9z"></path>
                        <path id="XMLID_14025_" class="st_footer_copy" d="M34.9,17.4V17h0.5v0.5H34.9z M35,20.9v-2.8h0.4v2.8H35z"></path>
                        <path id="XMLID_14028_" class="st_footer_copy" d="M37.9,21.8c-0.5,0-0.9-0.1-1.3-0.4l0.2-0.3c0.3,0.2,0.7,0.4,1.1,0.4c0.6,0,1-0.3,1-1v-0.3
                              c-0.2,0.3-0.6,0.6-1.1,0.6c-0.7,0-1.3-0.5-1.3-1.3c0-0.8,0.7-1.3,1.3-1.3c0.5,0,0.9,0.3,1.1,0.6v-0.5h0.4v2.3
                              C39.3,21.3,38.8,21.8,37.9,21.8z M37.9,18.4c-0.5,0-1,0.4-1,1c0,0.6,0.5,1,1,1c0.5,0,1-0.4,1-1C38.9,18.7,38.4,18.4,37.9,18.4z"></path>
                        <path id="XMLID_14031_" class="st_footer_copy" d="M41,20.9h-0.4v-2.8H41v0.5c0.2-0.3,0.5-0.6,1-0.6c0.7,0,1.1,0.5,1.1,1.1v1.8h-0.4v-1.6
                              c0-0.5-0.3-0.9-0.8-0.9c-0.5,0-0.8,0.4-0.8,0.9V20.9z"></path>
                        <path id="XMLID_14033_" class="st_footer_copy" d="M46.2,18.6l-0.1-0.3c0.3-0.1,0.6-0.2,1-0.2c0.8,0,1.2,0.4,1.2,1.1v1.7h-0.4v-0.4
                              c-0.2,0.3-0.5,0.5-1,0.5c-0.5,0-1.1-0.3-1.1-0.9c0-0.6,0.5-0.9,1.2-0.9c0.4,0,0.6,0,0.9,0.1v-0.1c0-0.5-0.3-0.8-0.8-0.8
                              C46.8,18.4,46.5,18.5,46.2,18.6z M46.3,20c0,0.4,0.3,0.6,0.7,0.6c0.5,0,0.9-0.3,0.9-0.8v-0.3c-0.2-0.1-0.5-0.1-0.8-0.1
                              C46.6,19.4,46.3,19.7,46.3,20z"></path>
                        <path id="XMLID_14036_" class="st_footer_copy" d="M49.6,20.9v-4H50v4H49.6z"></path>
                        <path id="XMLID_14038_" class="st_footer_copy" d="M51.3,20.9v-4h0.4v4H51.3z"></path>
                        <path id="XMLID_14040_" class="st_footer_copy" d="M55.3,20.9h-0.4v-2.8h0.4v0.7c0.2-0.5,0.6-0.8,1.2-0.8v0.5h0c-0.6,0-1.1,0.4-1.1,1.3V20.9z"></path>
                        <path id="XMLID_14042_" class="st_footer_copy" d="M57.3,17.4V17h0.5v0.5H57.3z M57.4,20.9v-2.8h0.4v2.8H57.4z"></path>
                        <path id="XMLID_14045_" class="st_footer_copy" d="M60.3,21.8c-0.5,0-0.9-0.1-1.3-0.4l0.2-0.3c0.3,0.2,0.7,0.4,1.1,0.4c0.6,0,1-0.3,1-1v-0.3
                              c-0.2,0.3-0.6,0.6-1.1,0.6c-0.7,0-1.3-0.5-1.3-1.3c0-0.8,0.7-1.3,1.3-1.3c0.5,0,0.9,0.3,1.1,0.6v-0.5h0.4v2.3
                              C61.7,21.3,61.2,21.8,60.3,21.8z M60.3,18.4c-0.5,0-1,0.4-1,1c0,0.6,0.5,1,1,1c0.5,0,1-0.4,1-1C61.3,18.7,60.8,18.4,60.3,18.4z"></path>
                        <path id="XMLID_14048_" class="st_footer_copy" d="M63.4,20.9h-0.4v-4h0.4v1.7c0.2-0.3,0.5-0.6,1-0.6c0.7,0,1.1,0.5,1.1,1.1v1.8H65v-1.6
                              c0-0.5-0.3-0.9-0.8-0.9c-0.5,0-0.8,0.4-0.8,0.9V20.9z"></path>
                        <path id="XMLID_14050_" class="st_footer_copy" d="M67.2,20.1c0,0.3,0.2,0.5,0.5,0.5c0.1,0,0.3,0,0.4-0.1v0.4c-0.1,0.1-0.3,0.1-0.5,0.1
                              c-0.5,0-0.8-0.2-0.8-0.8v-1.7h-0.4v-0.4h0.4v-0.9h0.4v0.9H68v0.4h-0.9V20.1z"></path>
                        <path id="XMLID_14052_" class="st_footer_copy" d="M70,20.9c-0.4,0-0.9-0.2-1.2-0.4l0.2-0.3c0.3,0.2,0.6,0.4,1,0.4c0.3,0,0.6-0.2,0.6-0.4v0
                              c0-0.3-0.3-0.4-0.7-0.5c-0.4-0.1-0.9-0.3-0.9-0.8v0c0-0.5,0.4-0.8,1-0.8c0.3,0,0.7,0.1,1,0.3l-0.2,0.3c-0.3-0.2-0.6-0.3-0.8-0.3
                              c-0.3,0-0.5,0.2-0.5,0.4v0c0,0.3,0.3,0.4,0.7,0.5c0.4,0.1,0.9,0.3,0.9,0.8v0C71,20.6,70.6,20.9,70,20.9z"></path>
                        <path id="XMLID_14054_" class="st_footer_copy" d="M74.4,20.9H74v-2.8h0.4v0.7c0.2-0.5,0.6-0.8,1.2-0.8v0.5h0c-0.6,0-1.1,0.4-1.1,1.3V20.9z"></path>
                        <path id="XMLID_14056_" class="st_footer_copy" d="M77.6,20.6c0.4,0,0.7-0.2,0.9-0.4l0.3,0.2c-0.3,0.3-0.6,0.5-1.2,0.5c-0.8,0-1.4-0.6-1.4-1.5
                              c0-0.8,0.6-1.5,1.4-1.5c0.8,0,1.3,0.7,1.3,1.5c0,0,0,0.1,0,0.1h-2.2C76.6,20.2,77.1,20.6,77.6,20.6z M78.4,19.3c0-0.5-0.3-1-0.9-1
                              c-0.5,0-0.9,0.4-0.9,1H78.4z"></path>
                        <path id="XMLID_14059_" class="st_footer_copy" d="M80.8,20.9c-0.4,0-0.9-0.2-1.2-0.4l0.2-0.3c0.3,0.2,0.6,0.4,1,0.4c0.3,0,0.6-0.2,0.6-0.4v0
                              c0-0.3-0.3-0.4-0.7-0.5c-0.4-0.1-0.9-0.3-0.9-0.8v0c0-0.5,0.4-0.8,1-0.8c0.3,0,0.7,0.1,1,0.3l-0.2,0.3c-0.3-0.2-0.6-0.3-0.8-0.3
                              c-0.3,0-0.5,0.2-0.5,0.4v0c0,0.3,0.3,0.4,0.7,0.5c0.4,0.1,0.9,0.3,0.9,0.8v0C81.8,20.6,81.3,20.9,80.8,20.9z"></path>
                        <path id="XMLID_14061_" class="st_footer_copy" d="M84.1,20.6c0.4,0,0.7-0.2,0.9-0.4l0.3,0.2c-0.3,0.3-0.6,0.5-1.2,0.5c-0.8,0-1.4-0.6-1.4-1.5
                              c0-0.8,0.6-1.5,1.4-1.5c0.8,0,1.3,0.7,1.3,1.5c0,0,0,0.1,0,0.1h-2.2C83.1,20.2,83.6,20.6,84.1,20.6z M84.9,19.3c0-0.5-0.3-1-0.9-1
                              c-0.5,0-0.9,0.4-0.9,1H84.9z"></path>
                        <path id="XMLID_14064_" class="st_footer_copy" d="M86.8,20.9h-0.4v-2.8h0.4v0.7c0.2-0.5,0.6-0.8,1.2-0.8v0.5h0c-0.6,0-1.1,0.4-1.1,1.3V20.9z"></path>
                        <path id="XMLID_14066_" class="st_footer_copy" d="M90.9,18.1h0.5l-1.2,2.8h-0.4l-1.2-2.8H89l1,2.3L90.9,18.1z"></path>
                        <path id="XMLID_14068_" class="st_footer_copy" d="M93.4,20.6c0.4,0,0.7-0.2,0.9-0.4l0.3,0.2c-0.3,0.3-0.6,0.5-1.2,0.5c-0.8,0-1.4-0.6-1.4-1.5
                              c0-0.8,0.6-1.5,1.4-1.5c0.8,0,1.3,0.7,1.3,1.5c0,0,0,0.1,0,0.1h-2.2C92.5,20.2,92.9,20.6,93.4,20.6z M94.2,19.3c0-0.5-0.3-1-0.9-1
                              c-0.5,0-0.9,0.4-0.9,1H94.2z"></path>
                        <path id="XMLID_14071_" class="st_footer_copy" d="M97.9,20.9v-0.6c-0.2,0.3-0.6,0.6-1.1,0.6c-0.7,0-1.3-0.5-1.3-1.5c0-0.9,0.7-1.5,1.3-1.5
                              c0.5,0,0.9,0.3,1.1,0.6v-1.7h0.4v4H97.9z M96.9,18.4c-0.5,0-1,0.4-1,1.1c0,0.7,0.5,1.1,1,1.1c0.5,0,1-0.4,1-1.1
                              C97.9,18.8,97.4,18.4,96.9,18.4z"></path>
                        <path id="XMLID_14074_" class="st_footer_copy" d="M99.5,20.9v-0.6h0.5v0.6H99.5z"></path>
                    </g>
                </svg>
            </div>
            <div class="footer-icon">
                <a href="javascript:;" id="footer-tel"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30; width:30px;" xml:space="preserve">
                        <style type="text/css">
                            .st_tel{fill-rule:evenodd;clip-rule:evenodd;fill:#666666;}
                        </style>
                        <g id="XMLID_245_">
                            <path id="XMLID_236_" class="st_tel" d="M15,0C6.7,0,0,6.7,0,15s6.7,15,15,15c8.3,0,15-6.7,15-15S23.3,0,15,0L15,0z M15,28.8
                                  C7.4,28.8,1.2,22.6,1.2,15C1.2,7.4,7.4,1.2,15,1.2c7.6,0,13.8,6.2,13.8,13.8C28.8,22.6,22.6,28.8,15,28.8L15,28.8z"></path>
                            <g id="XMLID_158_">
                                <g id="XMLID_44_">
                                    <path id="XMLID_45_" class="st_tel" d="M20.9,19.5L20.9,19.5L20,20.3l-2.9-2.9l0.8-0.8c0.2-0.2,0.5-0.2,0.6,0l2.3,2.3v0
                                          C21,19,21.1,19.3,20.9,19.5L20.9,19.5z M12.2,17.5C8,13.3,9,10.7,9.4,10.2l3,3c-0.4,0.4,0,1,0.5,1.6c0.7,0.8,1.4,1.6,2.1,2.1
                                          c1,0.8,1.5,1.2,1.9,0.8l2.9,2.9C19.3,21.1,16.5,22,12.2,17.5L12.2,17.5z M13.5,12.1l-0.8,0.8l-3-3l0.8-0.8c0.2-0.2,0.5-0.2,0.6,0
                                          l2.3,2.3v0C13.6,11.6,13.6,11.9,13.5,12.1L13.5,12.1L13.5,12.1L13.5,12.1z"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
                <a href="javascript:;" id="footer-ads"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;width:30px;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#666666;}
                        </style>
                        <g id="XMLID_246_">
                            <path id="XMLID_239_" class="st0" d="M17.9,9.8C17.1,9,16.1,8.5,15,8.5c-2.3,0-4.2,2-4.2,4.5c0,2.8,3.2,7.2,4.2,8.5
                                  c1-1.2,4.2-5.6,4.2-8.5C19.2,11.8,18.7,10.7,17.9,9.8z M15,13.4c-0.6,0-1-0.5-1-1c0-0.6,0.5-1,1-1c0.6,0,1,0.5,1,1
                                  C16,12.9,15.6,13.4,15,13.4z"></path>
                            <path id="XMLID_232_" class="st0" d="M15,0C6.7,0,0,6.7,0,15s6.7,15,15,15c8.3,0,15-6.7,15-15S23.3,0,15,0L15,0z M15,28.8
                                  C7.4,28.8,1.2,22.6,1.2,15C1.2,7.4,7.4,1.2,15,1.2c7.6,0,13.8,6.2,13.8,13.8C28.8,22.6,22.6,28.8,15,28.8L15,28.8z"></path>
                        </g>
                    </svg>
                </a>
                <a href="javascript:;" id="footer-email"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;width:30px;" xml:space="preserve">
                        <style type="text/css">
                            .st_email{fill-rule:evenodd;clip-rule:evenodd;fill:#666666;}
                        </style>
                        <g id="XMLID_244_">
                            <path id="XMLID_249_" class="st_email" d="M21.8,11.6c0-0.1,0-0.2,0-0.3L17.6,15l4.1,3.8c0-0.1,0-0.2,0-0.3L21.8,11.6L21.8,11.6
                                  L21.8,11.6z M15,16.3l6.3-5.9c-0.2-0.2-0.5-0.3-0.9-0.3l-10.8,0c-0.4,0-0.7,0.1-0.9,0.3L15,16.3L15,16.3z M17,15.7l-1.6,1.6
                                  c-0.1,0.1-0.2,0.1-0.4,0.1c-0.1,0-0.3,0-0.4-0.1l0,0l0,0L13,15.7l-4.3,3.9c0.2,0.2,0.5,0.3,0.9,0.3h10.8c0.4,0,0.7-0.1,0.9-0.3
                                  L17,15.7L17,15.7z M8.2,11.2c0,0.1-0.1,0.2-0.1,0.3v6.8c0,0.1,0,0.2,0,0.3l4.2-3.8L8.2,11.2L8.2,11.2z"></path>
                            <path id="XMLID_243_" class="st_email" d="M15,0C6.7,0,0,6.7,0,15s6.7,15,15,15c8.3,0,15-6.7,15-15S23.3,0,15,0L15,0z M15,28.8
                                  C7.4,28.8,1.2,22.6,1.2,15C1.2,7.4,7.4,1.2,15,1.2c7.6,0,13.8,6.2,13.8,13.8C28.8,22.6,22.6,28.8,15,28.8L15,28.8z"></path>
                        </g>
                    </svg></a>
            </div>
            <div class="footer-con" id="footer-tel-icon">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30; width:20px;" xml:space="preserve">
                    <style type="text/css">
                        .st_tel{fill-rule:evenodd;clip-rule:evenodd;fill:#666666;}
                    </style>
                    <g id="XMLID_380_">
                        <g id="XMLID_39_">
                            <path id="XMLID_40_" class="st_tel" d="M25.4,23L25.4,23l-1.5,1.5l-5.2-5.2l1.5-1.5c0.3-0.3,0.8-0.3,1.1,0l4,4v0
                                  C25.7,22.2,25.7,22.7,25.4,23L25.4,23z M10,19.5C2.6,12,4.3,7.4,5.1,6.5l5.3,5.3c-0.8,0.8,0,1.8,0.8,2.8c1.2,1.5,2.5,2.8,3.7,3.7
                                  c1.8,1.5,2.7,2.1,3.4,1.4l5.2,5.2C22.7,25.7,17.7,27.4,10,19.5L10,19.5z M12.3,9.9l-1.5,1.5L5.5,6.1L7,4.6c0.3-0.3,0.8-0.3,1.1,0
                                  l4.1,4.1v0C12.6,9,12.6,9.5,12.3,9.9L12.3,9.9L12.3,9.9L12.3,9.9z"></path>
                        </g>
                    </g>
                </svg>
                <br/>
                0574-2789-0110
                <span class="ml10"></span><br/>
                135-8688-4554
                <span class="ml10">邹老师</span>
            </div>
            <div class="footer-con" id="footer-ads-icon">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30; width:20px;" xml:space="preserve">
                    <style type="text/css">
                        .st_ads{fill-rule:evenodd;clip-rule:evenodd;fill:#666666;}
                    </style>
                    <path id="XMLID_166_" class="st_ads" d="M19.8,6.5c-1.3-1.4-3-2.1-4.8-2.1c-3.8,0-6.8,3.3-6.8,7.4c0,4.6,5.2,11.8,6.8,13.8
                          c1.6-2,6.9-9.2,6.8-13.8C21.8,9.8,21.1,7.9,19.8,6.5z M15,12.3c-0.9,0-1.7-0.8-1.7-1.7c0-0.9,0.8-1.7,1.7-1.7c0.9,0,1.7,0.8,1.7,1.7
                          C16.7,11.6,15.9,12.3,15,12.3z"></path>
                </svg><br/>
                浙江省宁波市鄞州区启明路818号<br/>
                创新128园区12幢90号	
            </div>
            <div class="footer-con" id="footer-email-icon">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" style="enable-background:new 0 0 30 30; width:20px;" xml:space="preserve">
                    <style type="text/css">
                        .st_icon1{fill-rule:evenodd;clip-rule:evenodd;fill:#666666;}
                    </style>
                    <g id="XMLID_244_">
                        <path id="XMLID_249_" class="st_icon1" d="M30,7.5c0-0.3-0.1-0.5-0.1-0.7L20.8,15l9.1,8.2c0.1-0.2,0.1-0.4,0.1-0.7L30,7.5L30,7.5L30,7.5
                              z M15,17.8L28.9,4.9c-0.5-0.4-1.1-0.6-2.1-0.6l-23.6,0C2.4,4.4,1.7,4.6,1.1,5L15,17.8L15,17.8z M19.3,16.5L15.8,20
                              c-0.2,0.2-0.5,0.3-0.8,0.3c-0.3,0-0.6-0.1-0.8-0.3l0,0l0,0l-3.5-3.5l-9.5,8.6c0.5,0.4,1.1,0.6,2,0.6h23.6c0.9,0,1.5-0.2,2-0.6
                              L19.3,16.5L19.3,16.5z M0.1,6.8C0.1,7,0,7.2,0,7.5v15c0,0.3,0.1,0.5,0.1,0.7L9.2,15L0.1,6.8L0.1,6.8z"></path>
                    </g>
                </svg>
                <br/>
                mail@sensbc.com
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
