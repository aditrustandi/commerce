<!-- Main JS -->
<script type="text/javascript" src="{{asset('assets/js/jquery-3.1.1.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-ui.js')}}"></script>

<!-- Twitter Bootstrap -->
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>

<!-- Scrollbar -->
<script src="{{asset('assets/plugins/scrollbar/simplebar.min.js')}}" type="text/javascript"></script>

<script>
    $(document).ready(function(){
        var notify = $('.count-notify');
        fetch('/api/count-cart-header')
            .then(function(result){
                return result.json();
                
            })
            .then(function(response){
                notify.html(response);       
            });
    });


    function getCartItem()
    {
        $(".cart-body-header").html('')
        $('.grand_total').html('')
        
        fetch('/api/get-cart-header')
            .then(function(result){
                return result.json();
                
            })
            .then(function(response){
                $(".cart-body-header").html(response.listProduct);
                $('.grand_total').html('Rp. '+response.grand_total);
            });
    }
</script>
