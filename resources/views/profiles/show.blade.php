@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="/css/avatar.css">
@endsection

@section('content')
<div class="container">
  <!-- <div class="row center"> -->
  <div class="container">
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
      <div class="row">
        @include('profiles.avatar')
        <div class="col mt-md-0">
          <div class="card">
            <div class="card-body">
              @csrf
              @method('PUT')
              <h3>Mon Profil</h3>
              <hr>
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
                  <select name="entity_id" class="form-control custom-select" disabled>
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
              <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection

@section('scripts')
<script>
  $(document).ready(function() {
    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $(".profile-pic").attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    };

    $(".file-upload").on("change", function() {
      readURL(this);
    });

    $(".upload-button").on("click", function() {
      $(".file-upload").click();
    });
  });

</script>
@endsection
