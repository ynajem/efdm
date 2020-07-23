@extends('layouts.admin')

@section('title','Modifier une vacation')

@section('styles')
<link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection

@section('content')
<x-form-card icon="/svg/003.svg" :action="route('shifts.update',$shift)">
  @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="title">Equipe :</label>
      <select class="custom-select" name="equipe">{!! options(App\Shift::EQUIPE_SELECT,$shift->equipe) !!}</select>
    </div>
    <div class="form-group col-md-4">
      <label for="language">Vacation :</label>
      <select class="custom-select" name="shift">{!! options(App\Shift::SHIFT_SELECT,$shift->shift) !!}</select>
    </div>
    <div class="form-group col-md-5">
      <label for="language">Date :</label>
      <input name="date" type="date" class="form-control" value="{{ $shift->start_time->format('Y-m-d') }}" required>
    </div>
  </div>
  <hr class="hr-fancy">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Chef de salle :</label>
      <select name="chefSalle" class="custom-select">
        <option value=""></option>
        {!! options($chefSalles,$shift->chefSalle) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="topic">Superviseur :</label>
      <select name="supervisor" class="custom-select">
        <option value=""></option>
        {!! options($supervisors, $shift->supervisor) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="chef">Chef d'equipe :</label>
      <select name="chefEquipe" class="custom-select">
        <option value=""></option>
        {!! options(me()->team(), $shift->chefE()->id) !!}
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12">
      <div class="form-group">
        <label>ESAs :</label>
        <select name="esa[]" class="select2bs4" multiple="multiple" style="width: 100%;">
          {!! multioptions(me()->team(),$shift->esas()) !!}
        </select>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12">
      <div class="form-group">
        <label>Renfort :</label>
        <select name="renf[]" class="custom-select select2bs4" multiple="multiple" style="width: 100%;">
          {!! multioptions(me()->team(),$shift->renfs()) !!}
        </select>
      </div>
    </div>
  </div>

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
