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
        <div class="col-md-4 col-lg-3">
          <div class="card">
            <div class="card-body text-center">
              <div class="avatar-wrapper">
                <img class="profile-pic" src="{{ asset($user->avatar) }}" width="100" />
                <div class="upload-button">
                  <i class="fa fa-camera" aria-hidden="true"></i>
                </div>
                <input class="file-upload" type="file" accept="image/*" name='avatar' />
              </div>
              <h5 class="bold mb-0">{{ $user->fullname() }}</h5>
              <small class="counter">{{ $user->title }}</small>
              <hr>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-warning">
                  <circle cx="12" cy="8" r="7"></circle>
                  <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                </svg> Matricule: {{ $user->badge }}
              </div>
            </div>
          </div>
          <div class="card">
            <div class="list-group list-group-flush">
              <a href="{{ route('profile.show') }}" class="list-group-item list-group-item-action{{ request()->routeIs('profile.show') ? ' active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-3">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg> Profil
              </a>
              <a href="{{ route('profile.password') }}" class="list-group-item list-group-item-action{{ request()->routeIs('profile.password') ? ' active' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map mr-3">
                  <polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon>
                  <line x1="8" y1="2" x2="8" y2="18"></line>
                  <line x1="16" y1="6" x2="16" y2="22"></line>
                </svg> Modifier le mot de passe
              </a>
              <a href="/logout" class="list-group-item list-group-item-action text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out mr-3">
                  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                  <polyline points="16 17 21 12 16 7"></polyline>
                  <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg> Logout</a>
            </div>
          </div>
        </div>
        <div class="col mt-md-0">
          <div class="card">
            <div class="card-body">
              @yield('form')
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