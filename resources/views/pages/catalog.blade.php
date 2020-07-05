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
                        <h3 class="content-title" style="margin-bottom:5px;">Catalog</h3>
                    </div>
                </div>

                <div class="row">

                <!-- component:aside-filter -->
                <x-partials.aside-filter/>
                <!-- endcomponent:aside-filter -->

                <!-- component:list-catalog -->
                <x-partials.catalog.list-catalog/>
                <!-- endcomponent:list-catalog -->

                </div>
              </div>
            </section>

            <!-- component: FOOTER -->
            <x-layouts.footer/>
            <!-- endcomponent: FOOTER -->

        </div>

        <!-- MAIN JS -->
        <x-main-script/>

        <!-- Price -->
        <script type="text/javascript" src="{{asset('assets/js/bootstrap-slider.js')}}"></script>

        <script type="text/javascript">

            var min = null;
            var max = null;

            var brand, color;
            var slider = new Slider("#sliderprice");
            slider.on("slide", function(slideEvt) {
                var val = slider.getValue();
                min = val[0];
                max = val[1];
                $("#min-price").html(min);
                $("#max-price").html(max);
            });

            $('#filter').on('click', function(){
                $('#listCatalog').html('');
                brand = $('#brand').val();
                color = $('#color').val();
                size = $('#size').val();
                
                data = {
                    min:min,
                    max:max,
                    brand:brand,
                    size:size,
                    color:color
                };

                let url = '/api/filter-catalog';

                postData(url, data)
                .then(function(response){
                    response.forEach(element => {
                        $('#listCatalog').append(element);
                    });
                });
                
                

            });

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

            $(document).ready(function(){
                fetch('/api/catalog')
                .then(function(result){
                    return result.json();
                    
                })
                .then(function(response){
                    
                    response.forEach(element => {
                        $('#listCatalog').append(element);
                    });
                    
                });
            });

          $(document).ready(function(){
            var min_price = $("#sliderprice").attr("data-slider-min");
            var max_price = $("#sliderprice").attr("data-slider-max");
            $("#min-price").html(min_price);
            $("#max-price").html(max_price);
          });
        </script>

    </body>
</html>
