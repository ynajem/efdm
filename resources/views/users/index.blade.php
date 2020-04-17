@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.css" />
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table class="table table-bordered table-hover dataTable" id="users-table" data-order='[[ 2, "asc" ]]' data-page-length='5'>
      <thead>
        <tr>
          <th>Id</th>
          <th>Username</th>
          <th>Entity</th>
          <th>Email</th>
          <!-- <th>Actions</th> -->
        </tr>
      </thead>
    </table>
  </div>
</div>
@endsection

@section('scripts')
<!-- <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script> -->
<script src="/plugins/datatables/jquery.dataTables.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function() {
    $("#users-table").DataTable({
      // processing: true,
      select: true,
      serverSide: true,
      lengthMenu: [5, 10, 15, 20, 50],
      // pageLength: 5,
      ajax: "/datatables",
      columns: [{
          data: "id",
        }, {
          data: "username",
        }, {
          data: "entity",
        }, {
          data: "email",
        },
        // {
        //   name: '<span class="btn btn-primary">Edit</span>',
        // }
      ]
    });
  });
</script>
@endsection