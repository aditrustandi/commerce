<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class DetailProductController extends Controller
{
    public function index($id)
    {
        $product = Product::where('tbl_master_products.id',$id)
        ->join('tbl_brand', 'tbl_master_products.id_brand', '=', 'tbl_brand.id')
        ->first([
            'tbl_brand.brand', 'tbl_master_products.id AS id_master', 'tbl_master_products.id_brand', 'tbl_master_products.name', 'tbl_master_products.main_image', 'tbl_master_products.price'
        ])->toArray();

        return view('pages.detail-product', ['product'=>$product]);
    }
}
