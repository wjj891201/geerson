<?php

use yii\web\View;
use yii\helpers\Url;

$this->registerJsFile('@web/public/backend/js/layer/layer.js', ['depends' => ['app\assets\AdminAsset'], 'position' => View::POS_HEAD]);
?>

<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">管理中心<b>></b><strong>广告位管理</strong></div>   
    <?= $this->render('../set/prompt.php'); ?>
    <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="<?= Url::to(['adverttype/add']) ?>" class="actionBtn add">添加广告位</a>广告位列表</h3>
        <form action="<?= Url::to(['adverttype/del']) ?>" id="thisform" method="post">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="5%" align="center">
                        <input type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'/>
                    </th>
                    <th width="10%" align="center">ID</th>
                    <th align="center">广告位名称</th>
                    <th width="15%" align="center">尺寸</th>
                    <th width="20%" align="center">启用状态</th>
                    <th width="20%" align="center">操作</th>
                </tr>
                <?php foreach ($all as $key => $vo): ?>
                    <tr>
                        <td align="center">
                            <input type="checkbox" name="atid[]" value="<?= $vo['atid'] ?>" />
                        </td>
                        <td align="center"><?= $vo['atid'] ?></td>
                        <td align="center"><?= $vo['adtypename'] ?></td>
                        <td align="center"><?= $vo['width'] ?>*<?= $vo['height'] ?></td>
                        <td class="infotype" align="center">
                            <?php if ($vo['isclass'] == 1): ?>
                                <span class="audit_ok" title="启用"></span>
                            <?php else: ?>
                                <span class="audit_no" title="关闭"></span>
                            <?php endif; ?>
                        </td>
                        <td align="center">
                            <a class="setedit" href="<?= Url::to(['advert/adlist', 'atid' => $vo['atid']]) ?>">查看</a>
                            <a class="setedit" href="<?= Url::to(['adverttype/edit', 'atid' => $vo['atid']]) ?>">修改</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div class="action">
                <input class="btn" onclick="check();" value="删除" type="button">
            </div>
        </form>
    </div>
</div>
<script>
    function check()
    {
        var num=$("input:checkbox:checked").length;  
        if(num>0){
            layer.confirm('确认删除吗？', function(){
                $('#thisform').submit();
            });
        }else{
            layer.msg('请选择至少一条数据',{icon:2,time:1000});   
            return false;
        }
    }
</script>
