<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_master_products';

    protected $fillable = [
        'name', 'main_image', 'price'
    ];

    public function getBrand()
    {
        return $this->belongsTo('App\Brand', 'id_brand', 'id');
    }
}
