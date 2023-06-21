<link rel="stylesheet" type="text/css" href="{{ asset('css/componentes.css') }}">

<nav x-data="{ open: false }" class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="{{ route('dashboard') }}">
        <x-ma_application-logo/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <x-ma_nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-ma_nav-link>
        </li>
        <li class="nav-item">
            <x-ma_nav-link :href="route('productos.index')" :active="request()->routeIs('productos.index')">
                Productos
            </x-ma_nav-link>
        </li>
        <li class="nav-item">
            <x-ma_nav-link :href="route('categorias.index')" :active="request()->routeIs('categorias.index')">
                Categorías
            </x-ma_nav-link>
        </li>
        <li class="nav-item">
            <x-ma_nav-link :href="route('clientes')" :active="request()->routeIs('clientes')">
                Clientes
            </x-ma_nav-link>
        </li>
        <li class="nav-item">
            <x-ma_nav-link :href="route('compras')" :active="request()->routeIs('compras')">
                Compras
            </x-ma_nav-link>
        </li>
      </ul>
      <span class="navbar-text">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="texto-blanco">
            {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu position-absolute end-0">
            <li>
                <x-ma_dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-ma_dropdown-link>
            </li>
            <li>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-ma_dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-ma_dropdown-link>
                </form>
            </li>
        </ul>
      </span>
    </div>
  </div>
</nav>
