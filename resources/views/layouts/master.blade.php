<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#">
<head>
    @include(('layouts.meta'))      
    @yield('title')

    <link rel="icon" href="../../favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>

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
    <footer>
        
    </footer>   
    
    {{---------------------}}           
    @include('layouts.scripts')
    @include('Alerts::show')
    @yield('scripts')
    
</body>
</html>