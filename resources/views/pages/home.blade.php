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
                        <h3 class="content-title" style="margin-bottom:5px;">Product Hero</h3>
                    </div>
                </div>

                <div class="row">

                <!-- component:aside-filter -->
                <!-- <x-partials.aside-filter/> -->
                <!-- endcomponent:aside-filter -->

                <!-- component:list-product -->
                <x-partials.home.list-product/>
                <!-- endcomponent:list-product -->

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
        
        <script type="text/javascript">

            $(document).ready(function(){
                fetch('/api/product-hero')
                .then(function(result){
                    return result.json();
                    
                })
                .then(function(response){
                    
                    response.forEach(element => {
                        $('#productHero').append(element);
                    });
                    
                });
            });
        </script>

    </body>
</html>
