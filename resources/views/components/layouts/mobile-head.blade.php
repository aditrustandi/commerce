<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left">
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                  </button>
    <a class="navbar-brand logo-mobile" href="#">
                                      <img src="{{asset('assets/images/logo.png')}}"  alt="Batik Melati Logo" class="img-responsive bm-logo">
                                    </a>
    <a href="javascript:void(0)" onclick="getCartItem()" class="shop-bag-responsive" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="{{asset('assets/images/icons/nav/shop_bag.png')}}" alt="" style="height: 34px;"><span class="count-notify notify"></span>
                                  </a>
                                  
    <div class="dropdown-menu panel panel-default cart-panel">
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

</div>