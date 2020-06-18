@extends('layouts.admin')

@section('title',$title ?? 'Admin')

@section('styles')
<link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection

@section('content')
<div class="row center">
  <div class="body col-md-9">
    <div class="card">
      <form class="needs-validation" method="post" action="{{ $action }}" novalidate>
        @csrf
        <div class="card-header">
          <div class="card-title">{{ $title ?? ''}}</div>
          <img class="ml-auto" src="{{$icon ?? '/svg/001.svg'}}" height="28">
        </div>
        <div class="card-body">
          {{ $slot }}
        </div>
    </div>
    </form>
  </div>
</div>
@endsection

@section('scripts')
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function() {
    $('.select2').select2({
      theme: 'bootstrap4'
    })
  })

</script>
@endsection
