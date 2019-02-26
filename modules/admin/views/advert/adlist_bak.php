<?php

use yii\helpers\Url; //使用Url类
use yii\widgets\LinkPager;
?>
<script type="text/javascript" src="/layer/layer.js"></script>
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">管理中心<b>></b><strong>广告列表</strong> </div>
    <!--提示消息 开始-->
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="message success">
            <p><?= Yii::$app->session->getFlash('success') ?></p>
            <div class="close"></div>
        </div>
    <?php endif ?>
    <!--提示消息 结束-->
    <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <div class="filter">
            <span>
                <h3><a href="<?php echo Url::to(['advert/add']); ?>" class="actionBtn add">添加广告</a></h3>
            </span>
        </div>
        <div id="list">
            <form name="action" method="post" action="product.php?rec=action">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
                        <th width="40" align="center">排序</th>
                        <th align="left">广告名称</th>
                        <th width="150" align="center">广告位</th>
                        <th width="150" align="center">类型</th>
                        <th width="80" align="center">添加日期</th>
                        <th width="80" align="center">操作</th>
                    </tr>
                    <?php foreach ($data as $key => $vo): ?>
                        <tr>
                            <td align="center"><input type="checkbox" name="checkbox[]" value="<?= $vo['id'] ?>" /></td>
                            <td align="center"><?= $vo['sort'] ?></td>
                            <td><a href="product.php?rec=edit&id=15"><?= $vo['title'] ?></a></td>
                            <td align="center"><a href="product.php?cat_id=3"><?= $vo['labelname'] ?></a></td>
                            <td align="center"><?= $vo['adtype'] == 1 ? "图片广告" : "文字广告" ?></td>
                            <td align="center"><?= date('Y-m-d H:i:s', $vo['addtime']) ?></td>
                            <td align="center">
                                <a href="<?php echo Url::to(['advert/mod', 'id' => $vo['id']]); ?>">编辑</a> | <a href="javascript:;" onclick="ad_del(<?php echo $vo['id'] ?>)">删除</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </form>
            <div class="pager">
                <?=
                LinkPager::widget([
                    'pagination' => $pages,
                ]);
                ?>
            </div>
        </div>
        <div class="clear"></div>   
    </div>
</div>
<script type="text/javascript">
    function ad_del(id){        
        layer.confirm('确认要删除该广告吗？', {
        }, function(){
            location.href = "/admin/advert/del.html?id="+id;
        });
    }
</script>