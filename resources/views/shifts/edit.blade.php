@extends('layouts.admin')

@section('title','Modifier cette vacation')

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
        <h3 class="card-title">{{ auth()->user()->entity->label }} - @yield('title')</h3>
      </div>
      <div class="card-body">
        <form class="needs-validation" method="POST" action="{{ route('shifts.update',$shift->id) }}">
          @csrf
          @method("PUT")
          @include('shifts.form')
          <button type="submit" class="btn btn-success">
            <span class="fa fa-edit mr-2"></span>Modifier
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