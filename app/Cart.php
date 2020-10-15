<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;


class Cart extends Model
{
    protected $table    = 'cart';
    public $timestamps  = false;
    protected $fillable = [
        'user_id', 'product_id',
    ];

  	protected $fillablei = ['image'];

    public function product_photo()
    {
        return $this->hasMany('App\ProductImage', 'product_id', 'id');
    }
}

