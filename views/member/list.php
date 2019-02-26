<?php

$this->title = '图纸列表';
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
                图纸列表
            </div>
            <div class="center_bd">
                <table class="piclist">
                    <tr>
                        <th align="left">标题</th>
                        <th>上传日期</th>            
                    </tr>
                    <?php foreach ($udraw as $key => $vo): ?>
                        <tr>
                            <td><?= $vo['utitle'] ?></td>
                            <td align="center"><?= date('Y-m-d', $vo['addtime']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>