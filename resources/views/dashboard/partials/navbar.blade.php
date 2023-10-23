<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item border-left" onclick="keluar()">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="nav-link" style="background: none; outline: none; border: 0;">
                    <i class="nav-icon fas fa-power-off"></i> Logout
                </button>
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
