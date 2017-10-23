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
        //'/web/css/site.css',
        'css/home.css',
        'css/main.css',
        '/web/libs/animate/animated.css',
        'libs/bootstrap/css/bootstrap.min.css',
        '/web/libs/countdown-timer/css/demo.css',
        '/web/libs/direction/css/noJS.css',
        '/web/libs/font-awesome/css/font-awesome.css',
        '/web/libs/jquery.mmenu.all/jquery.mmenu.all.css',
        'libs/mansory/masonry-docs.css',
        'libs/owl.carousel.min/owl.carousel.min.css',
        'libs/pe-icon-7-stroke/css/pe-icon-7-stroke.css',
        'libs/prettyphoto-master/css/prettyPhoto.css',
        'libs/slick-sider/slick.min.css',
        'libs/slick-sider/slick-theme.min.css',
        '/web/begreen/bootstrap/css/bootstrap.min.css',
        '/web/begreen/libs/font-awesome/css/font-awesome.min.css',
        '/web/begreen/libs/owl.carousel.min/owl.carousel.min.css',
        '/web/begreen/css/main.css',






    ];
    public $js = [
        '/web/js/main.js',
        '/web/libs/animate/wow.min.js',
        '/web/libs/bootstrap/js/bootstrap.min.js',
        '/web/libs/countdown/jquery.countdown.min.js',
        '/web/libs/countdown-timer/js/jquery.final-countdown.min.js',
        '/web/libs/countdown-timer/js/jquery.final-countdown1.min.js',
        '/web/libs/countdown-timer/js/kinetic.js',
        '/web/libs/direction/js/jquery.hoverdir.js',
        '/web/libs/direction/js/modernizr.custom.97074.js',
        '/web/libs/isotope/fit-columns.js',
        '/web/libs/isotope/isotope.pkgd.js',
        '/web/libs/isotope/isotope-docs.min.js',
        '/web/libs/jquery/jquery.min.js',
        '/web/libs/jquery/jquery-2.1.4.min.js',
        '/web/libs/jquery/jquery-3.1.1.min.js',
        '/web/libs/jquery.mmenu.all/jquery.mmenu.all.min.js',
        '/web/libs/jquery-appear/jquery.appear.js',
        '/web/libs/jquery-countto/jquery.countTo.js',
        '/web/libs/mansory/mansory.js',
        '/web/libs/mansory/masonry.pkgd.min.js',
        '/web/libs/owl.carousel.min/owl.carousel.min.js',
        '/web/libs/prettyphoto-master/js/jquery.prettyPhoto.js',
        '/web/libs/redcountdown/jquery.redcountdown.js',
        '/web/libs/redcountdown/jquery.knob.min.js',
        '/web/libs/redcountdown/jquery.ba-throttle-debounce.min.js',
        '/web/libs/slick-sider/slick.min.js',

        '/web/begreen/libs/jquery/jquery.min.js',
        '/web/begreen/libs/animate/wow.min.js',
        '/web/begreen/libs/jquery.mmenu.all/jquery.mmenu.all.min.js',
        '/web/begreen/libs/isotope/isotope-docs.min.js',
        '/web/begreen/libs/prettyphoto-master/js/jquery.prettyPhoto.js',
        '/web/begreen/libs/slick-sider/slick.min.js',
        '/web/begreen/libs/countdown-timer/js/jquery.final-countdown.min.js',
        '/web/begreen/libs/owl.carousel.min/owl.carousel.min.js',
        '/web/begreen/js/main.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
