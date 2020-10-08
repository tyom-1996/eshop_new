<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;

class Product extends Model
{
	protected $table = 'products';

    public function product_photo()
    {
        return $this->hasMany('App\ProductImage', 'product_id', 'id');
    }


    
}
