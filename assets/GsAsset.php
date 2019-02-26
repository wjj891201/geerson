<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\View;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class GsAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web/public/gs';
    public $css = [
        'css/common.css',
        'css/coding.css',
        'css/slider.css'
    ];
    public $js = [
        'js/jquery-1.11.1.min.js',
        'js/responsiveslides.min.js',
        'js/jquery.mousewheel.min.js'
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

}
