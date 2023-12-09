<div class="mt-3 mb-3 border-bottom p-2">
    <img src="{{asset('img/logo.svg')}}">
</div>
<ul class="">
    <li class="nav-item">
        <a href="{{route('admin.dashboard')}}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
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

