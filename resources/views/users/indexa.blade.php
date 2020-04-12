@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">Add New User</a>
        <!-- Pagination -->
        <div class="float-right">
          {!! $users->render() !!}
        </div>
        <!-- Pagination end -->
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Entity</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->entity->label }}</td>
              <td>{{ $user->email }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /.col-md-6 -->
</div>
<!-- /.row -->

@endsection