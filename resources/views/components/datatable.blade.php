@extends('layouts.admin')

@section('title', $title)

@section('styles')
<link rel="stylesheet" href="/plugins/datatables/buttons.bootstrap4.css" />
<link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="/css/daterangepicker.css" />
@endsection

@section('content')
<div class="card">
  <div class="card-body">
    <div id="daterange" class="btn btn-default d-flex align-items-center" style="width: 220px">
      <i class="fa fa-calendar mr-2"></i>
      <span>Filtrer par date </span> <i class="ml-auto fa fa-caret-down"></i>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <table id="datatable" class="table table-sm table-striped dataTable">
    </table>
  </div>
</div>
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

{{ $slot }}
@endsection
