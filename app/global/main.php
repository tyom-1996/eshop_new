<?php

use App\Slider;
use App\CategorySlider;


function slider($name, $blade = null)
{
	$slider_cat = CategorySlider::where('name', $name)->where('status', 'publish')->first();

	if (!empty($slider_cat))
		$slider = Slider::where('slider_id', $slider_cat->id)->get();
	
		if(!empty($slider) && $blade != null && view()->exists($blade))
			return view($blade)->with('items', $slider);
		else if (!empty($slider))
			return $slider;	
		else
			return false;
	
}

