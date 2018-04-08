<?php

/** 
 * HighlightAsset
 */
namespace coderius\yii2_highlight_js;

use yii;
use yii\web\AssetBundle;
use yii\web\View;


class HighlightAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
 
    public $css = [
            'highlight/styles/magula.css'
   
            ];
    
    
    public $js = [
                'highlight/highlight.pack.js',
                'init-highlight.js'
            ];
    
    public $jsOptions = [
        'position' => \yii\web\View::POS_END,
    ];
    
//    public $publishOptions = [
//        'forceCopy' => true,
//    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    public function init()
    {
        parent::init();
    }
    
    
    /**
     * 
     * @param type View $view
     */
    public static function register($view)
    {
        parent::register($view);
    }    
    
    
}