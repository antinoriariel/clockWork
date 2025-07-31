<div class="d-flex flex-column p-3 text-dark bg-light" style="position: fixed; top: 56px; left: 0; width: 280px; height: calc(100vh - 56px); z-index: 1030;">
  <!-- Contenedor principal de elementos -->
  <div class="d-flex flex-column flex-grow-1">
    <!-- Todos los hábitos -->
    <div class="mb-4">
      <button class="btn btn-primary w-100 d-flex align-items-center justify-content-start">
        <i class="bi bi-trash me-2"></i>
        Todos los hábitos
      </button>
    </div>

    <!-- Time of Day -->
    <div class="mb-2 text-uppercase small text-secondary">Hora del día</div>
    <ul class="nav flex-column mb-3">
      <li class="nav-item">
        <a href="#" class="nav-link text-dark d-flex align-items-center">
          <i class="bi bi-sun me-2"></i> Mañana <span class="badge bg-primary ms-auto">ahora</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark d-flex align-items-center">
          <i class="bi bi-brightness-alt-high me-2"></i> Tarde
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark d-flex align-items-center">
          <i class="bi bi-moon-stars me-2"></i> Noche
        </a>
      </li>
    </ul>

    <!-- Areas -->
    <div class="mb-2 text-uppercase small text-secondary">Areas</div>
    <ul class="nav flex-column mb-3">
      <li class="nav-item">
        <a href="#" class="nav-link text-dark d-flex align-items-center">
          <i class="bi bi-plus-circle me-2"></i> Nueva área
        </a>
      </li>
    </ul>

    <!-- Preferences -->
    <div class="mb-2 text-uppercase small text-secondary">Preferencias</div>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="#" class="nav-link text-dark d-flex align-items-center">
          <i class="bi bi-infinity me-2"></i> Hábitos
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark d-flex align-items-center">
          <i class="bi bi-gear me-2"></i> Configuración de la app
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark d-flex align-items-center">
          <i class="bi bi-share me-2"></i> Recursos
        </a>
      </li>
    </ul>
  </div>

  <!-- Sección de usuario posicionado al final del sidebar -->
  <div class="dropdown">
    <button class="btn btn-outline-dark w-100 d-flex align-items-center justify-content-start dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="bi bi-person-circle me-2"></i>
      <strong>{{ Auth::user() ? Auth::user()->name . ' ' . Auth::user()->surname : 'Invitado' }}</strong>
    </button>
    <ul class="dropdown-menu" aria-labelledby="userDropdown">
      <li><a class="dropdown-item" href="#">Perfil</a></li>
      <li><a class="dropdown-item" href="#">Configuración</a></li>
      <li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button class="dropdown-item" type="submit">Logout</button>
        </form>
      </li>
    </ul>
  </div>
</div>
