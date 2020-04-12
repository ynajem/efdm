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
      <a href="{{ route('contactus.create') }}" class="nav-link">Contactez Nous</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#"> <i class="far fa-user"></i> </a>
      <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
        <a href="{{ route('profile.show') }}" class="dropdown-item">Profil</a>
        <a href="{{ route('profile.password') }}" class="dropdown-item">Modifier le mot de passe</a>
        <div class="dropdown-divider"></div>
        <a href="/logout" class="dropdown-item">Log Out</a>
      </div>
    </li>

  </ul>
</nav>