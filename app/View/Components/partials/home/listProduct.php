<?php

namespace App\View\Components\partials\home;

use Illuminate\View\Component;

class listProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.partials.home.list-product');
    }
}
