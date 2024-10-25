<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{ route('home') }}">
                <i class="bi bi-house-door"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-heading">Pages</li>
        <li class="nav-item"><a class="nav-link collapsed" href="{{ route('register') }}"><i class="bi bi-card-list"></i><span>Register</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i><span>Login</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="{{route('pages-blank')}}"><i class="bi bi-file-earmark"></i><span>Blank</span></a></li>
    </ul>
</aside>