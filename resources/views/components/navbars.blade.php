<nav class="navbar navbar-expand navbar-light bg-white shadow border-bottom">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div>
        <img class="img-fluid" width="52" height="48"
            src="{{ asset('adminkit/static/img/logo/logo_yayasan_athaya.jpg') }}" alt="logo">
    </div>

    <div class="mx-4">
        <x-search-bar />
    </div>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('storage/foto_user/' . Auth::user()->foto_user) }}"
                        class="avatar img-fluid rounded-circle rounded me-1" alt="{{ Auth::user()->name }}" />
                    <span class="text-dark">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('profiles') }}"><i class="align-middle me-1"
                            data-feather="user"></i>
                        Profile</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logoutProcess') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Keluar</button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
