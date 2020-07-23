@extends('layouts.admin')

@section('title','Modifier une intervention')

@section('content')
<x-form-card icon="/svg/002.svg" :action="route('events.update',$event)">
  @method("PUT")
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Type d'intervention :</label>
      <select name="type" id="type" class="custom-select">
        {!! options($types,$event->type) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Date :</label>
      <input name="event_date" type="date" class="form-control" value="{{ $event->time->format('Y-m-d') }}" required>
    </div>
    <div class="form-group col-md-4">
      <label>Heure :</label>
      <input name="event_time" type="time" class="form-control" value="{{ $event->time->format('H:i') }}" required>
    </div>
  </div>
  <div class="hr-fancy"></div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Objet :</label>
      <select name="objet_id" class="custom-select" id="objet" placeholder="Selectioner un objet">
        {!! options($objets, $event->objet->id) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Sous-objet :</label>
      <select class="custom-select" name="subobjet_id" id="subobj" required>
        {!! options($subobjets, $event->subobjet_id) !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label>Extra (optionnel) :</label>
      <input class="form-control" name="extra" value="{{ $event->extra }}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Intervention :</label>
      <textarea class="form-control @error('event') is-invalid @enderror" name="event" rows="5" required>{{ $event->event ?? '' }}</textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-success"><span class="fa fa-edit mr-2"></span>Modifer</button>
</x-form-card>
@endsection
