<?php

use yii\web\View;
use yii\helpers\Url;
use app\models\FormGroup;
use app\models\FormAttr;

$this->registerCssFile('@web/public/front/js/kindeditor/themes/default/default.css', ['depends' => ['app\assets\AppAsset']]);
$this->registerJsFile('@web/public/front/js/kindeditor/kindeditor.js', ['depends' => ['app\assets\AppAsset'], 'position' => View::POS_HEAD]);
$this->registerJsFile('@web/public/front/js/kindeditor/lang/zh_CN.js', ['depends' => ['app\assets\AppAsset'], 'position' => View::POS_HEAD]);
$this->registerJsFile('@web/public/front/js/My97DatePicker/WdatePicker.js', ['depends' => ['app\assets\AppAsset'], 'position' => View::POS_HEAD]);
$this->registerJsFile('@web/public/front/js/layer/layer.js', ['depends' => ['app\assets\AppAsset'], 'position' => View::POS_HEAD]);

$this->title = '个人中心';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => ''], 'description');

$fgid = 6;
$form = FormGroup::findOne(['fgid' => $fgid]);
$formatt = FormAttr::getFormatt($fgid);
?>
<script type="text/javascript">
    
    KindEditor.ready(function(K) {
        var editor = K.editor();
<?php foreach ($formatt as $key => $vo): ?>    
    <?php if ($vo['inputtype'] == 'img'): ?>   
                    $("#upload-image-<?= $vo['attrname'] ?>").click(function() {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
                        editor.loadPlugin('insertfile', function() {
                            editor.plugin.fileDialog({
                                fileUrl : K("#<?= $vo['attrname'] ?>").val(),
                                clickFn : function(url,title) {
                                    K("#<?= $vo['attrname'] ?>").val(url);
                                    $(".fileupload-preview-<?= $vo['attrname'] ?>").html(title);
                                    editor.hideDialog();
                                }
                                                                                                                                                                                
                            });
                        });
                                                                                                                                                                                                                                                                                                                                                
                    });                                                                                                                                           
    <?php endif; ?>                                                
<?php endforeach; ?> 
    })
    

    function validate(form) {
<?php foreach ($formatt as $key => $vo): ?>
    <?php if ($vo['isvalidate'] == 1): ?>                                           
        <?php if ($vo['validatetext'] != ''): ?>
                            if(form.<?= $vo['attrname'] ?>.value.match(<?= $vo['validatetext'] ?>)==null) {
                                layer.msg('<?= $vo['typename'] ?>'+'填写错误',{icon:2,time:1000});    
                                $(form.<?= $vo['attrname'] ?>).focus();
                                return false;
                            }                                                                                                               
        <?php else: ?>
                            if(form.<?= $vo['attrname'] ?>.value==''){
                                layer.msg('<?= $vo['typename'] ?>'+'为必填项',{icon:2,time:1000});  
                                $(form.<?= $vo['attrname'] ?>).focus();
                                return false;                                                                                                           
                            }                                                                                                                                                                                                                                                                                                                                                                                                                         
        <?php endif; ?>                                                  
    <?php endif; ?>
<?php endforeach; ?>
    }
</script>
<div class="wrap">
    <!--面包屑-->
    <div class="bread">
        当前位置&nbsp;&nbsp;/&nbsp;&nbsp;个人中心
    </div>
    <div class="center_content clearfix">
        <?= $this->render('../layouts/m_left.php'); ?>
        <div class="center_right fl">
            <div class="center_hd">
                上传图纸
            </div>
            <div class="center_bd">

                <form action="<?= Url::to(['message/add']) ?>" method="post" onsubmit="return validate(this)">
                    <table class="csimg">
                        <?php foreach ($formatt as $key => $vo): ?>
                            <tr>
                                <th><?php if ($vo['isvalidate']): ?><span style="color:#F00;">*</span><?php endif; ?><?= $vo['typename'] ?>：</th>
                                <td>
                                    <?php if ($vo['inputtype'] == 'string'): ?>
                                        <input type="text" name="<?= $vo['attrname'] ?>" size="<?= $vo['attrsize'] ?>" maxlength="<?= $vo['attrlenther'] ?>" value="<?= $vo['attrvalue'] ?>" class="input"/>
                                    <?php endif; ?>
                                    <?php if ($vo['inputtype'] == 'int'): ?>
                                        <input type="text" name="<?= $vo['attrname'] ?>" size="<?= $vo['attrsize'] ?>" maxlength="<?= $vo['attrlenther'] ?>" value="<?= $vo['attrvalue'] ?>" class="input"/>
                                    <?php endif; ?>
                                    <?php if ($vo['inputtype'] == 'datetime'): ?>
                                        <input type="text" name="<?= $vo['attrname'] ?>" size="<?= $vo['attrsize'] ?>" id="<?= $vo['attrname'] ?>" onclick="WdatePicker({el:'<?= $vo['attrname'] ?>',readOnly:true,dateFmt:'yyyy-MM-dd HH:mm:ss'})" maxlength="<?= $vo['attrlenther'] ?>" class="input"/>
                                    <?php endif; ?>
                                    <?php if ($vo['inputtype'] == 'selectinput'): ?>
                                        <input type="text" name="<?= $vo['attrname'] ?>" size="<?= $vo['attrsize'] ?>" id="<?= $vo['attrname'] ?>" value="" maxlength="<?= $vo['attrlenther'] ?>" class="input"/>
                                        <select size="1" name="<?= $vo['attrname'] ?>selectinputvalue" onchange="javascript:$('#<?= $vo['attrname'] ?>').val(this.value)">
                                            <option value="">请选择<?= $vo['typename'] ?></option>
                                            <?php foreach ($vo['selectinputvalue'] as $k => $v): ?>
                                                <option value="<?= $v['name'] ?>"><?= $v['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    <?php endif; ?>
                                    <?php if ($vo['inputtype'] == 'img'): ?>
                                        <a href="javascript:void(0);" id="upload-image-<?= $vo['attrname'] ?>"><img src="/public/front/images/scimg.png" /></a>
                                        <span class="fileupload-preview-<?= $vo['attrname'] ?>"></span>
                                        <input type="hidden" name="<?= $vo['attrname'] ?>" id="<?= $vo['attrname'] ?>"/>
                                    <?php endif; ?>
                                    <?php if (in_array($vo['inputtype'], ['text', 'htmltext', 'editor'])): ?>
                                        <textarea name="<?= $vo['attrname'] ?>" cols="<?= $vo['attrsize'] ?>" rows="<?= $vo['attrrow'] ?>" class="input"><?= $vo['attrvalue'] ?></textarea>
                                    <?php endif; ?>
                                    <?php if ($vo['inputtype'] == 'select'): ?>
                                        <select size="1" name="<?= $vo['attrname'] ?>">
                                            <?php foreach ($vo['attrvalue'] as $k => $v): ?>  
                                                <option <?= $v['selected'] ?> value="<?= trim($v['name']) ?>"><?= trim($v['name']) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    <?php endif; ?>
                                    <?php if ($vo['inputtype'] == 'radio'): ?>
                                        <?php foreach ($vo['attrvalue'] as $k => $v): ?>
                                            <input type="radio" value="<?= trim($v['name']) ?>" name="<?= $vo['attrname'] ?>" <?php if ($v['selected'] == 'selected'): ?>checked="checked"<?php endif; ?>/> <?= trim($v['name']) ?>&nbsp;
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    <?php if ($vo['inputtype'] == 'checkbox'): ?>
                                        <?php foreach ($vo['attrvalue'] as $k => $v): ?>
                                            <input type="checkbox" value="<?= trim($v['name']) ?>" name="<?= $vo['attrname'] ?>[]"/> <?= trim($v['name']) ?>&nbsp;
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <div class="btn">
                        <input type="hidden" name="userid" value="<?= Yii::$app->session['member']['userid'] ?>"/>
                        <input type="hidden" name="fgid" value="<?= $fgid ?>"/>
                        <input class="submit" type="submit" value="提交" />
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
