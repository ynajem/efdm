@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="/css/avatar.css">
@endsection

@section('content')
<div class="container">
  <!-- <div class="row center"> -->
  <div class="container">
    <form action="{{ route('profile.passUpdate') }}" method="POST" enctype="multipart/form-data">
      <div class="row">
        @include('profiles.avatar')
        <div class="col mt-md-0">
          <div class="card">
            <div class="card-body">
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
