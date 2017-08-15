<?php
/**
 * @link https://github.com/dodi111/yii2-ikslider
 * @copyright Copyright (c) 2017 Dodi
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace dodi\ikslider;

use Yii;
use yii\helpers\Html;
use yii\base\Widget;
use yii\helpers\Json;


class IkSlider extends \yii\base\Widget{
    
	public $dataProvider = null;
	public $pager = null;    
    public $title_key = 'title';
    public $image_key = 'image'; 
    public $url = '/offers/';
	public $id = 'ikslider';
	public $options = [];
	
	private $data = [];
	
	public function init(){
       	
		if ($this->dataProvider){	
			$models = $this->dataProvider->getModels();
			if (count($models) > 0){															
				$title_key = $this->title_key;
				$image_key = $this->image_key;
				foreach ($this->dataProvider->getModels() as $key=>$model){						
					$this->data[] = [
						"image" => $model->$image_key,
						"title" => $model->$title_key
					];
				}				
			} else {
				$this->data = $this->dataProvider;
			}				
		}
		$this->registerAssets();
		parent::init();
    }
	
	public function run(){
        if (!empty($this->data)){
			echo Yii::$app->view->renderFile(__DIR__ . '/views/widget.php', ['data' => $this->data, 'url' => $this->url, 'id' => $this->id]);
		}	
    }
	
	protected function registerAssets(){
        $options = Json::encode($this->options);                
		Yii::$app->view->registerJs("$('#".$this->id."').ikSlider($options);");
    }
}
