@extends('layouts.master')
@section('title')
    <title>Bình Thuận Ford - 0902 473 757 - Tiến Bình Thuận Ford Việt Nam</title>
@endsection

@section('css')
   <link rel="stylesheet" href="/css/coin-slider-styles.css">
@endsection

@section('main')
    <div class="slider">
        <div id="coin-slider">
            @foreach ($slides as $slide)
            <a href="{{ $slide->url }}">
                <img src="{{ $slide->image_url }}" alt="" width="100%">
                <span>
                        {{ $slide->title }}
                </span>
            </a>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/js/coin-slider.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#coin-slider').coinslider({
                width: 900, 
                height:500,
                delay: 5000
            });
        });
    </script>
@endsection