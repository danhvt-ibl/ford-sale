<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.3/Chart.min.js"></script>
{{--  <script src="{{ elixir('js/app.js') }}"></script>  --}}
<script src="/js/app.js"></script>
<script src="/js/jquery-1.8.3.min.js"></script>    
<script src="/js/owl.carousel.min.js"></script>    
<script src="/js/jquery.bxslider.js"></script>  
<script src="/js/sweetalert.js"></script>
<script>
    $(document).ready(function() {
        $('#box_support .box_support_wrap').append('<li id="top">&nbsp;</li>');
        $(window).scroll(function() {
            if($(window).scrollTop() != 0) {
                $('#top').fadeIn();
            }
        });
        $('#top').click(function() {
            $('html, body').animate({scrollTop:0},500);
        });
    });
    
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>