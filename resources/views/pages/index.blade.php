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
        {{--  <div id="slider-wrapper" class="theme-{{ $theme_nivo }}">       --}}
            <div id="slider_show_slider" class="nivoSlider" style="height:418px">
                @foreach ($slides as $slide)           
                <a href="{{ $slide->url }}" target="_self">  
                     <img src="{{ $slide->image_url }}" alt="" 
                        width="100%" data-thumb="{{ $slide->image_url }}" 
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
        {{--  </div>          --}}
    </section>     

    
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
                pauseOnHover:false  
            });
        });
    </script>
    
@endsection