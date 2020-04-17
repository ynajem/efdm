<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials.head')
</head>

<body class="hold-transition sidebar-mini text-sm skin-blue-light">
  <div class="wrapper">

    @include('partials.navbar')
    @include('partials.sidebar')

    <div class="content-wrapper">

      <div class="content-header">
        <div class="container-fluid mb-2">
          <h1 class="m-0 text-dark">@yield('title')</h1>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>

    </div>
    @include('partials.footer')
  </div>

  @include('partials.scripts')
</body>

</html>
