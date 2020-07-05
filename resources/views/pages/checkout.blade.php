<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- component:head -->
        <x-layouts.head/>
        <!-- endcomponent:head -->
    </head>

    <body>
        <div class="side-collapse-container">
            
            <header class="menu">
                <div class="container">
                    <div class="row">
                      <nav class="navbar navbar-default navbar-fixed">
                          <div class="container-fluid">

                            <!-- component:mobile header -->
                            <x-layouts.mobile-head/>
                            <!-- endcomponent:mobile header -->

                            <!-- component:desktop header -->
                            <x-layouts.desktop-head/>
                            <!-- endcomponent:desktop header -->

                          </div><!-- /.container-fluid -->
                      </nav>
                    </div>
                </div>
            </header>


            <!-- Shop Content -->
            <section class="bg-grey shop">

              <div class="container-fluid large-space">

                <div class="row">
                    <div class="col-md-12 mid-space">
                        <h3 class="content-title" style="margin-bottom:5px;">My Cart</h3>
                    </div>

                    @if(Session::has('status'))
                    <div class="col-md-12 mid-space">
                        @if(Session::get('status') == true)
                            <div class="alert alert-success">
                                <h4>Confirm Payment success!</h4>
                            </div>
                        @else
                        <div class="alert alert-danger">
                                <h4>Confirm Payment fail!, please contact our support</h4>
                            </div>
                        @endif
                    </div>
                    @endif
                </div>

                <div class="row">

                <!-- component:checkout -->
                <div class="admin-content">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="panel panel-default admin-panel admin-pesanan" style="background-color: white">
        
                                                <div class="panel-body">

                                                    @foreach($product as $item)
                                                    <div class="row pesanan-item">
                                                        <div class="col-sm-12">
                                                            <p class="product-name">{{$item['name']}} <span class="pull-right">Rp @currency($item['total_price'])</span></p>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-xs-5 col-sm-6 col-md-4">
                                                                    <img src="{{asset($item['main_image'])}}" width="113" height="138" class="img-responsive">
                                                                </div>
                                                                <div class="col-xs-7 col-sm-6 col-md-8 form-horizontal admin-form">
                                                                    <div class="form-group jumlah">
                                                                        <label for="jumlah" class="control-label col-xs-5 col-sm-12 col-md-5">Jumlah</label>
                                                                        <div class="col-xs-5">
                                                                            <p class="form-control-static">{{$item['qty']}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="ukuran" class="control-label col-xs-5 col-sm-12 col-md-5">Ukuran</label>
                                                                        <div class="col-xs-5">
                                                                            <p class="form-control-static">{{$item['size']}}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="ukuran" class="control-label col-xs-5 col-sm-12 col-md-5">Warna</label>
                                                                        <div class="col-xs-5">
                                                                            <p class="form-control-static">{{$item['color']}}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="panel panel-default admin-panel admin-rightbar" style="background-color: white">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-12 rightbar-item">
                                                    <p>Jumlah Total <span class="pull-right">Rp {{$grand_total}}</span></p>
                                                    <div class="button-container">
                                                        <a href="{{route('confirm-cart')}}" class="btn btn-black btn-large">Checkout &gt;</a>
                                                        <a href="{{route('catalog')}}" class="btn btn-white btn-large">Continue Shop &gt;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- endcomponent:checkout -->

                </div>
              </div>
            </section>

            <!-- component: FOOTER -->
            <x-layouts.footer/>
            <!-- endcomponent: FOOTER -->

        </div>

        <!-- MAIN JS -->
        <x-main-script/>
        
        <script type="text/javascript">
            $(document).ready(function() {
                var sideslider = $('[data-toggle=collapse-side]');
                var sel = sideslider.attr('data-target');
                var sel2 = sideslider.attr('data-target-2');
                sideslider.click(function(event){
                    $(sel).toggleClass('in');
                    $(sel2).toggleClass('out');
                });
            });
        </script>

        <!-- Scrollbar -->
        <script src="{{asset('assets/plugins/scrollbar/simplebar.min.js')}}" type="text/javascript"></script>
        
    </body>
</html>
