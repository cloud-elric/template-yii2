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
        // core
        'webAssets/css/bootstrap.min.css',
        'webAssets/css/bootstrap-extend.min.css',
        // Plugins
        'webAssets/plugins/animsition/animsition.min.css',
        'webAssets/plugins/ladda/ladda.css',
        'webAssets/plugins/asscrollable/asScrollable.css',
        'webAssets/plugins/switchery/switchery.css',
        'webAssets/plugins/intro-js/introjs.css',
        'webAssets/plugins/slidepanel/slidePanel.css',
        'webAssets/plugins/flag-icon-css/flag-icon.css',
        'webAssets/plugins/sweet-alert/sweet-alert.css',
        // Site css
        'webAssets/css/site.min.css',
        'webAssets/css/site-extend.css',
        // Fonts
        'webAssets/fonts/web-icons/web-icons.min.css',
        'webAssets/fonts/brand-icons/brand-icons.css',
        'http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'

        
    ];
    public $js = [
        // core
        'webAssets/js/babel-external.helpers.js',
        'webAssets/js/tether.js',
        'webAssets/js/bootstrap.js',
        // plugins
        'webAssets/plugins/animsition/animsition.min.js',
        'webAssets/plugins/ladda/spin.js',
        'webAssets/plugins/ladda/ladda.js',
        'webAssets/plugins/mousewheel/jquery.mousewheel.js',
        'webAssets/plugins/asscrollbar/jquery-asScrollbar.js',
        'webAssets/plugins/asscrollable/jquery.asScrollable.all.js',
        'webAssets/plugins/ashoverscroll/jquery-asHoverScroll.js',
        'webAssets/plugins/switchery/switchery.min.js',
        'webAssets/plugins/intro-js/intro.js',
        'webAssets/plugins/screenfull/screenfull.js',
        'webAssets/plugins/slidepanel/jquery-slidePanel.js',
        'webAssets/js/State.js',
        'webAssets/js/Component.js',
        'webAssets/js/Plugin.js',
        'webAssets/js/Base.js',
        'webAssets/js/Config.js',
        'webAssets/js/Menubar.js',
        'webAssets/js/Gridmenu.js',
        'webAssets/js/Sidebar.js',
        'webAssets/js/PageAside.js',
        'webAssets/js/menu.js',
        'webAssets/js/tour.js',
        'webAssets/js/Site.js',
        'webAssets/js/asscrollable.js',
        'webAssets/plugins/asscroll/jquery-asScroll.js',
        'webAssets/plugins/sweet-alert/sweet-alert.js',
        'webAssets/js/slidepanel.js',
        'webAssets/js/switchery.js',
        'webAssets/js/geeks.js',
        'webAssets/js/init.js',
        


    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
