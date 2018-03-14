<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#">
<head>
    @include(('layouts.meta'))      
    @yield('title')

    <link rel="icon" href="../../favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
        
    @include('admin._css')
    @yield('css')

</head>
<body>   
    <div class="wrapper">
      <div class="sidebar" data-background-color="white" data-active-color="danger">
          @include('admin._sidebar')
      </div>
      <div class="main-panel">
          @include('admin._header')
          <div class="content">
              <div class="container-fluid">
                @yield('main')
              </div>
          </div>          
          @include('admin._footer')
      </div>     
      {{---------------------}}           
      @include('Alerts::show')
    </div>
    @include('admin._scripts')
    @yield('scripts')
    
</body>
</html>