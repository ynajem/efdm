@extends('layouts.admin')

@section('title','Add New User')

@section('styles')
<link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection

@section('content')
<x-form-card title="Add New User" :action="route('users.store')">
  <input type="hidden" name="password" value="1234">
  <div class="form-row">
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="username">Username</label>
        <input class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" type="text" name="username" id="username" value="{{ old('username', '') }}">
        @if($errors->has('username'))
        <span class="text-danger">{{ $errors->first('username') }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="firstname">Firstname (Smiya)</label>
        <input class="form-control {{ $errors->has('firstname') ? 'is-invalid' : '' }}" type="text" name="firstname" id="firstname" value="{{ old('firstname', '') }}">
        @if($errors->has('firstname'))
        <span class="text-danger">{{ $errors->first('firstname') }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="lastname">Lastname (Kniya)</label>
        <input class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}" type="text" name="lastname" id="lastname" value="{{ old('lastname', '') }}">
        @if($errors->has('lastname'))
        <span class="text-danger">{{ $errors->first('lastname') }}</span>
        @endif
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="title">Job Title</label>
        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}">
        @if($errors->has('title'))
        <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label class="required" for="password">Password</label>
        <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password" value="{{ old('password', '') }}">
        @if($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
      </div>

    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6">
      <div class="form-group">
        <label class="required" for="entity_id">Entity</label>
        <select class="form-control select2 {{ $errors->has('entity') ? 'is-invalid' : '' }}" name="entity_id" id="entity_id" required>
          @foreach($entities as $id => $entity)
          <option value="{{ $id }}" {{ old('entity_id') == $id ? 'selected' : '' }}>{{ $entity }}</option>
          @endforeach
        </select>
        @if($errors->has('entity'))
        <span class="text-danger">{{ $errors->first('entity') }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label class="required" for="sex">Sex</label>
        <select class="form-control select2 {{ $errors->has('sex') ? 'is-invalid' : '' }}" name="sex" id="sex" required>
          @foreach(APP\User::SEX_SELECT as $id => $label)
          <option value="{{ $id }}" {{ old('sex') == $id ? 'selected' : '' }}>{{ $label }}</option>
          @endforeach
        </select>
        @if($errors->has('sex'))
        <span class="text-danger">{{ $errors->first('sex') }}</span>
        @endif
      </div>


    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label class="required" for="status">Status</label>
        <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
          @foreach(App\User::STATUS_SELECT as $id => $label)
          <option value="{{ $id }}" {{ old('status') == $id ? 'selected' : 'active' }}>{{ $label }}</option>
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
          @foreach($roles as $id => $role)
          <option value="{{ $id }}" {{ in_array($id, old('role', [])) ? 'selected' : '' }}>{{ $role }}</option>
          @endforeach
        </select>
        @if($errors->has('roles'))
        <span class="text-danger">{{ $errors->first('roles') }}</span>
        @endif
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">
    <span class="fa fa-plus mr-2"></span>Add
  </button>
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
