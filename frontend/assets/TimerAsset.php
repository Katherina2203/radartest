<?php
namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;
/**
 * Description of TimerAsset
 * Additional frontend application asset bundle for the template.
 *
 * @author КАТЕРИНА
 */
class TimerAsset  extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
       // 'css/site.css',
        'css/timer.css',
        'template/css/main.css',
        'template/owl-carousel/owl.carousel.css',
        'template/owl-carousel/owl.theme.css',
        'template/css/jquery.fancybox.css',
        'template/css/slider.css',
        'template/css/animate.css',
        'template/css/ionicons.min.css',
        //'less/main.less'
    ];
    
    public $js = [
        'template/js/main.js',
        'template/js/vendor/modernizr-2.6.2.min.js',
        'template/js/owl.carousel.min.js',
        'template/js/wow.min.js',
        'template/js/slider.js',
        'template/js/jquery.fancybox.js',
        
        
        
        'template/script.js',
        'template/owl-carousel/owl.carousel.js',

      //  'source/js/google_analytics_auto.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset', // yii.js, jquery.js
        'yii\bootstrap\BootstrapAsset', // bootstrap.css
        'yii\bootstrap\BootstrapPluginAsset', // bootstrap.js
    ];
    
    public $jsOptions = [
      'position' =>  View::POS_HEAD,
    ];
}
