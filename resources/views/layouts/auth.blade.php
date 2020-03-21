<!doctype html>
<html class="default-style" lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<br />
    <b>Notice</b>:  Undefined variable: page_description in <b>/home/uness/Data/web/inc/inc.head.php</b> on line <b>4</b><br />
    ">
    <meta name="author" content="Najem Uness">
    <link rel="icon" href="favicon.ico">

    <title>Login</title>

    <script src="/js/pace.min.js"></script><!-- Pace Script -->
    <link rel="stylesheet" href="/css/font-awesome.min.css"><!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css"><!-- Bootstrap CSS -->

    <!-- Plugins -->
    <link rel="stylesheet" href="/plugins/tagsinput/bootstrap-tagsinput.css"><!-- Bootstrap Tagsinput -->
    <link rel="stylesheet" href="/plugins/codemirror/codemirror.css"><!-- CodeMirror Plugin -->
    <link rel="stylesheet" href="/plugins/highlight/github.min.css"><!-- Highlight JS Plugin -->
    <link rel="stylesheet" href="/plugins/datepicker/datepicker.css"><!-- Datepicker Plugin -->

    <!-- Main Stylesheet -->
    <link href="/css/main.css" rel="stylesheet">  
  </head>
  <body id="login-page">
    <div class="header d-flex justify-content-between align-items-center bg-white p-3" >
      <div class="login-msg">
        <h5 class="font-weight-bold">Login vers PMS</h5>
        <span class="small">Entrez vos identifiants ci-dessous</span>
      </div>
      <div class="logo">
        <a href="#"><img src="img/logo.jpg" alt="blue" title="blue"></a>
      </div>
    </div> <!-- header -->
    <div class="content my-5">
      @yield('content')
    </div>
    <div class="footer p-2">
      <div class="container">
        <div class="text-center d-md-flex align-items-center">
          <i class="d-block fa fa-stop-circle fa-2x mr-md-5 text-primary"></i>

          <div class="nav mx-md-auto d-flex justify-content-center">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/logout">Logout</a>
          </div><!-- nav -->

          <div class="d-flex align-items-center justify-content-md-between justify-content-center my-2">
            <a href="#"><i class="d-block fa fa-facebook-official text-muted fa-lg mx-2"></i></a>
            <a href="#"><i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i></a>
            <a href="#"><i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i></a>
          </div>

        </div>

        <div class="text-center"><p class="mt-2 mb-0">© 2020 ONDA. Tous les droits sont réservés</p></div>

      </div><!-- container -->
    </div><!-- footer -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

  </body>
</html>