<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    @can('ver-rol')
    <a class="nav-link" href="/roles">
    <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    @endcan
</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    @can('ver-user')
    <a class="nav-link" href="/users">
        <i class=" fas fa-user"></i><span>Usuarios</span>
    </a>
    @endcan
</li>
