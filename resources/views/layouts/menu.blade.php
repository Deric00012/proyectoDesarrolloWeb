<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inicio</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('proveedors.index') }}" class="nav-link {{ Request::is('proveedors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-truck"></i>
        <p>Proveedors</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('productos.index') }}" class="nav-link {{ Request::is('productos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-boxes"></i>
        <p>Productos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('inventarios.index') }}" class="nav-link {{ Request::is('inventarios*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inventarios</p>
    </a>
</li>
