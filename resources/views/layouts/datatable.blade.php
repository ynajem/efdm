<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>EFDM - Les arrêts des stations radar</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="/dist/css/adminlte.min.css"> -->
  <link rel="stylesheet" href="/css/AdminLTE.css">
  <link rel="stylesheet" href="/css/changes.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" type="text/css" href="/plugins/toastr/toastr.min.css">

  <link rel="stylesheet" href="/plugins/datatables/buttons.bootstrap4.css" />
  <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/daterangepicker.css" />
</head>

<body class="hold-transition sidebar-mini text-sm">
  <div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/" class="nav-link">Acceuil</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="http://efdm.local/contact-us" class="nav-link">Contactez Nous</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#"> <i class="far fa-user"></i> </a>
          <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
            <a href="http://efdm.local/profile" class="dropdown-item">Mon Profil</a>
            <a href="http://efdm.local/password" class="dropdown-item">Modifier le mot de passe</a>
            <div class="dropdown-divider"></div>
            <a href="/logout" class="dropdown-item">Logout</a>
          </div>
        </li>

      </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary">
      <!-- Brand Logo -->
      <a href="/" class="brand-link text-center">
        <span><b>EFDM v0.1.3 beta</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="http://efdm.local/svg/m_user.svg" class="img-circle">
          </div>
          <div class="info">
            <a href="http://efdm.local/profile" class="d-block">
              Admin User
            </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item has-treevie">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Admin Panel <i class="right fas fa-angle-left"></i> </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://efdm.local/admin/users" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Users</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://efdm.local/admin/users/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add New User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://efdm.local/admin/messages" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Read Messages</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treevie">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p> Equipes <i class="right fas fa-angle-left"></i> </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://efdm.local/shifts/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter une equipe</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://efdm.local/shifts" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Afficher toutes les equipes</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treevie">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-clipboard-list"></i>
                <p> Interventions <i class="right fas fa-angle-left"></i> </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://efdm.local/events/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter une intervetion</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://efdm.local/events" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Afficher toutes les Intervetions</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treevie">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-calendar-check"></i>
                <p> Arrêts et coupures <i class="right fas fa-angle-left"></i> </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://efdm.local/lines/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Créer un nouveau</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://efdm.local/lines/live" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Afficher les actifs</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://efdm.local/lines" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Afficher tout</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treevie">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-cogs"></i>
                <p> Equipements HS <i class="right fas fa-angle-left"></i> </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://efdm.local/equipements/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Créer un nouveau</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://efdm.local/equipements/live" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Afficher les actifs</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://efdm.local/equipements" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Afficher tout</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treevie">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-ticket-alt"></i>
                <p> Supervision <i class="right fas fa-angle-left"></i> </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="http://efdm.local/supervision/events" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Les interventions</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://efdm.local/supervision/equipements" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Les equipements H.S</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="http://efdm.local/supervision/lines" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Les arrêts et les coupures</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">

      <div class="content-header">
        <div class="container-fluid mb-2">
          <h1>Les arrêts des stations radar</h1>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          <!-- <div class="card">
            <div class="card-body">
              <div id="daterange" class="btn btn-default d-flex align-items-center" style="width: 220px">
                <i class="fa fa-calendar mr-2"></i>
                <span>Filtrer par date </span> <i class="ml-auto fa fa-caret-down"></i>
              </div>
            </div>
          </div> -->
          <!-- <div class="card"> -->
          <!-- <div class="card-body"> -->
          <!-- <table id="datatable" class="table table-sm table-striped dataTable"> -->
          @yield('content')
          <!-- </table> -->
          <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>

    </div>
    <footer class="main-footer">
      <div class="float-right d-none d-sm-inline"> EFDM </div>
      <strong>Copyright &copy; 2020.</strong> Tous les droits sont réservés..
    </footer>
  </div>

  <!-- jQuery -->
  <script src="/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/dist/js/adminlte.min.js"></script>
  <script src="/plugins/toastr/toastr.min.js"></script>
  <script src="/js/app.js"></script>


  <script>

  </script>

  <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/plugins/datatables/dataTables.bootstrap4.js"></script>
  <script src="/plugins/datatables/dataTables.buttons.min.js"></script>
  <script src="/plugins/datatables/jszip.min.js"></script>
  <script src="/plugins/datatables/buttons.html5.min.js"></script>
  <script src="/plugins/datatables/buttons.print.min.js"></script>
  <script src="/plugins/datatables/buttons.colVis.min.js"></script>
  <script src="/plugins/datatables/buttons.bootstrap4.js"></script>
  <script src="/plugins/datatables/pdfmake.min.js"></script>
  <script src="/plugins/datatables/vfs_fonts.js"></script>
  <script type="text/javascript" src="/js/moment.min.js"></script>
  <script type="text/javascript" src="/js/daterangepicker.min.js"></script>
  <script type="text/javascript" src="/js/daterangepicker-defaults.js"></script>

  <script>
    var table = $("#datatable").DataTable()
  </script>
</body>

</html>