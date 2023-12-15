<div class="mt-3 mb-3 border-bottom p-2">
    <img src="{{asset('img/logo.svg')}}">
</div>
<div class="sider_bar">
<input class="menu-btn" type="checkbox" id="menu-btn" />
<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
<ul class="menu d-none d-sm-block" id="menu_sider">
    <li class="nav-item">
        <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.create_user')}}" class="nav-link">
            <img class="link-icon" data-feather="user" height="14" src="{{asset('img/pen.png')}}">
            <span class="link-title">Create_user</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.buy_machin')}}" class="nav-link">
            <img class="link-icon" data-feather="user" height="14" src="{{asset('img/admin/10.svg')}}">
            <span class="link-title">Buy Machine</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.partners')}}" class="nav-link">
            <img class="link-icon" data-feather="user" height="14" src="{{asset('img/admin/9.svg')}}">
            <span class="link-title">Partners</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.partners')}}" class="nav-link">
            <img class="link-icon" data-feather="user" height="14" src="{{asset('img/admin/9.svg')}}">
            <span class="link-title">Partners</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.links')}}" class="nav-link">
            <img class="link-icon" height="14" data-feather="user" src="{{asset('img/admin/6.svg')}}">
            <span class="link-title">Links</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('admin.statitics')}}" class="nav-link">
            <img class="link-icon" height="14" data-feather="user" src="{{asset('img/admin/10.svg')}}">
            <span class="link-title">Calculator</span>
        </a>
    </li>

</ul>

</div>
