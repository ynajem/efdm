@extends('layouts.admin')

@section('title', 'Ajouter un nouveau')

@section('content')
<x-form-card icon="/svg/001.svg" :action="route('lines.store')">

  <div class="form-row">
    <div class="form-group col-md-5">
      <label>Objet :</label>
      <select name="objet_id" class="custom-select" id="objet" placeholder="Selectioner un objet">
        {!! options($objets) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="topic">Sous-objet :</label>
      <select class="custom-select" name="subobjet_id" id="subobj" required>
        {!! options($subobjets) !!}
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="title">Type :</label>
      <select name="type" id="type" class="custom-select">
        {!! options(App\Line::TYPES_SELECT) !!}
      </select>
    </div>

  </div>
  <div class="hr-fancy"></div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="language">Date d'arrêt:</label>
      <input type="date" class="form-control" name="startdate" value="{{ old('startdate') ?? date('Y-m-d') }}" required>
    </div>
    <div class="form-group col-md-3">
      <label for="language">Heure d'arrêt:</label>
      <input name="starttime" type="time" class="form-control" value="{{ old('starttime') ?? date('H:i') }}" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="event">Commentaire :</label>
      <textarea class="form-control" name="comment" rows="3"></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-primary"><span class="fa fa-plus mr-2"></span>Ajouter</button>
</x-form-card>
@endsection
