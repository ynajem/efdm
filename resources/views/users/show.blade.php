@extends('layouts.admin')
@section('content')

<div class="card">
  <div class="card-header">
    {{ trans('global.show') }} {{ trans('cruds.user.title') }}
  </div>

  <div class="card-body">
    <div class="form-group">
      <div class="form-group">
        <a class="btn btn-default" href="{{ route('users.index') }}">
          ALL USERS
        </a>
      </div>
      <table class="table table-bordered table-striped">
        <tbody>
          <tr>
            <th> ID </th>
            <td> {{ $user->id }} </td>
          </tr>
          <tr>
            <th> FULLNAME </th>
            <td> {{ $user->fullname() }} </td>
          </tr>
          <tr>
            <th> EMAIL </th>
            <td> {{ $user->email }} </td>
          </tr>
          <tr>
            <th> Roles </th>
            <td>
              @foreach($user->roles as $key => $value)
              <span class="badge badge-info">{{ $value->name }}</span>
              @endforeach
            </td>
          </tr>
          <tr>
            <th> Entity </th>
            <td> {{ $user->entity->label ?? '' }} </td>
          </tr>
          <tr>
            <th> Status </th>
            <td> {{ App\User::STATUS_SELECT[$user->status] ?? '' }} </td>
          </tr>
        </tbody>
      </table>
      <div class="form-group">
        <a class="btn btn-default" href="{{ route('users.index') }}">
          ALL USERS
        </a>
      </div>
    </div>
  </div>
</div>



@endsection
