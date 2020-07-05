<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CheckoutController extends Controller
{
    public function index()
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

        return view('pages.checkout', ['product'=>$product, 'grand_total'=>$grand_total]);
    }

    public function confirmCheckout(Request $request)
    {
        // $userId/$invoice
        $invoice = 'INV-'.time('now');
        $product = Cart::where('invoice', '=', NULL)
        ->update([
            'status'=>'CONFIRM',
            'invoice'=>$invoice
        ]);

        if ($product) {
            $request->session()->flash('status', true);
        }else{
            $request->session()->flash('status', false);
        }

        return redirect('/checkout');
    }
}
