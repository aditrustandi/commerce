<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'tbl_cart';

    protected $fillable = [
        'id_detail_product', 'qty', 'price', 'total_price'
    ];
}
