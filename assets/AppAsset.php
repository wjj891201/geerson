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
class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web/public/front';
    public $css = [
        'css/base.css',
        'css/qz.css',
    ];
    public $js = [
        'js/jquery-1.11.3.min.js'
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

}
