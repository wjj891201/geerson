<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;
use yii\helpers\Url;

$this->title = '修改密码';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => ''], 'description');
?>
<div class="wrap">
    <!--面包屑-->
    <div class="bread">
        当前位置&nbsp;&nbsp;/&nbsp;&nbsp;个人中心
    </div>
    <div class="center_content clearfix">
        <?= $this->render('../layouts/m_left.php'); ?>
        <div class="center_right fl">
            <div class="center_hd">
                修改密码
            </div>
            <div class="center_bd">
                <?php
                $form = ActiveForm::begin([
                            'fieldConfig' => [
                                'template' => '<tr><th>{label}：</th><td>{input}{error}</td></tr>',
                                'errorOptions' => ['style' => 'display:inline-block;padding-left:10px;color:#F00;']
                            ]
                        ]);
                ?>
                <table class="csimg">
                    <?= $form->field($model, 'orpass')->passwordInput(['class' => 'input', 'placeholder' => '原始密码']); ?>
                    <?= $form->field($model, 'password')->passwordInput(['class' => 'input', 'placeholder' => '设置密码']); ?>
                    <?= $form->field($model, 'repass')->passwordInput(['class' => 'input', 'placeholder' => '确认密码']); ?>
                </table>
                <div class="btn">
                    <?= Html::submitButton('提交', ['class' => 'submit']); ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>