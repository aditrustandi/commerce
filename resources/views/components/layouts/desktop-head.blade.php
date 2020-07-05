<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <div class="side-collapse in">
        <ul class="nav navbar-nav">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('catalog')}}">Catalog</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-new">
            <li class="cart-submenu side-bag">

                <a href="javascript:void(0)" onclick="getCartItem()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('assets/images/icons/nav/shop_bag.png')}}" alt=""><span class="count-notify notify"></span>
                </a>

                <div simple-bar class="dropdown-menu panel panel-default cart-panel" style="width:100%; min-width:30em;">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="count-notify"></span> Barang</h3>
                    </div>

                    <div class="panel-body">

                        <div class="cart-body-header"></div>

                        <div class="row cart-total">
                            <div class="col-xs-7">
                                <p>TOTAL</p>
                            </div>
                            <div class="col-xs-5">
                                <p class="grand_total"></p>
                            </div>
                        </div>
                        <div class="row admin-form">
                            <div class="col-xs-push-7 col-xs-5">
                                <a href="{{route('checkout')}}" class="btn btn-black">Lihat Pesanan &gt;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>


            <li>
                <a href="" data-toggle="modal" data-target=".menu-right">
                                                <img src="{{asset('assets/images/icons/nav/menu.png')}}" alt="">
                                              </a>
                <div class="modal fade menu-right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-menu" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close close-menu-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <h3 class="black">Test Senior Developer</h3>
                                        <p class="text">
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                        <p class="text">
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <p class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>
<!-- /.navbar-collapse -->