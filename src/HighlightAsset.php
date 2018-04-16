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
//    public $baseUrl = '@web';
    
    //vs.css
    public $css = [];
    
    
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

//        $this->css = [];

        parent::init();
    }
    
    public function setTheme($style){
        $this->css[] = "highlight/styles/{$style}";
    }
    
    /**
     * 
     * @param type View $view
     */
//    public static function register($view)
//    {
//       
//        parent::register($view);
//    }    
    
    
}