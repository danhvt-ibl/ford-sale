<script src="/js/app.js"></script>
<script src="/js/jquery-1.8.3.min.js"></script>    
<script src="/js/owl.carousel.min.js"></script>    
<script src="/js/jquery.bxslider.js"></script>  
<!--sweet alert -->
<script src="/js/sweetalert.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>