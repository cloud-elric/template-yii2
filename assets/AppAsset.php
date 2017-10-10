<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'webAssets/css/bootstrap-extend.min.css',
        'webAssets/plugins/animsition/animsition.min.css',
        'webAssets/plugins/ladda/ladda.css',
        'webAssets/fonts/brand-icons/brand-icons.css',
        'webAssets/fonts/web-icons/web-icons.css',
        'webAssets/plugins/sweet-alert/sweet-alert.css',
        'webAssets/css/site.min.css',
        'webAssets/css/site-extend.css',
    ];
    public $js = [
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        'webAssets/plugins/animsition/animsition.min.js',
        'webAssets/plugins/ladda/spin.js',
        'webAssets/plugins/ladda/ladda.js',
        'webAssets/plugins/ladda/ladda.js',
        'webAssets/plugins/sweet-alert/sweet-alert.js',
        'webAssets/js/site.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
