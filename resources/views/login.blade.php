<!doctype html>
<html class="default-style" lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Najem Uness">
  <link rel="icon" href="favicon.ico">

  <title>Login</title>

  <script src="/js/pace.min.js"></script><!-- Pace Script -->
  <link rel="stylesheet" href="/css/font-awesome.min.css"><!-- Fontawesome CSS -->
  <link rel="stylesheet" href="/css/AdminLTE.css"><!-- Bootstrap CSS -->

  <!-- Main Stylesheet -->
  <link href="/css/main.css" rel="stylesheet">
  <style>
    /*!
 * The PHP Project Main Style
 * Author: Najem Uness
 * ================================*/
body {
  color: #333;
  background-color: #f1f1f1; }

button, a {
  outline: none; }

a:hover {
  text-decoration: none; }

::selection {
  color: #FFF;
  background-color: #cf640b; }

.hr-dashed {
  border-top: 1px dashed #e7eaec;
  color: #fff;
  background-color: #fff;
  height: 1px;
  margin: 20px 0; }

.hr-fancy {
  display: block;
  height: 8px;
  background: url(../img/hr.png) repeat-x;
  margin: 15px 0;
  border: 0; }

path {
  /* Inherit color from svg parent */
  fill: currentColor; }

.center {
  align-items: center;
  justify-content: center;
  min-height: 60vh; }

.pace {
  -webkit-pointer-events: none;
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none; }

.pace-inactive {
  display: none; }

.pace .pace-progress {
  background: #f37c1a;
  position: fixed;
  z-index: 2000;
  top: 0;
  right: 100%;
  width: 100%;
  height: 2px; }

.login-msg {
  height: 41px;
  padding-left: 50px;
  background: url(../img/sprites.png) 0px -1230px no-repeat; }
  .login-msg p {
    color: #9498a1;
    font-size: 10px;
    line-height: 14px; }

@media (min-width: 768px) {
  body.sidenav-toggled #content {
    margin-left: 0px; }
  body.sidenav-toggled #sidebar {
    left: -230px; } }

@media (max-width: 768px) {
  body {
    overflow-x: hidden; }
    body #sidebar {
      left: -230px; }
    body.sidenav-toggled #content {
      margin-left: 0; }
    body.sidenav-toggled #sidebar {
      left: 0; } }

#main-content {
  position: relative; }

#content {
  background-color: #F2F2F2;
  transition: margin-left 0.3s ease; }
  @media (min-width: 768px) {
    #content {
      margin-left: 230px; } }
  @media (max-width: 768px) {
    #content {
      min-width: 100%; } }
  @media print {
    #content {
      margin: 0;
      padding: 0;
      background-color: #fff; } }

#main {
  min-height: calc(100vh - 82px); }

.btn-white {
  border-color: rgba(24, 28, 33, 0.1);
  border-color: #dadce0;
  background: transparent;
  color: #5f6368;
  box-shadow: none; }
  .btn-white:hover {
    background: rgba(24, 28, 33, 0.06);
    background-color: rgba(32, 33, 36, 0.059);
    color: #5f6368; }
  .btn-white:focus {
    box-shadow: 0 0 0 2px rgba(2, 3, 3, 0.05); }

.btn-default {
  color: #5a5a5a;
  background-color: #f3f3f3;
  text-shadow: 0 1px 0 white;
  border: solid 1px gainsboro; }
  .btn-default:hover {
    color: #414040;
    border-color: #999;
    border-color: #a7a6a6; }

#navbar-dark {
  min-height: 2.6rem;
  padding: 0; }
  #navbar-dark .nav-link {
    display: block;
    padding: 12px;
    position: relative;
    white-space: nowrap; }
    #navbar-dark .nav-link:hover {
      background: rgba(255, 255, 255, 0.15); }
    #navbar-dark .nav-link::after {
      bottom: 0;
      content: "";
      display: none;
      height: 4px;
      left: 0;
      opacity: 0;
      position: absolute;
      right: 0; }
    #navbar-dark .nav-link.active {
      color: #f7f7f7; }
      #navbar-dark .nav-link.active::after {
        background: #56c7ff;
        display: block;
        opacity: 1; }

/* CodeMirror Plugin */
.CodeMirror {
  font-size: 13px;
  border: 1px solid #d6d6d6; }

/* Tagsinput Plugin */
.bootstrap-tagsinput {
  border: 1px solid rgba(24, 28, 33, 0.1);
  box-shadow: none;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }

.widget-content {
  padding: 1rem;
  flex-direction: row;
  align-items: center; }
  .widget-content .widget-content-wrapper {
    display: flex;
    flex: 1;
    position: relative;
    align-items: center; }
  .widget-content .widget-content-right {
    margin-left: auto; }
    .widget-content .widget-content-right.widget-content-actions {
      visibility: hidden;
      opacity: 0;
      transition: opacity .2s; }
  .widget-content:hover .widget-content-right.widget-content-actions {
    visibility: visible;
    opacity: 1; }
  .widget-content .widget-content-left .widget-heading {
    opacity: .8;
    font-weight: bold; }

.todo-list-wrapper .todo-indicator {
  position: absolute;
  width: 4px;
  height: 60%;
  border-radius: .3rem;
  left: .625rem;
  top: 20%;
  opacity: .6;
  transition: opacity .2s; }

.flex2 {
  flex: 2; }

.code-block pre {
  padding: 1em;
  border: 1px solid rgba(222, 229, 231, 0.6);
  border-radius: 4px;
  background-color: #f8f8f8; }
  .code-block pre code {
    padding: 0;
    font-size: 14px;
    color: inherit;
    line-height: 22px;
    white-space: pre;
    word-break: normal;
    border: none; }

.tags a, .tag {
  color: #333;
  display: inline-block;
  margin-right: 5px;
  margin-bottom: 5px;
  padding: 8px;
  background-color: #f6f6f6;
  border-radius: 3px;
  line-height: .8;
  -webkit-transition: background-color .3s ease;
  -o-transition: background-color .3s ease;
  transition: background-color .3s ease;
  font-family: proxima-nova,"Helvetica Neue",Helvetica,sans-serif;
  font-size: 13px; }

.tags a:hover, .tag:hover {
  background-color: #eee;
  color: #000; }

  </style>
</head>
<body id="login-page">
  <div class="header d-flex justify-content-between align-items-center bg-white p-3">
    <div class="login-msg">
      <h5 class="font-weight-bold">Login vers PMS</h5>
      <span class="small">Entrez vos identifiants ci-dessous</span>
    </div>
    <div class="logo">
      <a href="#"><img src="img/logo.jpg" alt="blue" title="blue"></a>
    </div>
  </div> <!-- header -->
  <div class="content my-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header text-center">
            <strong>Connexion</strong>
          </div>
          <div class="card-body">
            <form action="login.php" method="post">

              <div class="form-group">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" class="form-control" name="username" autocomplete="off">
              </div>

              <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" name="password">
              </div>

              <p>J'ai <a href="#">oublié</a> mon mot de passe.</p>
              <Button class="btn btn-primary" type="submit">Se Connecter</Button>

            </form>
          </div><!-- card body-->
        </div><!-- card -->
      </div><!-- column -->
    </div> <!-- row -->
  </div> <!-- content -->
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

      <div class="text-center">
        <p class="mt-2 mb-0">© 2018-2019 TRLCenter. All rights reserved</p>
      </div>

    </div><!-- container -->
  </div><!-- footer -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="/js/jquery.slim.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="/plugins/tagsinput/bootstrap-tagsinput.js"></script><!-- tags input plugin -->
  <script src="/plugins/codemirror/codemirror.js"></script><!-- codemirror plugin -->
  <script src="/plugins/codemirror/codemirror-sql.js"></script><!-- codemirror sql mode -->
  <script src="/plugins/highlight/highlight.pack.js"></script><!-- highlight plugin -->

  <!-- Main Application Scripts -->
  <script src="/js/app.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140388814-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-140388814-1');

  </script>

</body>
</html>
