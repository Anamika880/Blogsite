<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        <!-- <a class="sidebar-brand brand-logo" href="{{route('Dashboard')}}"><img src="{{asset('frontend/images/nav-logo.png')}}" alt="logo" style="border-radius: 60%;" /></a> -->
        <!-- <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="{{route('Dashboard')}}"><img src="{{asset('frontend/imagPes/nav-logo.png')}}" alt="logo" style="border-radius: 50%;" /></a> -->
    </div>
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{asset('backend/images/faces/face1.jpg')}}" alt="profile" />
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column pr-3">
                    <span class="font-weight-medium mb-2">{{Auth::user()->name}}</span>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('Dashboard') ? 'active' : '' }}" href="{{route('Dashboard')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('myprofile') ? 'active' : '' }}" href="{{route('myprofile')}}">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">My Profile</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#category" data-toggle="collapse" aria-expanded="false" aria-controls="category">
                <i class="mdi mdi-sitemap menu-icon"></i>
                <span class="menu-title">Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ Request::routeIs('category.create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('category.create') }}">Create Category</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('category.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('category.index') }}">All Category</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#posts" data-toggle="collapse" aria-expanded="false" aria-controls="posts">
                <i class="mdi mdi-blogger menu-icon"></i>
                <span class="menu-title">Posts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="posts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item {{ Request::routeIs('blog.create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('blog.create') }}">Create Post</a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('blog.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('blog.index') }}">All Post</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('All-Comments') ? 'active' : '' }}" href="{{route('All-Comments')}}">
                <i class="mdi mdi-comment menu-icon"></i>
                <span class="menu-title">Comments</span>
            </a>
        </li>

    </ul>
</nav>