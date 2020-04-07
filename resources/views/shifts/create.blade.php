@extends('layouts.admin')

@section('title','Ajouter une equipe')

@section('styles')
<!-- Select2 -->
<link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection

@section('content')
<div class="row center">
  <div class="body col-md-7">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Ajouter une equipe</h3>
      </div>
      <div class="card-body">
        <form class="needs-validation" method="post" action="/shifts" novalidate>
          @if (Session::has('message'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <strong>{{ Session::get('message') }}</strong>
          </div>
          @endif

          <script>
            $(".alert").alert();
          </script>
          @csrf
          @include('shifts.form')
          <button type="submit" class="btn btn-primary">
            <span class="fa fa-plus mr-2"></span>Ajouter
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<!-- Select2 -->
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
</script>
@endsection