@extends('layout')

@section('content')
  <div class="row center">
    <div class="body col-md-7">
        <div class="card">
            <div class="card-header">
                <strong>Ajouter une intervention</strong>
                <img src="/svg/003.svg" height="32" alt="">
            </div>
            <div class="card-body">
                <form class="needs-validation" method="POST" action="{{ route('event.update',$event) }}" novalidate>
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title">Type d'intervention :</label>
                        <select class="custom-select" name="type">{!! options($types,$event->type) !!}</select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="language">Date :</label>
                        <input name="date" type="date" class="form-control" value="{{ $event->date }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="language">Heure :</label>
                        <input name="time" type="time" class="form-control" value="{{ $event->time }}" required>
                    </div>
                </div>
                <div class="hr-fancy"></div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Objet :</label>
                        <select class="custom-select" name="objet">{!! options($objets,$objet_id) !!}</select>
                    </div>
                        <div class="form-group col-md-4">
                        <label for="topic">Sous-objet :</label>
                    <select class="custom-select" name="sub_objet_id">{!! options($sub_objets,$event->sub_objet_id) !!}</select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="topic">Extra :</label>
                        <input class="form-control" name="extra" value="{{ $event->extra }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <textarea class="form-control" name="event" rows="5">{{ $event->event }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark"><span class="fa fa-gear mr-2"></span>Modifier</button>
                </form>
            </div>
        </div>
    </div>
    <!-- @include("components.leftbar") -->
</div>
@endsection