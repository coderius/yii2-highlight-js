<?php

namespace coderius\yii2_highlight_js;

use yii;
use yii\base\UnknownClassException;

/**
 * 
 */
class HighlightWidget extends \yii\base\Widget
{
    public $view;
    
    public $customAsset;

    public $content;
    
    public $css;
    
    public $js;

    public function init()
    {
        parent::init();
        
        $this->view = Yii::$app->getView();
        
        if ($this->customAsset !== null) {
            $customAssetName = $this->customAsset;
            $this->customAsset = \Yii::createObject($customAssetName);
            if(!$this->customAsset instanceof yii\web\AssetBundle){
                throw new UnknownClassException('Class '. $customAssetName::className() .' not instanceof yii\web\AssetBundle');
            }
        }

        
        ob_start();
    }
    
    /**
     * 
     * @return type
     */
    public function run()
    {
        
        $this->content = ob_get_clean();
        
        HighlightAsset::register($this->view);
        
        if($this->customAsset){
            $customAsset = $this->customAsset;
            $customAsset::register($this->view);
        }

        
        return $this->content;
    }
}
