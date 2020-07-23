<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<script src="/plugins/toastr/toastr.min.js"></script>
<script src="/js/app.js"></script>

<script>
    @foreach($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    @if(session('message'))
    toastr.success("{{ session('message') }}");
    @endif
    @if(session('error'))
    toastr.error("{{ session('error') }}");
    @endif
</script>

@yield('scripts')
