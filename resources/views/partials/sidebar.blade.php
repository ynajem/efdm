<aside class="main-sidebar sidebar-dark-primary">
  <!-- Brand Logo -->
  <a href="/" class="brand-link text-center">
    <span><b>{{ config('app.name') }}</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset(me()->avatar) }}" class="img-circle">
      </div>
      <div class="info">
        <a href="{{ route('profile.show') }}" class="d-block">
          {{ me()->fullname }}
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">

        @can('admin')
        <li class="nav-item has-treevie{{ request()->is('admin/*') ? ' menu-open' : ''}}">
          <a href="#" class="nav-link{{ request()->is('admin/*') ? ' active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Admin Panel <i class="right fas fa-angle-left"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('users.index') }}" class="nav-link{{ request()->routeIs('users.*') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('entities.index') }}" class="nav-link{{ request()->routeIs('entities.*') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Entities</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('messages.index') }}" class="nav-link{{ request()->routeIs('messages.index') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Messages</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('roles.index') }}" class="nav-link{{ request()->routeIs('roles.*') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Roles</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('abilities.index') }}" class="nav-link{{ request()->routeIs('abilities.*') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Abilities</p>
              </a>
            </li>
          </ul>
        </li>
        @endcan

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
            <i class="nav-icon fa fa-wrench"></i>
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

        <li class="nav-item has-treevie{{ request()->routeIs('reports*') ? ' menu-open' : ''}}">
          <a href="#" class="nav-link{{ request()->routeIs('reports*') ? ' active' : ''}}">
            <i class="nav-icon fas fa-table"></i>
            <p> Rapports et tableaux <i class="right fas fa-angle-left"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('reports.index') }}" class="nav-link{{ request()->routeIs('reports.index') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Arrêts et coupures</p>
              </a>
            </li>
          </ul>
        </li>

        @can('supervise')
        <li class="nav-item has-treevie{{ request()->routeIs('supervision*') ? ' menu-open' : ''}}">
          <a href="#" class="nav-link{{ request()->routeIs('supervision*') ? ' active' : ''}}">
            <i class="nav-icon fa fa-desktop"></i>
            <p> Supervision <i class="right fas fa-angle-left"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('supervision.events') }}" class="nav-link{{ request()->routeIs('supervision.events') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Interventions</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('supervision.equipements') }}" class="nav-link{{ request()->routeIs('supervision.equipements') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Equipements H.S</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('supervision.lines') }}" class="nav-link{{ request()->routeIs('supervision.lines') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Arrêts et coupures</p>
              </a>
            </li>
          </ul>
        </li>
        @endcan

        @can('edit_objects')
        <li class="nav-item has-treevie{{ request()->routeIs('*objets*') ? ' menu-open' : ''}}">
          <a href="#" class="nav-link{{ request()->routeIs('*objets*') ? ' active' : ''}}">
            <i class="nav-icon fa fa-cogs"></i>
            <p> Gestion des objets <i class="right fas fa-angle-left"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('objets.index') }}" class="nav-link{{ request()->routeIs('objets.index') ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Intervention</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('objets.index'). "?type=3" }}" class="nav-link{{ request()->routeIs('objets.index'. "?type=3" ) ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Equipements HS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('objets.index')."?type=2" }}" class="nav-link{{ request()->routeIs('objets.index'. "?type=2") ? ' active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Arrêts et coupures</p>
              </a>
            </li>
          </ul>
        </li>
        @endcan

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
