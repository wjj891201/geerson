<?php

use yii\helpers\Url;

$this->title = $mess;
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => ''], 'description');
?>
<link href="/public/front/css/tz.css" type="text/css" rel="stylesheet" />
<div class="framecenter">
    <table style="width:90%;margin:0px auto;margin-top:100px;margin-bottom:50px;">
        <tr>
            <td class="center">
                <table style="margin:0px auto;">
                    <tr>
                        <td><span class="messicon"><img src="/public/front/images/lightbulb.gif" /></span></td>
                        <td><span class="messtext strong fontsize14"><?= $mess ?></span></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="center fontsize14" style="height:50px;line-height:50px">您可以选择以下操作按钮，网站将在<span class="em" id="spanSeconds">5</span>秒钟后返回默认地址！</td>
        </tr>
        <tr>
            <td class="center" style="height:50px;line-height:50px;">
                <input class="buttonface2" onclick="javascript:location.href='<?= $url ?>';" name="Submit" type="submit" value="点击跳转" />
            </td>
        </tr>
    </table>
</div>
<script type="text/javascript">
    var seconds = 5;
    onload = function(){
        window.setInterval(redirection, 1000);
    }
    function redirection(){
        if (seconds <= 0) {
            window.clearInterval();
            return;
        }
        seconds --;
        document.getElementById('spanSeconds').innerHTML = seconds;
        if (seconds == 0) {
            window.clearInterval();
            location.href = "<?= Url::to(['index/index']) ?>";
        }
    }
</script>