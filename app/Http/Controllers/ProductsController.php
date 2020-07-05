<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\DetailProduct;
use App\Cart;

class ProductsController extends Controller
{
    
    public function producstHero()
    {
        $product_hero = Product::limit(10)->orderBy('total_sold', 'DESC')
        ->join('tbl_brand', 'tbl_master_products.id_brand', '=', 'tbl_brand.id')
        ->get(
            ['tbl_brand.brand', 'tbl_master_products.id AS id_master', 'tbl_master_products.id_brand', 'tbl_master_products.name', 'tbl_master_products.main_image', 'tbl_master_products.price']
        );
        $product = $product_hero->toArray();
        $grid = "col-md-3 col-sm-4 col-xs-6 col-xxs-6";

        return $this->templateGenerator($product, $grid);

    }

    public function catalog()
    {
        $catalog = Product::query();

        $product = $catalog->join('tbl_brand', 'tbl_master_products.id_brand', '=', 'tbl_brand.id')
        ->get(
            ['tbl_brand.brand', 'tbl_master_products.id AS id_master', 'tbl_master_products.id_brand', 'tbl_master_products.name', 'tbl_master_products.main_image', 'tbl_master_products.price']
        )->toArray();
        $grid = "col-md-4 col-sm-4 col-xs-6 col-xxs-6";

        return $this->templateGenerator($product, $grid);
    }

    public function filterCatalog(Request $request)
    {
        $brand = $request->input('brand');
        $id_color = $request->input('color');
        $size = $request->input('size');
        $min = $request->input('min');
        $max = $request->input('max');

        $query = Product::query();
        $query->join('tbl_brand', 'tbl_master_products.id_brand', '=',  'tbl_brand.id');
        if ($size !== null || $id_color !== null) {

            $query->join('tbl_detail_products', 'tbl_master_products.id', '=',  'tbl_detail_products.id_master_product');
        }

        if ($id_color !== null) {
            $query->where('tbl_detail_products.id_color', '=',  $id_color);
        }

        if ($size !== null) {
            $query->where('tbl_detail_products.size', '=',  $size);
        }

        if ($brand !== null) {
            $query->where('tbl_brand.brand', 'like',  '%'.$brand.'%');
        }

        if ($min !== null && $max !== null) {
            $query->whereBetween('price', [$min, $max]);
        }

        $product = $query->get(
            ['tbl_brand.brand', 'tbl_master_products.id AS id_master', 'tbl_master_products.id_brand', 'tbl_master_products.name', 'tbl_master_products.main_image', 'tbl_master_products.price']
        )->toArray();

        $grid = "col-md-4 col-sm-4 col-xs-6 col-xxs-6";

        return $this->templateGenerator($product, $grid);
    }

    public function detailProduct($id_master)
    {
       $product = DetailProduct::groupBy('size')->where('id_master_product', $id_master)->get([
           'tbl_detail_products.size'
       ]);

        return $product->toArray();
    }

    public function colorProduct($id, $size)
    {
        $color = DetailProduct::where('id_master_product', $id)
                                ->where('size', $size)
                                ->join('tbl_color', 'tbl_detail_products.id_color', '=', 'tbl_color.id')
                                ->get([
                                    'tbl_color.*'
                                ]);
        return $color->toArray();
    }

    public function cartAddProduct(Request $request)
    {
        $id_master_product = $request->input('id_master_product');
        $id_color = $request->input('id_color');
        $size = $request->input('size');

        $product = DetailProduct::where('id_master_product', '=', $id_master_product)
        ->where('id_color', '=', $id_color)
        ->where('size', '=', $size)
        ->first();

        $id_detail_product = $product->id;
        $qty = $request->input('qty');
        $price = $request->input('price');
        $total_price = $request->input('total_price');

        $cart = Cart::create([
                'id_detail_product'=>$id_detail_product,
                'qty'=>$qty,
                'price'=>$price,
                'total_price'=>$total_price
            ]);

        if ($cart) {
            $updateStock = DetailProduct::where('id', '=', $id_detail_product)
            ->update([
                'stock'=>$product->stock-$qty
            ]);

            if ($updateStock) {
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function countCartHeader()
    {
        $total_in_cart = Cart::where('status', '=', 'PENDING')->get();

        return $total_in_cart->count();
    }

    public function getCartHeader()
    {
        $product = Cart::where('status', '=', 'PENDING')
                        ->join('tbl_detail_products', 'tbl_cart.id_detail_product', '=', 'tbl_detail_products.id')
                        ->join('tbl_color', 'tbl_detail_products.id_color', '=', 'tbl_color.id')
                        ->join('tbl_master_products', 'tbl_detail_products.id_master_product', '=', 'tbl_master_products.id')
                        ->get([
                            'tbl_cart.*', 'tbl_detail_products.size', 'tbl_color.color', 'tbl_master_products.main_image', 'tbl_master_products.name'
                        ])->toArray();
        
        $grand_total = array_column($product, 'total_price');
        $grand_total = array_sum($grand_total);
        $grand_total = number_format($grand_total, 0, ',', '.');
        return [
            'grand_total'=>$grand_total,
            'listProduct'=>$this->templateGeneratorCartHeader($product)
        ];
    }

    private function templateGeneratorCartHeader($product)
    {
        $template = '';
        $data = [];

        foreach ($product as $item) {
            $template = '<div class="row cart-item">';
            $template .='<div class="col-xs-4 col-sm-5 cart-image">';
            $template .='<img src="'.asset($item['main_image']).'" width="113" height="138" class="img-responsive">';
            $template .='</div>';
            $template .='<div class="col-xs-8 col-sm-7 cart-desc">';
            $template .='<div class="row">';
            $template .='<p class="col-xs-12 ordetail-name">'.$item['name'].'</p>';
            $template .='<div class="ordetail-desc">';
            $template .='<span class="col-xs-5 col-sm-5">Jumlah</span>';
            $template .='<span class="col-xs-7 col-sm-7">'.$item['qty'].'</span>';
            $template .='</div>';
            $template .='<div class="ordetail-desc">';
            $template .='<span class="col-xs-5 col-sm-5">Ukuran</span>';
            $template .='<span class="col-xs-7 col-sm-7">'.$item['size'].'</span>';
            $template .='</div>';
            $template .='<div class="ordetail-desc">';
            $template .='<span class="col-xs-5 col-sm-5">Warna</span>';
            $template .='<span class="col-xs-7 col-sm-7">'.$item['color'].'</span>';
            $template .='</div>';
            $template .='<div class="ordetail-desc">';
            $template .='<span class="col-xs-5 col-sm-5">Harga</span>';
            $template .='<span class="col-xs-7 col-sm-7">Rp. '.number_format($item['total_price'], 0, ',', '.').'</span>';
            $template .='</div>';
            $template .='</div>';
            $template .='</div>';
            $template .='</div>';

            array_push($data, $template);
        }

        return $data;
    }

    private function templateGenerator($product, $grid)
    {

        $template = '';
        $data = [];
        foreach ($product as $item) {

            $colors = DetailProduct::where('id_master_product', $item['id_master'])
            ->join('tbl_color', 'tbl_detail_products.id_color', '=', 'tbl_color.id')
            ->select('tbl_color.hexa_color')->get();
    
            $colors = $colors->toArray();

            $template = '<div class="'.$grid.'">';
            $template .= '<div class="cat-img-wrap">';
            $template .= '<div class="cat-img">';
            $template .= '<img src="'.asset($item['main_image']).'" class="img-responsive" alt="">';
            $template .= '<div class="bg-black">';
            $template .= '<ul class="nav nav-tabs nav-collection">';
            $template .= '<li role="presentation"><a href="'.url('/detail-product/'.$item['id_master']).'"><img src="https://maxcdn.icons8.com/1em/PNG/16/Ecommerce/shopping_cart-16.png" title="Shopping Cart" width="16" height="16"></a></li>';
            $template .= '</ul>';

            $template .= '<ul class="nav nav-tabs nav-collection" style="top: 21.5em;">';
            foreach ($colors as $clr) {
                $template .= '<li role="presentation" style="background-color:'.$clr['hexa_color'].';height: 18px;width:18px;border-radius: 100%;box-shadow: 0px 0px 6px 0px #fff"></li>';
            }
            $template .= '</ul>';

            $template .= '</div>';
            $template .= '</div>';
            $template .= '<p class="cat-capt">';
            $template .= ''.$item['brand'].' <br>';
            $template .= ''.$item['name'].' <br>';
            $template .= '<span>Rp. '.number_format($item['price'], 0, ',', '.').'</span>';
            $template .= '</p>';
            $template .= '</div>';
            $template .= '</div>';
            array_push($data, $template);
        }

        return $data;
    }

}
