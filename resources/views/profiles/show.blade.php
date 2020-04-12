@extends('profiles.layout')

@section('form')
<form action="{{ route('profile.update') }}" method="POST">
  @csrf
  @method('PUT')
  <h3>Profil</h3>
  <hr>
  @if(session('message'))
  <div class="alert alert-success" role="alert"> <strong>{{ session('message') }}</strong> </div>
  @endif
  <div class="form-row">
    <div class="form-group col-sm-6">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="{{ $user->email }}">
    </div>
    <div class="form-group col-sm-6">
      <label>Numéro de téléphone</label>
      <input name="phone" type="text" class="form-control" value="{{ $user->phone }}">
    </div>
    <div class="form-group col-12">
      <label>Address</label>
      <input name="address" type="text" class="form-control" value="{{ $user->address }}">
    </div>
  </div>
  @can('admin',$user)
  <div class="form-row">
    <div class="form-group col-sm-6">
      <label>Prénom</label>
      <input name="firstname" type="text" class="form-control" value="{{ $user->firstname }}">
    </div>
    <div class="form-group col-sm-6">
      <label>Nom</label>
      <input name="lastname" type="text" class="form-control" value="{{ $user->lastname }}">
    </div>
    <div class="form-group col-6 col-sm-5">
      <label>Entité</label>
      <select name="entity_id" class="form-control custom-select">
        {!! options(App\Entity::pluck('label','id'),$user->entity_id) !!}
      </select>
    </div>
    <div class="form-group col-6 col-sm-5">
      <label>Profession</label>
      <input name="title" type="text" class="form-control" value="{{ $user->title }}">
    </div>
    <div class="form-group col-3 col-sm-2">
      <label>Matricule</label>
      <input name="badge" type="number" class="form-control" value="{{ $user->badge }}">
    </div>
  </div>
  @endcan
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection