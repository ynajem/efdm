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
                <form class="needs-validation" method="post" action="/events" novalidate>
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title">Type d'intervention :</label>
                        {{ $types }}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="language">Date :</label>
                        {{ Form::date('date', date('Y-m-d'),['class' => 'form-control']) }}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="language">Heure :</label>
                        <input name="time" type="time" class="form-control" value="{{ date('H:i')}}" required>
                    </div>
                </div>
                <div class="hr-fancy"></div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Objet :</label>
                        <select class="custom-select" name="object" id="objet" placeholder="Select an object">
                            @foreach ($objets as $objet)
                            <option value="{{$objet->id}}">{{ $objet->name }}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="form-group col-md-4">
                            <label for="topic">Sous-objet :</label>
                            <select class="custom-select" name="sub_object" id="sub_obj" required>
                                @foreach ($sub_objets as $objet)
                                <option value="{{$objet->id}}">{{ $objet->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-group col-md-4">
                        <label for="topic">Extra :</label>
                        <input class="form-control" name="extra">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="event">Intervention :</label>
                        <textarea class="form-control" name="event" rows="5"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><span class="fa fa-plus mr-2"></span>Ajouter</button>
                </form>
            </div>
        </div>
    </div>
    <!-- @include("components.leftbar") -->
</div>
@endsection