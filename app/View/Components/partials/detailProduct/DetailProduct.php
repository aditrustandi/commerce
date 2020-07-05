<?php

namespace App\View\Components\partials\detailProduct;

use Illuminate\View\Component;

class DetailProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.partials.detail-product.detail-product');
    }
}
