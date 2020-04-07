@extends('layouts.admin')

@section('content')
<div class="row center">
  <div class="body col-md-7">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="card-title">{{ auth()->user()->entity->label }}</h3>
        <img class="ml-auto" src="/svg/005.svg" height="32" alt="">
      </div>
      <div class="card-body">
        <form class="needs-validation" method="POST" action="{{ route('equipements.store') }}" novalidate>
          @csrf
          @include('equipements.form')
          <button type="submit" class="btn btn-primary"><span class="fa fa-plus mr-2"></span>Ajouter</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
  function subobj(id) {
    // ajax
    $.get('/api/subobj/' + id, function(data) {
      $('#subobj').empty();
      $.each(data, function(i, obj) {
        $('#subobj').append(
          '<option value="' + obj.id + '">' + obj.name + '</option>'
        );
      });
    });
  }

  $('#objet').on('change', function(e) {
    const id = e.target.value;
    subobj(id);
  });
</script>
@endsection