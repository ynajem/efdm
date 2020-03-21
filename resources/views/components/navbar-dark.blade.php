<nav id="navbar-dark" class="navbar navbar-expand-sm navbar-dark bd-navbar mb-4">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <div class="navbar-nav mr-auto">
        <a class="nav-link{{ Request::path() === '/' ? ' active' : ''}}" href="/">Accueil</a>
        <div class="nav-item dropdown">
              <a class="nav-link{{ Request::is('shifts*') ? ' active' : ''}}" href="#" id="shifts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Equipes</a>
              <div class="dropdown-menu" aria-labelledby="shifts">
                <a class="dropdown-item" href="/shifts/create">Ajouter</a>
                <a class="dropdown-item" href="/shifts">Afficher</a>
              </div>
        </div>
        <div class="nav-item dropdown">
              <a class="nav-link{{ Request::is('events*') ? ' active' : ''}}" href="#" id="events" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Interventions</a>
              <div class="dropdown-menu" aria-labelledby="events">
                <a class="dropdown-item" href="/events/create">Ajouter</a>
                <a class="dropdown-item" href="/events">Afficher</a>
              </div>
        </div>
        <a class="nav-link{{ Request::path() === 'add-code' ? ' active' : ''}}" href="/add-code">Add Code</a>
        <a class="nav-link{{ Request::path() === 'run-sql' ? ' active' : ''}}" href="/run-sql">Run SQL</a>
        <a class="nav-link{{ Request::path() === 'contact-us' ? ' active' : ''}}" href="/contact-us">Contact Us</a>
        <a class="nav-link{{ Request::path() === 'dump' ? ' active' : ''}}" href="/dump">Dump Link</a>
      </div>
      <a href="/events/create" class="btn btn-danger"><span class="fa fa-plus mr-2"></span> Ajouter une intervention</a>
    </div><!-- menu -->
  </div><!-- container -->
</nav>