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
                <form class="needs-validation" method="post" action="/shifts" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="title">Equipe :</label>
                            <select class="custom-select" name="equipe">{!! options($equips) !!}</select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="language">Vacation :</label>
                            <select class="custom-select" name="shift">{!! options($shifts) !!}</select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="language">Date :</label>
                            <input name="date" type="date" class="form-control" value="{{ date('Y-m-d') }}" required>
                        </div>
                    </div>
                    <hr class="hr-fancy">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Chef de salle :</label>
                            {!! Form::options('chefSalle',$chefSalles) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="topic">Superviseur :</label>
                            {!! Form::options('supervisor',$supervisors) !!}
                        </div>
                            <div class="form-group col-md-4">
                            <label for="chef">Chef d'equipe :</label>
                            {!! Form::options('chef',$users) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="esa1">ESA1 :</label>
                            {!! Form::options('esa1',$users) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="esa2">ESA2 :</label>
                            {!! Form::options('esa2',$users) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="esa3">ESA3 :</label>
                            {!! Form::options('esa3',$users) !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="renfort1">Renfort1 :</label>
                            {!! Form::options('renfort1',$users) !!}
                        </div>
                        <div class="form-group col-md-4">
                            <label for="renfort2">Renfort2 :</label>
                            {!! Form::options('renfort2',$users) !!}
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <span class="fa fa-plus mr-2"></span>Ajouter
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection