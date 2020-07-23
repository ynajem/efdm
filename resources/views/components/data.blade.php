@extends('layouts.admin')

@section('title', $title)

@section('styles')
<link rel="stylesheet" href="/plugins/datatables/buttons.bootstrap4.css" />
<link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap4.min.css" />
{{-- <link rel="stylesheet" type="text/css" href="/css/daterangepicker.css" /> --}}
@endsection

@section('content')
@yield('before')
<div class="card">
  <div class="card-header">
    <a class="btn btn-sm btn-success" href="{{ $route }}"><span class="fa fa-plus mr-2"></span> {{ trans('global.add') }} </a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      {{ $slot }}
    </div>
  </div>
</div>
@yield('after')
@endsection

@section('scripts')
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
  let table = $(".datatable").DataTable({
    responsive: true
  })
  // var table = $('.datatable').DataTable({
  //   buttons: [{
  //     extend: 'print',
  //     text: 'Print current page',
  //     autoPrint: false,
  //     exportOptions: {
  //       columns: ':visible',
  //     },
  //     customize: function(win) {
  //       $(win.document.body).find('table').addClass('display').css('font-size', '11pt');
  //       $(win.document.body).find('tr:nth-child(odd) td').each(function(index) {
  //         $(this).css('background-color', '#D0D0D0');
  //       });
  //       $(win.document.body).find('h1').css('text-align', 'center');
  //     }
  //   }]
  // });

</script>

@endsection
