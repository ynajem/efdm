@extends('layouts.admin')

@section('title','Modifier une vacation')

@section('styles')
<link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection

@section('content')
<x-form-card icon="/svg/003.svg" :action="route('shifts.update',$shift)">
  @method('PUT')
  @include('shifts.form')
  <button type="submit" class="btn btn-success">
    <span class="fa fa-edit mr-2"></span>Modifier
  </button>
</x-form-card>

@endsection

@section('scripts')
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function() {
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })

</script>
@endsection
