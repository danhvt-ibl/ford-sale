<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="header_top">
        <div class="container">Hotline: 090 2725 338</div>
    </div>
    <div class="header_bottom">
        <div class="container">       
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/images/logo/logo-binhthuanford.png" width="200" alt="" class="big-logo">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ (Request::is('gioi-thieu') ? 'active' : '') }} hvr-underline-from-left"><a href="/gioi-thieu">Giới thiệu</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dòng xe <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <div class="container">
                                <li><a href="/car">Dòng xe</a></li>
                            </div>
                            
                            {{--  @if (Auth::check() && Auth::user()->isAdmin())
                            <li><a href="/marketing-image">Marketing Images</a></li>
                            @endif  --}}
                        </ul>
                    </li>            
                    <li class="{{ (Request::is('bang-gia-xe') ? 'active' : '') }} hvr-underline-from-left"><a href="bang-gia-xe">Bảng giá xe</a></li>
                    <li class="{{ (Request::is('tin-tuc') ? 'active' : '') }} hvr-underline-from-left"><a href="#">Tin tức</a></li>
                    <li class="{{ (Request::is('tu-van') ? 'active' : '') }} hvr-underline-from-left"><a href="#">Tư vấn</a></li>
                    <li class="{{ (Request::is('lien-he') ? 'active' : '') }} hvr-underline-from-left"><a href="/lien-he">Liên hệ</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @if(Auth::user()->isAdmin())
                            <li><a href="/admin">Admin</a></li>
                            @endif
                            <li><a href="/user">Users</a></li>
                            <li><a href="/my-profile">Profile</a></li>
                            <li><a href="/settings">Settings</a></li>
                            <li>
                                <a href="/logout"
                                   onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li><img class="circ" src="{{ Gravatar::get(Auth::user()->email)  }}"></li>    
                @else
                    <li><a href="/login"><i class="glyphicon glyphicon-lock"></i> Đăng nhập</a></li>
                    {{--  <li><a href="/register">Register</a></li>  --}}
                @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    
</nav>

