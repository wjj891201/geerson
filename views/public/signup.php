<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = '注册';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => ''], 'description');
?>

<div class="login">
    <div class="login-wrap">
        <div class="iframe-layer-mask">
            <div class="iframe-login-wrap">
                <div class="login-content">
                    <div class="login-head"><h3>注册清泽</h3></div>
                </div>
                <?php
                $form = ActiveForm::begin([
                            'options' => ['class' => 'login-form'],
                            'fieldConfig' => [
                                'template' => "<div class=\"login-item\"><div class=\"control-item-wrap\"><div class=\"control-item\"><i class=\"tit\"><span>*</span>{label}：</i><i class=\"split\">|</i>{input}</div>{error}</div></div>",
                                'errorOptions' => ['class' => 'tips']
                            ]
                        ]);
                ?>
                <?= $form->field($model, 'username', ['options' => ['tag' => false]])->textInput(['class' => 'ipt inp_280', 'maxlength' => '11', 'placeholder' => '请输入手机号码']); ?>
                <?= $form->field($model, 'email')->textInput(['class' => 'ipt inp_280', 'placeholder' => '请输入邮箱']); ?>
                <?= $form->field($model, 'password')->passwordInput(['class' => 'ipt inp_280', 'placeholder' => '请输入密码']); ?>
                <?= $form->field($model, 'repass')->passwordInput(['class' => 'ipt inp_280', 'placeholder' => '确认密码']); ?>
                <?= Html::submitButton('立即注册', ['class' => 'submit-btn']); ?>
                <div class="goreg">已有帐号，<a href="<?= Url::to(['public/login']) ?>">点击登录</a></div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
