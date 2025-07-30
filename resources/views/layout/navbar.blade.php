<nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm px-3">
    <div class="container-fluid">
        <!-- Logo / Nombre -->
        <a class="navbar-brand fw-bold" href="#" style="color: #000000;">
            <i class="bi bi-code-slash me-1"></i> ClockWork
        </a>

        <!-- Toggle Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas Navbar for small screens -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-1" id="btn-nav-inicio">
                        <a class="nav-link" href="{{ route('main') }}" style="color: #000000; {{ request()->routeIs('main') ? 'background-color: #000000ff; border-radius: 10px; color: #ffffff;' : '' }}">Inicio</a>
                    </li>
                    <li class="nav-item mx-1" id="btn-nav-anotadores">
                        <a class="nav-link" href="{{ route('notes') }}" style="color: #000000; {{ request()->routeIs('notes') ? 'background-color: #000000ff; border-radius: 10px; color: #ffffff;' : '' }}">Anotadores</a>
                    </li>
                    <li class="nav-item mx-1" id="btn-nav-habtracker">
                        <a class="nav-link" href="{{ route('habit-tracker') }}" style="color: #000000; {{ request()->routeIs('habit-tracker') ? 'background-color: #000000ff; border-radius: 10px; color: #ffffff;' : '' }}">Habit Tracker</a>
                    </li>
                    @auth
                    <li class="nav-item mx-1" id="btn-nav-logout">
                        <a class="nav-link" href="{{ route('logout') }}" style="color: #000000;"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Salir
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>


