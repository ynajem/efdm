@extends('layout')

@section('content')
  <div class="row center">
    <div class="body col-md-7">
        <div class="card">
            <div class="card-header">
                <strong>Ajouter une equipe</strong>
                <img src="/svg/icon-prototype.svg" height="32" alt="">
            </div>
            <div class="card-body">
                <form class="needs-validation"method="POST" action="/shifts/{{$shift->id}}" novalidate>
                    @csrf
                    @method("PUT")
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="title">Equipe :</label>
                            <select class="custom-select" name="equipe">{!! options($equips,$shift->equipe) !!}</select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="language">Vacation :</label>
                            <select class="custom-select" name="shift">{!! options($shifts,$shift->shift) !!}</select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="language">Date :</label>
                            <input name="date" type="date" class="form-control" value="{{ $shift->date }}" value="{{ $shift->date }}" required>
                        </div>
                    </div>
                    <hr class="hr-fancy">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Chef de salle :</label>
                            {!! Form::options('chefSalle',$chefSalles,$shift->chefSalle) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="topic">Superviseur :</label>
                            {!! Form::options('supervisor',$supervisors,$shift->supervisor) !!}
                        </div>
                            <div class="form-group col-md-4">
                            <label for="chef">Chef d'equipe :</label>
                            {!! Form::options('chef',$users,$shift->chef) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="esa1">ESA1 :</label>
                            {!! Form::options('esa1',$users,$shift->esa1) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="esa2">ESA2 :</label>
                            {!! Form::options('esa2',$users,$shift->esa2) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="esa3">ESA3 :</label>
                            {!! Form::options('esa3',$users,$shift->esa3) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="renfort1">Renfort1 :</label>
                            {!! Form::options('renfort1',$users,$shift->renfort1) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="renfort2">Renfort2 :</label>
                            {!! Form::options('renfort2',$users,$shift->renfort2) !!}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">
                        <span class="fa fa-edit mr-2"></span>Modifeir
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection