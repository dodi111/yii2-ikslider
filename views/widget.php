<?php
use dodi\ikslider\IkSliderAsset;
use yii\helpers\Html;

IkSliderAsset::register($this);
?>
<?php
echo '<div class="slider-container" id="'.$id.'">';
	echo '<div class="slider">';
		foreach ($data as $b => $banner){
			echo '<div class="slider__item">';
				echo Html::img($url.$banner['image'],['alt' => $banner['title'], 'title' => $banner['title']]);
				//echo '<img src="images/1.jpg" alt="">';
				echo '<span class="slider__caption">'.$banner['title'].'</span>';
			echo '</div>';
		}
	echo '</div>';
	echo '<div class="slider__switch slider__switch--prev" data-ikslider-dir="prev">';
		echo '<span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.89 17.418c.27.272.27.71 0 .98s-.7.27-.968 0l-7.83-7.91c-.268-.27-.268-.706 0-.978l7.83-7.908c.268-.27.7-.27.97 0s.267.71 0 .98L6.75 10l7.14 7.418z"/></svg></span>';
	echo '</div>';
	echo '<div class="slider__switch slider__switch--next" data-ikslider-dir="next">';
		echo '<span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 20 20"><path d="M13.25 10L6.11 2.58c-.27-.27-.27-.707 0-.98.267-.27.7-.27.968 0l7.83 7.91c.268.27.268.708 0 .978l-7.83 7.908c-.268.27-.7.27-.97 0s-.267-.707 0-.98L13.25 10z"/></svg></span>';
	echo '</div>';
echo '</div>';
?>