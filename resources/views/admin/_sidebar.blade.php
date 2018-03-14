
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
                <i class="ti-view-list-alt"></i>
                <p>Table List</p>
            </a>
        </li>
        <li>
            <a href="typography.html">
                <i class="ti-text"></i>
                <p>Typography</p>
            </a>
        </li>
        <li>
            <a href="/marketing-image">
                <i class="ti-pencil-alt2"></i>
                <p>Icons</p>
            </a>
        </li>
        <li>
            <a href="maps.html">
                <i class="ti-map"></i>
                <p>Maps</p>
            </a>
        </li>
        <li>
            <a href="notifications.html">
                <i class="ti-bell"></i>
                <p>Notifications</p>
            </a>
        </li>
        <li class="active-pro">
            <a href="upgrade.html">
                <i class="ti-export"></i>
                <p>Upgrade to PRO</p>
            </a>
        </li>
    </ul>
</div>