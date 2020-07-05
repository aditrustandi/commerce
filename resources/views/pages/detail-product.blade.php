<!DOCTYPE html>
<html lang="en">
    <head>
        <meta id="id-master" data-id="{{$product['id_master']}}">
        <!-- component:head -->
        <x-layouts.head/>
        <!-- endcomponent:head -->

        <style>
            .avail-color-active{
                box-shadow: 0px 0px 5px 0px #111;
            }
        </style>
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

            <!-- Shop Detail -->
            <section class="large-space bg-white" style="padding-bottom:0px;">
              <div class="container">
                <div class="row">

                  <div class="col-md-12">
                    <h3 class="content-title" style="margin-bottom:5px;">{{$product['brand']}}</h3>
                    <span class="help-block" style="text-align:center;">{{$product['name']}}</span>
                  </div>

                  <div class="col-md-6 col-md-push-3">
                    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">

                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <div class="productzoom">
                              <img src="{{asset($product['main_image'])}}" width="1108" height="1252" class="img-responsive" alt="Product detail slider" id="DataDisplay"/>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  
                  <div class="col-md-3 col-md-pull-6">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default panel-filter">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEditor" aria-expanded="true" aria-controls="collapseSort">
                        <div class="panel-heading bg-white" role="tab" id="headingEditor">
                          <h4 class="panel-title">
                              Product Description <span class="caret pull-right"></span>
                          </h4>
                        </div>
                      </a>

                      <div id="collapseEditor" class="panel-collapse collapse collapse-shop-detail" role="tabpanel" aria-labelledby="headingEditor">
                        <div class="panel-group">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                      </div>
                    </div>


                  <div class="panel panel-default panel-filter">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDelivery" aria-expanded="false" aria-controls="collapseSubCategory">
                      <div class="panel-heading bg-white" role="tab" id="headingDelivery">
                        <h4 class="panel-title">
                          Size & Fit
                        </h4>
                      </div>
                    </a>
                      <div id="collapseDelivery" class="panel-collapse collapse in collapse-shop-detail" role="tabpanel" aria-labelledby="headingDelivery">
                        <div class="panel-group">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="col-md-12">
                      <div class="product-desc">
                        <h3 class="black">{{$product['name']}}</h3>
                        <span class="help-block black">Rp. @currency($product['price'])</span>
                        <span id="prc" data-price="{{$product['price']}}" class="hidden"></span>
                       </div>
                    </div>
                    <hr>
                    <div class="col-md-12 small-space" style="padding-bottom:0px;">
                      <div class="product-size">
                        <p class="text black">Select Size</p>

                        <nav aria-label="Page navigation">
                          <ul id="size" class="pagination  pagination-size">
                          </ul>
                        </nav>

                      </div>

                    </div>
                    <hr>
                    <div class="col-md-12">
                      <div class="product-color">
                        <p class="text black" style="margin:0px;">
                            <span id="label-color"></span>
                        </p>

                        <div id="color-wrapper" style="display: inline-flex; height:34px;"></div>

                      </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                      <div class="product-qty">
                        <form class="" action="" method="post">
                            <label for="qty">Qty:</label>
                            <input id="qty" type="number" name="qty" min="1" value="1" style="color: #111;background-color: #fff;border: 1px solid #111;">
                            <input type="button" id="submit_cart" name="submit_cart" value="Add to cart">
                        </form>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </section>
            <div class="mid-space"></div>

            <!-- component: FOOTER -->
            <x-layouts.footer/>
            <!-- endcomponent: FOOTER -->

        </div>

        <!-- MAIN JS -->
        <x-main-script/>

        <!-- Plugins -->
        <script type="text/javascript" src="{{asset('assets/js/Obj.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/addSlider.min.js')}}"></script>

        <!-- Slider Color -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

        <!-- Product Zoom -->
        <script src="{{asset('assets/plugins/zoom-master/jquery.zoom.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.productzoom').zoom({ on:'click'});

            });

            var action = 1;
            $('.productzoom').on("click", viewZoom);

            function viewZoom(){
                if ( action == 1 ) {
                    $('.productzoom .zoomImg').css('cursor', 'url(images/icons/magnifier-minus.png), auto');
                    action = 2;
                } else {
                    $('.productzoom .zoomImg').css('cursor', 'url(images/icons/magnifier-plus.png), auto');
                    action = 1;
                }
            }

        </script>

        <script type="text/javascript">
            var id, sz, clr, qty, prc, total_prc;
            $(document).ready(function() {
                $('#label-color').html('Please select size');
                var sideslider = $('[data-toggle=collapse-side]');
                var sel = sideslider.attr('data-target');
                var sel2 = sideslider.attr('data-target-2');
                sideslider.click(function(event){
                    $(sel).toggleClass('in');
                    $(sel2).toggleClass('out');
                });


                id = $('#id-master').attr('data-id');

                    fetch('/api/get-detail-product/'+id)
                    .then(function(result){
                        return result.json();                        
                    })
                    .then(function(response){
                        
                        response.forEach(element => {
                            $('#size').append('<li><a href="javascript:void(0)" onclick="getAvailColor(`'+element.size+'`,`'+id+'`)" class="black">'+element.size+'</a></li>');
                        });
                        
                    
                    })
                
            });

        
            function getAvailColor(size, id)
            {
                sz = size;
                $('#label-color').html('Available color');
                $('#color-wrapper').html('');

                fetch('/api/get-color-product/'+id+'/'+size)
                    .then(function(result){
                        return result.json();                        
                    })
                    .then(function(response){
                        
                        response.forEach(element => {
                            $('#color-wrapper').append('<a class="available-color" href="javascript:void(0)" onclick="selectColor(`'+element.id+'`)"><div id="avail-color-'+element.id+'" class="avail-color" style="height:34px;width:34px;border-radius:100%;background-color:'+element.hexa_color+'"></div></a>');
                        });
                        
                    })
                
            }

            function selectColor(id_color)
            {
                clr = id_color;
                var listColor = document.getElementsByClassName('avail-color');
                var selectedColor = document.getElementById('avail-color-'+id_color);

                for (let index = 0; index < listColor.length; index++) {
                    const element = listColor[index];
                    element.classList.remove('avail-color-active');
                    
                }
                selectedColor.classList.add('avail-color-active');
                
            }

        $('#submit_cart').on('click', function(){
            qty = $('#qty').val();
            prc = $('#prc').attr('data-price');
            prc = parseInt(prc);
            qty = parseInt(qty);
            total_prc = qty*prc;
            if (qty > 0) {
                data = {
                            id_master_product:id, 
                            size:sz, 
                            id_color:clr, 
                            qty:qty, 
                            price:prc, 
                            total_price:total_prc
                        }

                postData('/api/cart-add-product', data)
                .then(function(result){
                    if (result == true) {
                        alert('Success added items to cart');
                        const notify = $('.count-notify');
                        fetch('/api/count-cart-header')
                            .then(function(notifyResult){
                                return notifyResult.json();
                                
                            })
                            .then(function(notifyResponse){
                                notify.html(notifyResponse);       
                            });
                    }else{
                        alert('Fail added items to cart')
                    }
                });

            }else{
                alert('Quantity cannot less than 1');
            }
            
        })

        async function postData(url = '', data = {}) {

            const response = await fetch(url, {
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                credentials: 'same-origin',
                headers: {
                'Content-Type': 'application/json'
                },
                redirect: 'follow', 
                referrerPolicy: 'no-referrer',
                body: JSON.stringify(data)
            });
                return response.json();
            }

          $(".panel-filter").on('click', function(){
          var panel_filter = $(this);
          var panel_heading = $(this).find(".panel-heading");
          if ($(this).find('.panel-collapse').hasClass('in')) {
            panel_filter.css("border-top", "0px solid #333");
            panel_heading.css("border-bottom", "1px solid #333");
          }else {
            panel_filter.css("border-top", "2px solid #333");
            panel_heading.css("border-bottom", "3px solid #333");
          }
        });

        $(".panel-filter").mouseenter(function(){
          var panel_filter = $(this);
          var panel_heading = $(this).find(".panel-heading");
          panel_filter.css("border-top", "2px solid #333");
          panel_heading.css("border-bottom", "3px solid #333");
        });

        $(".panel-filter").mouseleave(function(){
          var panel_filter = $(this);
          var panel_heading = $(this).find(".panel-heading");
          panel_filter.css("border-top", "0px solid #333");
          panel_heading.css("border-bottom", "1px solid #333");
        });


        </script>
    </body>
</html>
