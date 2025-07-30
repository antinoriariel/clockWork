<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item">
                <a href="{{ route('main') }}" class="nav-link px-2 {{ request()->routeIs('main') ? 'text-dark fw-bold' : 'text-body-secondary' }}">
                    Inicio
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('notes') }}" class="nav-link px-2 {{ request()->routeIs('notes') ? 'text-dark fw-bold' : 'text-body-secondary' }}">
                    Anotadores
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('habit-tracker') }}" class="nav-link px-2 {{ request()->routeIs('habit-tracker') ? 'text-dark fw-bold' : 'text-body-secondary' }}">
                    Hábitos
                </a>
            </li>
            @auth
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link px-2 text-body-secondary"
                   onclick="event.preventDefault(); document.getElementById('logout-form-footer').submit();">
                    Salir
                </a>
            </li>
            <form id="logout-form-footer" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @endauth
        </ul>
        <p class="text-center text-body-secondary">© {{ date('Y') }} ClockWork</p>
    </footer>
</div>
