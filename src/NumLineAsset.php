<?php

namespace coderius\yii2_highlight_js;

use yii;
use yii\web\AssetBundle;
use yii\web\View;


/**
 * Custom asset bundle.
 */
class NumLineAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
 
    public $css = [
            'custom/num_line.css'
   
            ];
    
    
    public $js = [
                'custom/num_line.js'
            ];
    
    public $jsOptions = [
        'position' => \yii\web\View::POS_END,
    ];
    
//    public $publishOptions = [
//        'forceCopy' => true,
//    ];
    
    public $depends = [
        'codev\yii2_highlight_js\HighlightAsset',
    ];
    
    public function init()
    {
        parent::init();
    }
    
    
    
    public static function register($view)
    {
        parent::register($view);
    }    
    
    
}