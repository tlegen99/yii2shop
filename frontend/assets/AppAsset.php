<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/owl.transitions.css',
        'css/nivo-slider.css',
        'css/meanmenu.min.css',
        'css/jquery-ui.css',
        'css/animate.css',
        'css/main.css',
        'css/style.css',
        'css/responsive.css',
    ];

    public $js = [
        'js/jquery-1.11.3.min.js',
        'js/bootstrap.min.js',
        'js/wow.min.js',
        'js/jquery.meanmenu.js',
        'js/owl.carousel.min.js',
        'js/jquery.scrollUp.min.js',
        'js/countdon.min.js',
        'js/jquery-price-slider.js',
        'js/jquery.nivo.slider.js',
        'js/plugins.js',
        'js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
