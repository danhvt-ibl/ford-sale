@extends('layouts.master')
@section('title')
    <title>Bình Thuận Ford - 0902 473 757 - Tiến Bình Thuận Ford Việt Nam</title>
@endsection

@section('css')    
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/nivo-slider.css">
    <link rel="stylesheet" href="/css/themes-nivo/{{$theme_nivo or 'default'}}/{{$theme_nivo or 'default'}}.css">
    
    <style>
        .slider-section {
            max-width:1280px;
            margin:0 auto;
            overflow-x: hidden;
            width:100%;
        }
        .nivo-controlNav {
            left:45% !important;
            bottom:12px !important;
        }
    </style>
@endsection

@section('main')
    {{--  SLIDER SECTION   --}}
    <section class="slider-section">
        @if ($notEnoughImages)
            <div class="container"> 
                <div class="panel panel-warning" style="margin-top:30px">
                    <div class="panel-body">
                        Not enough images in slider.  Populate images or remove slider include from pages.index.
                    </div>
                    
                </p>
            </div>                
        @else
        {{--  <div id="slider-wrapper" class="theme-{{ $theme_nivo }}">       --}}
            <div id="slider_show_slider" class="nivoSlider" style="height:418px">
                <a href="#" target="_self">  
                    <img src="{{ $featuredImage->showImage($featuredImage, $imagePath) }}"
                    alt="{{ $featuredImage->image_name }}" 
                        width="100%" data-thumb="{{ $featuredImage->showImage($featuredImage, $imagePath) }}" 
                        title="#htmlcaption">
                </a>     
                @foreach ($activeImages as $image)         
                <a href="#" target="_self">  
                     <img src="{{ $image->showImage($image, $imagePath)}}"
                     alt="{{ $image->image_name }}" 
                        width="100%" data-thumb="{{ $image->showImage($image, $imagePath) }}" 
                        title="#htmlcaption">
                </a>     
                @endforeach
            </div>
            <div id="htmlcaption" class="nivo-html-caption">    
            
                    <div class="info">
                        <h3>Khuyến mãi tháng 1/2018</h3>
                        <div class="short"></div>
                        <div class="more"><a href="http://fordvietnam.com/ford-ranger.html">Xem chi tiết</a></div>
                    </div> 
                                           
            </div>
        @endif
        {{--  </div>          --}}
    </section>     

    <section class="list-car">
        <div class="container">
            <div class="list_product_focus">
                <div id="owl-demo" class="owl-carousel owl-theme">                    
                    <div class="item"> 
                        <div class="img">
                            <a href="/ford-ecosport.html">
                                <img src='http://fordvietnam.com/vnt_upload/product/Ford_Ecosport/FORD-ECOSPORT-TITANIUM.jpg' alt='Ford Ecosport' />
                            </a>
                        </div>
                        <h3>
                            <a href="/ford-ecosport.html">Ford Ecosport</a>
                        </h3>
                        <div class="price">Call</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main_content_wrap">
        @include('partials.menu-main')
    </section>
    @include('partials.pop-menu')
@endsection

@section('scripts')
    <script src="/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <script>
        $(window).on('load',function() {
            $('#slider_show_slider').nivoSlider({ 
                effect:'random',  
                pauseTime:8000, 
                directionNav:true , 
                controlNav: true, 
                pauseOnHover:false ,
                startSlide: 0
            });
        });
        $(document).ready(function() {
            var owl = $('#owl-demo');
            owl.owlCarousel({
                nav:true,
                dots:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },            
                    960:{
                        items:5
                    },
                    1200:{
                        items:6
                    }
                },
                navText: []
                
            });
            owl.on('mousewheel', '.owl-stage', function (e) {
                if (e.deltaY>0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
        });
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                captions: true,
                pager:false,
                auto:true,
                speed:1000
            });
        });
    
    </script>
    
@endsection