@extends('layouts.admin')

@section('content')
<div class="avatar-wrapper">
  <img class="profile-pic" src="/svg/user.svg" />
  <div class="upload-button">
    <i class="fa fa-camera" aria-hidden="true"></i>
  </div>
  <input class="file-upload" type="file" accept="image/*" />
</div>

<style>
  .avatar-wrapper {
    position: relative;
    height: 100px;
    width: 100px;
    margin: 25px auto;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 1px 1px 15px -5px black;
    transition: all 0.3s ease;
  }

  .avatar-wrapper:hover {
    transform: scale(1.05);
    cursor: pointer;
  }

  .avatar-wrapper:hover .profile-pic {
    opacity: 0.5;
  }

  .avatar-wrapper .profile-pic {
    height: 100%;
    width: 100%;
    transition: all 0.3s ease;
  }

  /* 
    .avatar-wrapper .profile-pic:after {
    font-family: FontAwesome;
    content: "\f003";
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    position: absolute;
    font-size: 100px;
    background: #ecf0f1;
    color: #34495e;
    text-align: center;
  } */

  .avatar-wrapper .upload-button {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
  }

  .avatar-wrapper .upload-button .fa-camera {
    position: absolute;
    font-size: 40px;
    top: 50px;
    left: 30px;
    text-align: center;
    opacity: 0;
    transition: all 0.3s ease;
    color: #34495e;
  }

  .avatar-wrapper .upload-button:hover .fa-camera {
    opacity: 0.9;
  }
</style>
@endsection
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script> -->
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