@extends('profiles.layout')

@section('form')
<form class="form-horizontal" action="{{ route('profile.passUpdate') }}" method="POST">
  @csrf
  @method('PUT')
  <h3>Modifier le mot de passe</h3>
  <hr>

  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Ancien mot de passe</label>
    <div class="col-sm-8"><input name="oldpassword" type="password" class="form-control"></div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Nouveau mot de passe</label>
    <div class="col-sm-8"><input name="password" type="password" class="form-control"></div>
  </div>
  <div class="form-group row">
    <label class="col-sm-4 col-form-label">Confirmez le mot de passe</label>
    <div class="col-sm-8"><input name="password-confirmation" type="password" class="form-control"></div>
  </div>
  <div class="form-group row">
    <div class="offset-sm-4 col-sm-8">
      <button type="submit" class="btn btn-primary">Modifer</button>
    </div>
  </div>
</form>
@endsection
