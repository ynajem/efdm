@extends('layouts.admin')

@section('title',"Add New User")

@section('content')
<div class="row">
  <div class="col-md-6 mx-auto align-middle">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('users.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label class="form-conntrol-label" for="username">Username :</label>
            <input type="text" class="form-control" name="username" autocomplete="off">
          </div>
          <div class="form-group">
            <label class="form-conntrol-label" for="title">Title :</label>
            <input type="text" class="form-control" name="title">
          </div>
          <div class="form-group">
            <label for="entity_id">Entity :</label>
            <select name="entity_id" id="entity_id" class="custom-select">
              @foreach ($entities as $id => $entity)
              <option value="{{ $id }}">{{ $entity }}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">
            <i class="nav-icon fas fa-plus"></i>
            Add
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection