<?php
/**
 * This is wrapper to https://highlightjs.org/
 */
namespace coderius\yii2_highlight_js;

use yii;
use yii\base\UnknownClassException;
use yii\helpers\HtmlPurifier;

/**
 * 
 */
class HighlightWidget extends \yii\base\Widget
{
//    private $_highlightAsset;
    
    public $view;
    
    public $customAsset = [];

    public $content;
    
    public $css;
    
    public $js;
    
    public $positionJs;
    
    
    /**
     *
     * @var type string
     * Style file name as 'vs.css'
     * Default - default.css
     * more styles in https://highlightjs.org/static/demo/
     */
    public $theme;
    
    public $forceCopy = false;

    public function init()
    {
        parent::init();
        
        $this->view = Yii::$app->getView();
        
        $highlightAsset = HighlightAsset::register($this->view);
        $styleTheme = $this->theme !== null ? str_replace(" ","-",mb_strtolower(trim($this->theme))) .".css" : 'default.css';
        $highlightAsset->setTheme($styleTheme);
        
      
        if($this->forceCopy){
            $highlightAsset->publishOptions = [
                'forceCopy' => true,
            ];
        }
        
        if (!empty($this->customAsset)) {
            if(!$this->customAsset instanceof yii\web\AssetBundle){
                throw new UnknownClassException('Class '. $this->customAsset .' not instanceof yii\web\AssetBundle');
            }
            
            $this->customAsset->depends[] = HighlightAsset::className();
        }

        if($this->css !== null){
            $this->view->registerCss($this->css, $options = [], $key = null);
        }
        
        if($this->js !== null){
            
            $position = $this->positionJs ? $this->positionJs : yii\web\View::POS_READY;
            $this->view->registerJs($this->js, $position, $key = null);
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
        
        return HtmlPurifier::process($this->content);
    }
}
