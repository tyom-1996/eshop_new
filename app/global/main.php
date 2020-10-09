<?php

use App\Slider;
use App\CategorySlider;


function slider($name, $blade = null)
{
	$slider_cat = CategorySlider::where('name', $name)->where('status', 'pulish')->first();
	$slider = Slider::where('slider_id', $slider_cat->id)->get();
	
	if($blade != null && view()->exists('sliders.' . $blade))
	{
		return view('sliders.' . $blade)->with('items', $slider);
	}
	else
	{
		return $slider;
	}		
}

