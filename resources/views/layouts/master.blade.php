<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bình Thuận Ford - 0902 473 757 - Tiến Bình Thuận Ford Việt Nam - Ford Explorer, Ford Ranger, Ford Everest, Ford Ecosport, Ford Transit, Ford Focus, Ford Fiesta Phan Thiết..." />
    <meta name="keywords" content="ford binh thuan,  binh thuan ford,  ford phan thiết,  phan thiết ford,  ford việt nam,  ford explorer binh thuan,  ford ecosport binh thuan,  ford focus binh thuan,  ford everest binh thuan,  ford ranger binh thuan,  ford transit binh thuan,  ford fiesta binh thuan" />
    <meta name="news_keywords" content="ford binh thuan,  binh thuan ford,  ford phan thiết,  phan thiết ford,  ford việt nam,  ford explorer binh thuan,  ford ecosport binh thuan,  ford focus binh thuan,  ford everest binh thuan,  ford ranger binh thuan,  ford transit binh thuan,  ford fiesta binh thuan" />
    <meta name="author" content="Tiến Bình Thuận Ford 0902473757 Bình Thuận Ford - 0902 473 757 - Tiến Bình Thuận Ford Việt Nam" />
    <meta name="copyright" content="Bình Thuận Ford - 0902 473 757 - Tiến Bình Thuận Ford Việt Nam &#91;ntvu.binhthuanford@gmail.com&#93;" />
    <meta name="hotline" content="Tiến Bình Thuận Ford 0902473757 Bình Thuận Ford - 0902 473 757 - Tiến Bình Thuận Ford Việt Nam" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Bình Thuận Ford - 0902 473 757 - Tiến Bình Thuận Ford Việt Nam" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Bình Thuận Ford - 0902 473 757 - Tiến Bình Thuận Ford Việt Nam - Ford Explorer, Ford Ranger, Ford Everest, Ford Ecosport, Ford Transit, Ford Focus, Ford Fiesta Phan Thiết..." />
    <meta property="og:site_name" content="Bình Thuận Ford - 0902 473 757 - Tiến Bình Thuận Ford Việt Nam" />
    <meta property="og:url" content="http://muaxefordbinhthuan.com/" />
        
    @yield('title')

    <link rel="icon" href="../../favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="canonical" href="http://muaxefordbinhthuan.com/">
        
    @include('layouts.css')
    @yield('css')

</head>
<body>   
    <header>
        @include('partials.navbar')
    </header>
    {{--  MAIN partials  --}}

    @yield('main')    
    
    {{---------------------}}        
    <script src="/js/app.js"></script>    
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('scripts')
    
</body>
</html>