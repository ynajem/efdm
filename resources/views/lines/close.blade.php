@extends('layouts.admin')

@section('title','Mise en service')

@section('content')
<x-form-card icon="/svg/001.svg" :action="route('lines.update',$line)">
  @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-5">
      <label>Objet :</label>
      <select name="objet_id" class="custom-select" id="objet" placeholder="Selectioner un objet">
        {!! options($objets, $line->objet_id) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="topic">Sous-objet :</label>
      <select class="custom-select" name="subobjet_id" id="subobj" required>
        {!! options($subobjets, $line->subobjet_id) !!}
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="title">Type :</label>
      <select name="type" id="type" class="custom-select">
        {!! options(App\Line::TYPES_SELECT,$line->type) !!}
      </select>
    </div>

  </div>
  <div class="hr-fancy"></div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="language">Date d'arrêt:</label>
      <input type="date" class="form-control" name="startdate" value="{{ $line->start_time->format('Y-m-d') }}" required>
    </div>
    <div class="form-group col-md-3">
      <label for="language">Heure d'arrêt:</label>
      <input name="starttime" type="time" class="form-control" value="{{ $line->start_time->format("H:i") }}" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="language">Date de reprise:</label>
      <input type="date" class="form-control" name="enddate" required>
    </div>
    <div class="form-group col-md-3">
      <label for="language">Heure de reprise:</label>
      <input name="endtime" type="time" class="form-control" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="event">Commentaire :</label>
      <textarea class="form-control" name="comment" rows="3">{{ $line->comment ?? '' }}</textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-dark"><span class="fa fa-play mr-2"></span>Mise en service</button>
</x-form-card>
@endsection
