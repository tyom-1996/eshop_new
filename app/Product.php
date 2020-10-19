<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;

class Product extends Model
{
	protected $table = 'products';

	// protected $primaryKey = 'product_id';

    protected $fillable = ['image'];

    public function product_photo()
    {
        return $this->hasMany('App\ProductImage', 'product_id', 'id');
    }


    // public function product_category()
    // {
    //     return $this->hasMany('App\CategoryProduct', 'product_id', 'id');
    // }

   

    
}
