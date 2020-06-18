@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-header">Add New Entity</div>
  <div class="card-body">
    <form method="POST" action="{{ route("entities.store") }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label class="required" for="name">Name</label>
        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
        @if($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label class="required" for="label">Label</label>
        <input class="form-control {{ $errors->has('label') ? 'is-invalid' : '' }}" type="text" name="label" id="label" value="{{ old('label', '') }}">
        @if($errors->has('label'))
        <span class="text-danger">{{ $errors->first('label') }}</span>
        @endif
      </div>
      {{-- <div class="form-group"> --}}
      <button class="btn btn-danger" type="submit">
        {{ trans('global.save') }}
      </button>
      {{-- </div> --}}
    </form>
  </div>
</div>
@endsection
