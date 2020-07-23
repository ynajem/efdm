@extends('layouts.admin')

@section('title','Edit User')

@section('styles')
<link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection

@section('content')
<x-form-card title="Add New User" :action="route('users.update',$user)">
  @method('put')
  <div class="form-row">
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="username">Username</label>
        <input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" type="text" name="username" id="username" value="{{ old('username', $user->username) }}">
        @if($errors->has('username'))
        <span class="text-danger">{{ $errors->first('username') }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="firstname">Firstname (Smiya)</label>
        <input class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="firstname" id="firstname" value="{{ old('firstname', $user->firstname) }}">
        @if($errors->has('firstname'))
        <span class="text-danger">{{ $errors->first('firstname') }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="lastname">Lastname (Kniya)</label>
        <input class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="lastname" id="lastname" value="{{ old('lastname', $user->lastname) }}">
        @if($errors->has('lastname'))
        <span class="text-danger">{{ $errors->first('lastname') }}</span>
        @endif
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="password">Password</label>
        <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="text" name="password" id="password" value="{{ old('password', '') }}">
        @if($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="title">Job Title</label>
        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $user->title) }}">
        @if($errors->has('title'))
        <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label class="required" for="sex">Sex</label>
        <select class="form-control select2 {{ $errors->has('sex') ? 'is-invalid' : '' }}" name="sex" id="sex" required>
          @foreach(APP\User::SEX_SELECT as $id => $label)
          <option value="{{ $id }}" {{ $user->sex == $id ? 'selected' : '' }}>{{ $label }}</option>
          @endforeach
        </select>
        @if($errors->has('sex'))
        <span class="text-danger">{{ $errors->first('sex') }}</span>
        @endif
      </div>


    </div>
    <div class="col-md-2">
      <div class="form-group">
        <label class="required" for="status">Status</label>
        <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
          @foreach(App\User::STATUS_SELECT as $key => $label)
          <option value="{{ $key }}" {{ old('status',$user->status) == $key ? 'selected' : 'active' }}>{{ $label }}</option>
          @endforeach
        </select>
        @if($errors->has('status'))
        <span class="text-danger">{{ $errors->first('status') }}</span>
        @endif
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="roles">Roles</label>
        <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple>
          @foreach($roles as $key => $value)
          <option value="{{ $key }}" {{ (in_array($key, old('roles', [])) || $user->roles->contains($key)) ? 'selected' : '' }}>{{ $value }}</option>
          @endforeach
        </select>
        @if($errors->has('roles'))
        <span class="text-danger">{{ $errors->first('roles') }}</span>
        @endif
      </div>
    </div>
  </div>

  <button class="btn btn-primary" type="submit">Update</button>
</x-form-card>
@endsection

@section('scripts')
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function() {
    $('.select2').select2({
      theme: 'bootstrap4'
    })
  })

</script>
@endsection
