<?php

use yii\web\View;
use app\libs\Image;
use yii\helpers\Url;
use app\models\Type;

$this->registerJsFile('@web/public/front/js/jquery.SuperSlide.2.1.2.js', ['depends' => ['app\assets\AppAsset'], 'position' => View::POS_HEAD]);

$this->title = $info['headtitle'];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $info['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $info['description']], 'description');
?>
<div class="banner">
    <img src="<?= $type['typepic'] ?>" />
</div>
<div class="wrap">
    <div class="article_tit">
        <?= $info['title'] ?> 
    </div>
    <!--图集-->
    <div class="article_cont">
        <div class="history3 clearfix">
            <div class="picList">
                <div class="bd" id="ul01" > 
                    <a class="prev"><</a> 
                    <a class="next">></a>
                    <ul style="overflow:hidden;">
                        <?php foreach ($info['album'] as $key => $vo): ?>
                            <li>
                                <a href="javascript:;" class="j-layer">
                                    <img id="img01" src="<?= $vo['picfile'] ?>"  width="980" height="auto" />
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <!--                        <li>
                                                    <a href="javascript:;" class="j-layer">
                                                        <img id="img01" src="images/147755551625909100.jpg"  width="980" height="auto" />
                                                    </a>
                                                </li>-->
                    </ul>
                </div>
                <div class="phd"> 
                    <a class="sPrev"></a>
                    <a class="sNext"></a>
                    <ul class="clearfix">
                        <?php foreach ($info['album'] as $key => $vo): ?>
                            <li><img src="<?= Image::img($vo['picfile'], 120, 80) ?>"/></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            // history3
            $('.history3 .prev').hover(function(){
                $(this).toggleClass('prev3');
            })
            $('.phd li').hover(function(){
                $(this).toggleClass('pics-list2');
            })
            $(".picList").slide({ titCell: ".phd li", mainCell: " .bd ul ", effect: "fold", mouseOverStop: false, 

                startFun:function(i,c){
                    var l=$('.prev3').length;
                    if ($('.pics-list2').length==1) {
                        return;
                    }
                    if ((i%7==6||i==c-1)&&l==1) {
                        $('.sPrev').trigger('click');
                    }
                    else if((i%7==0||i==0)&&l==0){
                        $('.sNext').trigger('click')
                    }
								
								
                },endFun:function(i){
                    var ih = $('#ul01 li').eq(i).find('img').height();
                    $('#ul01 li').eq(i).animate({'margin-top':-(ih/2+11)})
								
                    //console.log(s)
                }
            })
            $(".phd").slide({ mainCell:"ul",scroll:7,vis:7,effect:"left",prevCell:".sPrev",nextCell:".sNext",autoPage:true });
        </script> 
    </div>
    <!--推荐案例-->
<!--    <div class="display03">
        <div class="wrap01">
            <div class="hd01"> <a href="case.php?class_id=102" class="more">查看更多案例</a>
                <h1>Case<i>推荐案例</i></h1>
            </div>
            <div class="bd">
                <ul class="clearfix">
                    <li><a href="#"><img src="images/147755551625909100.jpg" width="310" height="210" /><span>后现代平层餐厅</span>
                            <p></p>
                        </a></li>
                    <li><a href="#"><img src="images/147755551625909100.jpg" width="310" height="210" /><span>简欧别墅客厅</span>
                            <p></p>
                        </a></li>
                    <li><a href="#"><img src="images/147755551625909100.jpg" width="310" height="210" /><span>新中式平层餐厅</span>
                            <p></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>-->
</div>