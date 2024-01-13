
    <header class="site_header site_header_dark">
        <!-- Navigation -->
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Header Logo -->
                        <a href="#" class="logotype">
                            <img src="{{asset('img/logo.svg')}}" alt="logotype">
                        </a>
                        <span class="menu-button">
						<span></span>
						<span></span>
						<span></span>
					</span>

                        <ul>
                            <li><a class="{{request()->routeIs('home')?'active':''}}" href="{{route('home')}}">HOME</a>
                            </li>
                            <li><a class="{{request()->routeIs('documentation')?'active':''}}" href="{{route('documentation')}}">Documentation</a></li>
                            <li><a  href="{{route('login')}}">Login</a></li>
                            <li><a class="{{request()->routeIs('register')?'active':''}}" href="{{route('register')}}">Register</a></li>

                            {{--  <li><a  href="">Login</a></li>
                            <li><a class="{{request()->routeIs('register')?'active':''}}" href="{{route('register')}}">Register</a></li>
                            --}}
                            <li> <w3m-core-button></w3m-core-button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Mobile Nav -->
        <div class="mobile-menu">
		<span class="close-menu-button">
			<span></span>
			<span></span>
		</span>
            <!-- Mobile Logo -->
            <a href="#" class="logotype">
                <img src="{{asset('img/logo.svg')}}" alt="logotype">
            </a>
            <ul>
                <li><a href="{{route('home')}}">HOME</a>
                </li>
                <li><a  href="{{route('documentation')}}">Documentation</a></li>
                <li><a  href="{{route('login')}}">Login</a></li>
                <li><a  href="{{route('register')}}">Register</a></li>
            </ul>
          <w3m-core-button></w3m-core-button>
        </div>
    </header>
