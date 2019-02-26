<?php

use yii\helpers\Url;
use app\models\Type;
use app\models\News;
use app\models\FormGroup;
use app\models\FormAttr;

$this->registerCssFile('@web/public/jj/css/merchants.css', ['depends' => 'app\assets\JjAsset']);
$this->registerCssFile('@web/public/jj/css/jquery.jscrollpane-jm.css', ['depends' => 'app\assets\JjAsset']);

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');

$fgid = 7;
$form = FormGroup::findOne(['fgid' => $fgid]);
$formatt = FormAttr::getFormatt($fgid);
?>

<script type="text/javascript">
    function validate(form) {
<?php foreach ($formatt as $key => $vo): ?>
    <?php if ($vo['isvalidate'] == 1): ?>
        <?php if ($vo['validatetext'] != ''): ?>
                    if (form.<?= $vo['attrname'] ?>.value.match(<?= $vo['validatetext'] ?>) == null) {
                        alert('<?= $vo['typename'] ?>' + '填写错误');
                        $(form.<?= $vo['attrname'] ?>).focus();
                        return false;
                    }
        <?php else: ?>
                    if (form.<?= $vo['attrname'] ?>.value == '') {
                        alert('<?= $vo['typename'] ?>' + '为必填项');
                        $(form.<?= $vo['attrname'] ?>).focus();
                        return false;
                    }
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>
    }
</script>

<div class="main main2" style="background: #fff;">
    <div class="container">
        <h2 class="m-title"><?= $type['typename'] ?></h2>
    </div>
</div>
<div class="main message" id="message">
    <div class="container">
        <div class="info">
            <p>请填写联系信息，资深客户经理将2小时内（工作时间）与您联系：</p>
        </div>
        <form method="post" action="<?= Url::to(['message/add']) ?>"  onsubmit="return validate(this)">
            <div class="main-content">
                <div class="line">
                    <img src="/public/jj/images/service/i1.png" alt="" class="icon"/>
                    <input type="text" class="inputText" placeholder="姓名" id="lname" name="lname"/>
                </div>
                <div class="line no">
                    <img src="/public/jj/images/service/i3.png" alt="" class="icon"/>
                    <input type="text" class="inputText" placeholder="手机" id="ltelphone" name="ltelphone"/>
                </div>
                <div class="line">
                    <img src="/public/jj/images/service/i2.png" alt="" class="icon"/>
                    <input type="text" class="inputText" placeholder="邮箱" id="lemail" name="lemail"/>
                </div>
                <div class="line no">
                    <img src="/public/jj/images/service/i4.png" alt="" class="icon"/>
                    <input type="text" class="inputText" placeholder="加盟意向" id="ljoin" name="ljoin"/>
                </div>
                <br style="clear:both;">
                <div class="inputBtn" style="float:none;">
                    <input type="hidden" name="fgid" value="<?= $fgid ?>"/>
                    <input type="submit" id="myform" class="coolbg" style="border:none;background: none;" value="提 交" name="submit">
                </div>
            </div>
        </form>
    </div>
</div>