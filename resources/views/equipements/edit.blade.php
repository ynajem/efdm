@extends('layouts.admin')

@section('title','Modifer un équipement HS')

@section('content')
<x-form-card icon="/svg/005.svg" :action="route('equipements.update',$equipement)">
  @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Objet :</label>
      <select name="objet_id" class="custom-select" id="objet" placeholder="Selectioner un objet">
        {!! options($objets, $equipement->objet_id) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Sous-objet :</label>
      <select class="custom-select" name="subobjet_id" id="subobj" required>
        {!! options($subobjets, $equipement->subobjet_id) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Equipement HS (optionnel) :</label>
      <input type="text" class="form-control" name="equipement" value="{{ $equipement->equipement }}">
    </div>

  </div>
  <div class="hr-fancy"></div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Date d'arrêt:</label>
      <input type="date" class="form-control" name="startdate" value="{{ $equipement->start_time->format('Y-m-d') }}" required>
    </div>
    <div class="form-group col-md-3">
      <label>Heure d'arrêt:</label>
      <input name="starttime" type="time" class="form-control" value="{{ $equipement->start_time->format('H:i') }}" required>
    </div>
  </div>
  @if($equipement->end_time)
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Date de reprise:</label>
      <input type="date" class="form-control" name="enddate" value="{{ $equipement->end_time->format('Y-m-d') }}" required>
    </div>
    <div class="form-group col-md-3">
      <label>Heure de reprise:</label>
      <input name="endtime" type="time" class="form-control" value="{{ $equipement->end_time->format('H:i') }}" required>
    </div>
  </div>
  @endif
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Commentaire (optionnelle) :</label>
      <textarea class="form-control" name="comment" rows="3">{{ $equipement->comment }}</textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-success"><span class="fa fa-edit mr-2"></span>Modifier</button>
</x-form-card>
@endsection
