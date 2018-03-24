
<div class="sidebar-wrapper">
    <div class="logo">
        <a href="/" class="simple-text">
            Ford Bình Thuận
        </a>
    </div>

    <ul class="nav">
        <li class="{{ Request::is('admin') ? 'active' : '' }}">
            <a href="/admin">
                <i class="ti-panel"></i>
                <p>Bảng điều khiển</p>
            </a>
        </li>
        <li class="{{Request::is('profile') ? 'active' : ''}}">
            <a href="/profile">
                <i class="ti-user"></i>
                <p>Người dùng</p>
            </a>
        </li>
        <li class="{{Request::is('dong-xe') ? 'active' : ''}}">
            <a href="/dong-xe">
                <i class="ti-car"></i>
                <p>Dòng xe</p>
            </a>
        </li>
        <li class="{{Request::is('marketing-image') ? 'active' : ''}}">
            <a href="/marketing-image">
                <i class="ti-gallery"></i>
                <p>Gallery</p>
            </a>
        </li>
        <li class="{{Request::is('bai-dang') ? 'active' : ''}}">
            <a href="/bai-dang">
                <i class="ti-layout-list-post"></i>
                <p>Bài đăng</p>
            </a>
        </li>
        <li class="{{Request::is('comments') ? 'active' : ''}}">
            <a href="/comments">
                <i class="ti-comment"></i>
                <p>Comments</p>
            </a>
        </li>
        <li class="{{Request::is('plugins') ? 'active' : ''}}">
            <a href="/plugins">
                <i class="ti-plug"></i>
                <p>Plugins</p>
            </a>
        </li>
    </ul>
</div>