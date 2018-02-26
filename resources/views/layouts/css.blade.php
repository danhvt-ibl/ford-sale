<!-- Styles -->
<link href="/css/app.css" rel="stylesheet">
<style>
    body{
        padding-top: 65px;
    }
    .circ{
        width : 40px;
        vertical-align: middle;
        border-radius: 50%;
        box-shadow: 0 0 0 2px #fff;
        margin-top: 5px;
        }
    .circ:hover{
        box-shadow: 0 0 0 3px #f00;
    }

    {{--  navbar custom  --}}
    .navbar-custom {
        background-color: #273896;
        background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zd…0iMTAwJSIgc3R5bGU9ImZpbGw6IHVybCgjbGluZWFyLWdyYWRpZW50KTsiLz4NCjwvc3ZnPg==);
        background-image: -moz-linear-gradient(top,#1677E0,#273896);
        background-image: -webkit-gradient(linear,0 0,0 100%,from(#1677E0),to(#273896));
        background-image: -webkit-linear-gradient(top,#1677E0,#273896);
        background-image: -o-linear-gradient(top,#1677E0,#133F696);
        background-image: linear-gradient(to bottom,#1677E0,#133F69);
    }
    .navbar-custom .navbar-nav > li > a {
        display: block;
        text-transform: uppercase;
        color: #E5E5E5;
        padding: 0px 14px;
        line-height: 68px;
        text-decoration: none;
        position: relative;
    }

    .navbar-custom .navbar-nav > li.active > a {
        background-color: rgba(0,0,0,0.08) !important;
        text-decoration: none;
    }

    .navbar-custom .navbar-nav > li > a:hover, .navbar-custom .navbar-nav > li > a:active,
    .navbar-custom .navbar-nav > li > a:focus{
        background-color: rgba(0,0,0,0.08) !important;
        text-decoration: none;
    }

    @media screen and (max-width: 768px) {
       .navbar-brand>img {
           margin-top: -10px
       }
    }

    .navbar-custom .navbar-toggle {
        border-color: #989898;
    }

    .navbar-custom .navbar-toggle .icon-bar {
        background-color: #fff;
    }
    
</style>