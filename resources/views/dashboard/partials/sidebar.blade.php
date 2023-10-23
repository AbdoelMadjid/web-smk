<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('storage/' . $identity->brand) }}" class="brand-image" style="opacity: .8" alt="Brand Image">
        {{-- <img src="" alt="" class="brand-image" style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">{{ $identity->alias }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/dashboard/identity"
                        class="nav-link {{ request::is('dashboard/identity*') ? 'active' : '' }}">
                        <i class="fas fa-info-circle nav-icon"></i>
                        <p>Identitas Sekolah</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/header" class="nav-link {{ request::is('dashboard/header*') ? 'active' : '' }}">
                        <i class="fas fa-pager nav-icon"></i>
                        <p>Header</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/welcome"
                        class="nav-link {{ request::is('dashboard/welcome*') ? 'active' : '' }}">
                        <i class="fas fa-star nav-icon"></i>
                        <p>Sambutan</p>
                    </a>
                </li>

                <li
                    class="nav-item mb-3 {{ request::is('dashboard/master-data*') ? 'menu-is-opening menu-open ' : '' }}">
                    <a href="javascript:void(0)"
                        class="nav-link {{ request::is('dashboard/master-data*') ? 'active ' : '' }}">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard/master-data/kelas"
                                class="nav-link {{ request::is('dashboard/master-data/kelas*') ? 'active' : '' }}">
                                <i class="fas fa-door-open nav-icon"></i>
                                <p>Kelas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/master-data/jurusan"
                                class="nav-link {{ request::is('dashboard/master-data/jurusan*') ? 'active' : '' }}">
                                <i class="fas fa-graduation-cap nav-icon"></i>
                                <p>Jurusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/master-data/ekstrakurikuler"
                                class="nav-link {{ request::is('dashboard/master-data/ekstrakurikuler*') ? 'active' : '' }}">
                                <i class="far fa-futbol nav-icon"></i>
                                <p>Ekstrakurikuler</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/master-data/category"
                                class="nav-link {{ request::is('dashboard/master-data/category*') ? 'active' : '' }}">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Kategori Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/master-data/posts"
                                class="nav-link {{ request::is('dashboard/master-data/posts') ? 'active' : '' }}">
                                <i class="fas fa-file nav-icon"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/master-data/admin"
                                class="nav-link {{ Request::is('dashboard/master-data/admin') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-cog"></i>
                                <p>
                                    Admin
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <hr class="dropdown-divider w-75 m-auto" style="opacity: .3">

                <li class="nav-item mt-3">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home Page
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
