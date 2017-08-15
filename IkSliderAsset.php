<?php
/**
 * @link https://github.com/dodi111/yii2-ikslider
 * @copyright Copyright (c) 2017 Dodi
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace dodi\ikslider;

use Yii;
use yii\web\AssetBundle;

class IkSliderAsset extends AssetBundle{
    
	
	public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];
	
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init(){
       	$this->sourcePath = __DIR__ . '/assets';
        $this->js = ['js/slider.js'];   
		$this->css = ['css/slider.css'];  
		parent::init();
    }    
}