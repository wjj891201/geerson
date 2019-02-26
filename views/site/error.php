<?php

use yii\helpers\Html;
$this->title = $name;
?>
<link href="/public/front/css/dandelion.css" type="text/css" rel="stylesheet" />
<div id="da-wrapper" class="fluid">
    <div id="da-content">
        <div class="da-container clearfix">
            <div id="da-error-wrapper">
                <div id="da-error-pin"></div>
                <div id="da-error-code">
                    error <span>404</span>                    
                </div>
                <h1 class="da-error-heading"><?= Html::encode($this->title) ?></h1>
                <p><?= nl2br(Html::encode($message)) ?><a href="../">点击进入首页</a></p>
            </div>
        </div>
    </div>
</div>
