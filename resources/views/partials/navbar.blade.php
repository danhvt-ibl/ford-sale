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
                    <li><a href="#about">Giới thiệu</a></li>
                    <li class="active"><a href="#">Khuyến mãi</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dòng xe <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>            
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Tư vấn</a></li>
                    <li><a href="#contact">Liên hệ</a></li>
                    @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
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
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>

                @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    
</nav>

