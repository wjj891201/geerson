<?php

use yii\helpers\Url;
?>
<div class="center_left fl">
    <dl>
        <dt>个人中心</dt>
        <dd><a href="<?= Url::to(['member/center']) ?>" <?php if (Yii::$app->controller->action->id == 'center'): ?>class="select"<?php endif; ?>>上传图纸</a></dd>
        <dd><a href="<?= Url::to(['member/list']) ?>" <?php if (Yii::$app->controller->action->id == 'list'): ?>class="select"<?php endif; ?>>图纸列表</a></dd>
    </dl>
    <dl>
        <dt>帐号管理</dt>
        <dd><a href="<?= Url::to(['member/psw']) ?>" <?php if (Yii::$app->controller->action->id == 'psw'): ?>class="select"<?php endif; ?>>修改密码</a></dd>
    </dl>
</div>