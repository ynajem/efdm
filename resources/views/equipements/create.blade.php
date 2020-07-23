@extends('layouts.admin')

@section('title','Ajouter un équipement HS')

@section('content')
<x-form-card icon="/svg/005.svg" :action="route('equipements.store')" fa="user">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Objet :</label>
      <select name="objet_id" class="custom-select" id="objet" placeholder="Selectioner un objet">
        {!! options($objets) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Sous-objet :</label>
      <select class="custom-select" name="subobjet_id" id="subobj" required>
        {!! options($subobjets) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Equipement HS (optionnel) :</label>
      <input type="text" class="form-control" name="equipement">
    </div>

  </div>
  <div class="hr-fancy"></div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Date d'arrêt:</label>
      <input type="date" class="form-control" name="startdate" value="{{date('Y-m-d') }}" required>
    </div>
    <div class="form-group col-md-3">
      <label>Heure d'arrêt:</label>
      <input name="starttime" type="time" class="form-control" value="{{date('H:i') }}" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Commentaire (optionnelle) :</label>
      <textarea class="form-control" name="comment" rows="3"></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-primary"><span class="fa fa-plus mr-2"></span>Ajouter</button>
</x-form-card>
@endsection
