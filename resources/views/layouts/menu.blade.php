<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inicio</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('proveedors.index') }}" class="nav-link {{ Request::is('proveedors*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Proveedors</p>
    </a>
</li>
