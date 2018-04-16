<?php

namespace coderius\yii2_highlight_js;

use yii;
use yii\web\AssetBundle;
use yii\web\View;


/**
 * Custom asset bundle.
 */
class CustomExampleAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
 
    public $css = [
            'custom-styles-example/style.css'
   
            ];
    
    
    public $js = [

            ];
    
    public $jsOptions = [
        'position' => \yii\web\View::POS_END,
    ];
    
    public $depends = [
        
    ];
    
    public function init()
    {
        parent::init();
    }
    
    
}

