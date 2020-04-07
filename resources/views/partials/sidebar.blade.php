<aside class="main-sidebar sidebar-dark-primary">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
    <span class="brand-text font-weight-light">EFDM</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/img/user1.png" class="img-circle">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->firstname." ".auth()->user()->lastname }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treevie{{ request()->routeIs('users*') ? ' menu-open' : ''}}">
          <a href="#" class="nav-link{{ request()->routeIs('users*') ? ' active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Admin Panel <i class="right fas fa-angle-left"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('users.index') }}" class="nav-link{{ request()->routeIs('users.index') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('users.create') }}" class="nav-link{{ request()->routeIs('users.create') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Add New User</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treevie{{ request()->routeIs('shifts*') ? ' menu-open' : ''}}">
          <a href="#" class="nav-link{{ request()->routeIs('shifts*') ? ' active' : ''}}">
            <i class="nav-icon fas fa-users"></i>
            <p> Equipes <i class="right fas fa-angle-left"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('shifts.create') }}" class="nav-link{{ request()->routeIs('shifts.create') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter une equipe</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('shifts.index') }}" class="nav-link{{ request()->routeIs('shifts.index') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Afficher toutes les equipes</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treevie{{ request()->routeIs('events*') ? ' menu-open' : ''}}">
          <a href="#" class="nav-link{{ request()->routeIs('events*') ? ' active' : ''}}">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p> Interventions <i class="right fas fa-angle-left"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('events.create') }}" class="nav-link{{ request()->routeIs('events.create') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Ajouter une intervetion</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('events.index') }}" class="nav-link{{ request()->routeIs('events.index') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Afficher toutes les Intervetions</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treevie{{ request()->routeIs('lines*') ? ' menu-open' : ''}}">
          <a href="#" class="nav-link{{ request()->routeIs('lines*') ? ' active' : ''}}">
            <i class="nav-icon fas fa-calendar-check"></i>
            <p> Arrêts et coupures <i class="right fas fa-angle-left"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('lines.create') }}" class="nav-link{{ request()->routeIs('lines.create') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Créer un nouveau</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('lines.index') }}/live" class="nav-link{{ request()->routeIs('lines.status') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Afficher les actifs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('lines.index') }}" class="nav-link{{ request()->routeIs('lines.index') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Afficher tout</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treevie{{ request()->routeIs('equipements*') ? ' menu-open' : ''}}">
          <a href="#" class="nav-link{{ request()->routeIs('equipements*') ? ' active' : ''}}">
            <i class="nav-icon fas fa-cogs"></i>
            <p> Equipements HS <i class="right fas fa-angle-left"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('equipements.create') }}" class="nav-link{{ request()->routeIs('equipements.create') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Créer un nouveau</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('equipements.index') }}/live" class="nav-link{{ request()->routeIs('equipements.status') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Afficher les actifs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('equipements.index') }}" class="nav-link{{ request()->routeIs('equipements.index') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Afficher tout</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/logout" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p> Logout <span class="right badge badge-danger">New</span> </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>