<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => ''], 'description');
?>

<div class="login">
    <div class="login-wrap">
        <div class="iframe-layer-mask">
            <div class="iframe-login-wrap">
                <div class="login-content">
                    <div class="login-head"><h3>登录清泽</h3></div>
                </div>
                <?php
                $form = ActiveForm::begin([
                            'options' => ['class' => 'login-form']
                        ]);
                ?>
                <div class="login-item">
                    <div class="control-item-wrap">
                        <?= $form->field($model, 'username', ['template' => "<div class=\"control-item\"><i class=\"icon-phone\"><img src=\"/public/front/images/icon_phone.png\" /></i><i class=\"split\">|</i>{input}</div>{error}", 'errorOptions' => ['class' => 'tips']])->textInput(['class' => 'ipt', 'maxlength' => '11', 'placeholder' => '请输入手机号码'])->label(false); ?>
                    </div>
                </div>
                <div class="login-item">
                    <div class="control-item-wrap">
                        <?= $form->field($model, 'password', ['template' => "<div class=\"control-item\"><i class=\"icon-phone\"><img src=\"/public/front/images/icon_password.png\" /></i><i class=\"split\">|</i>{input}</div>{error}", 'errorOptions' => ['class' => 'tips']])->passwordInput(['class' => 'ipt', 'placeholder' => '请输入密码'])->label(false); ?>
                    </div> 
                </div>
                <?= Html::submitButton('立即登录', ['class' => 'submit-btn']); ?>
                <div class="goreg">还未有帐号，<a href="<?= Url::to(['public/signup']) ?>">立即注册</a></div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
