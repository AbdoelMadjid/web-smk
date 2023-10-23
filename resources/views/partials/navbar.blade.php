<header class="header" data-aos="fade-down">
    <a href="/" class="logo nav-link"> <img src="{{ asset('storage/' . $identity->brand) }}" style="width: 5rem;"
            alt="">
        {{ $identity->first()->alias }} </a>
    <nav class="navbar">
        <a class="nav-link" href="/">Home</a>
        <a class="nav-link" href="/about-us">Tentang Kami</a>
        <a class="nav-link" href="/posts">Berita</a>
        @if (Route::has('login'))
            @auth
                <li class="nav-link dropdown">
                    <a class="nav-link dropdown-toggle" href="javasript:void(0)" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item fs-3" style="margin: 0;" href="/dashboard">Dashboard</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item fs-3">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <a class="nav-link" href="{{ route('login') }}"
                    class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
            @endauth
        @endif
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
