<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand border-bottom border-1 border-secondary" href="#">
            <span class="align-middle">eRaport - Paud Athaya </span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Menu Halaman
            </li>

            <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link " href="{{ route('dashboard') }}">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('dataKelas') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('dataKelas') }}">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Data Kelas</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('siswa') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('siswa') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Data Siswa</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('nilai') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('nilai') }}">
                    <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Nilai Siswa</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('ekstrakurikuler') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('ekstrakurikuler') }}">
                    <i class="align-middle" data-feather="clipboard"></i> <span
                        class="align-middle">Ekstrakurikuler</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('periodik') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('periodik') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Periodik
                        Siswa</span>
                </a>
            </li>

            <li class="sidebar-item {{ request()->routeIs('raport') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('raport') }}">
                    <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Cetak Raport</span>
                </a>
            </li>

            <li class="sidebar-header">
                Lainnya
            </li>

            <li class="sidebar-item ">
                <a class="sidebar-link" href="{{ route('aboutApp') }}">
                    <i class="align-middle" data-feather="alert-circle"></i> <span class="align-middle">Tentang
                        Aplikasi</span>
                </a>
            </li>

        </ul>
    </div>
</nav>
