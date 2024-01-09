<div class="sidenav" id="sidenav">
  <div class="text-center mb-4">    
    <img src="{{ asset('img/logo.png') }}" alt="Logo" height="120px">
  </div>
  <ul class="px-1" style="overflow-y: auto; max-height: 80vh;">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="icon fa fa-home" aria-hidden="true"></i>
        <span class="nav-link-text mx-2">Inicio</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('/dashboard/sell') }}">
        <i class="icon fa fa-shopping-basket" aria-hidden="true"></i>
        <span class="nav-link-text mx-2">Nueva venta</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('/dashboard/clients') }}">
        <i class="icon fa fa-smile-o" aria-hidden="true"></i>
        <span class="nav-link-text mx-2">Clientes</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('/dashboard/products') }}">
        <i class="icon fa fa-leaf" aria-hidden="true"></i>
        <span class="nav-link-text mx-2">Productos</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="view_despachos.php?id_formulario=10&amp;seccion=Despachos">
        <i class="icon fa fa-truck" aria-hidden="true"></i>
        <span class="nav-link-text mx-2">Logística</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="view_ventas.php?id_formulario=4&amp;seccion=Ventas">
        <i class="icon fa fa-shopping-cart" aria-hidden="true"></i>
        <span class="nav-link-text mx-2">Facturación</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('/dashboard/statistics') }}">
        <i class="icon fa fa-area-chart" aria-hidden="true"></i>
        <span class="nav-link-text mx-2">Estadísticas</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('/dashboard/users') }}">
        <i class="icon fa fa-users" aria-hidden="true"></i>
        <span class="nav-link-text mx-2">Usuarios</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('/dashboard/profile') }}">
        <i class="icon fa fa-user" aria-hidden="true"></i>
        <span class="nav-link-text mx-2">Perfil</span>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}">
        <i class="icon fas fa-power-off"></i>
        <span class="nav-link-text mx-2">Salir</span>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>
</ul>
</div>

