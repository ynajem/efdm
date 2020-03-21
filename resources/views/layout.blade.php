<!doctype html>
<html class="default-style" lang="en">
  <head>
    @include("components.head")
  </head>
  <body>
    <div id="main">
      @include("components.navbar-white")
      @include("components.navbar-dark")
      <div id="main-content">
        <div class="container">
            @yield("content")           
        </div><!-- .container -->
      </div><!-- #main-content -->
    </div><!-- #main -->
    @include("components.footer")
    @include("components.scripts")
  </body>
</html>