<x-data title='La liste des utilisateurs' :route="route('users.create')">
  <table class="table table-sm table-striped datatable">
    <thead>
      <tr>
        <th> Fullname </th>
        <th> Entity </th>
        <th> Roles </th>
        <th> Status </th>
        <th> Actions </th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $key => $user)
      <tr data-entry-id="{{ $user->id }}">
        <td> {{ $user->fullname() ?? '' }} </td>
        <td> {{ $user->entity->label ?? '' }} </td>
        <td>
          @foreach($user->roles as $id => $role)
          <span class="badge badge-info">{{ $role->name }}</span>
          @endforeach
        </td>
        <td>{{ $user->status }}</td>
        <td>
          @can('update_users')
          <a class="btn btn-xs btn-primary" href="{{ route('users.show', $user->id) }}">
            <i class="fas fa-eye"></i>
          </a>
          <a class="btn btn-sm btn-success" href="{{ route('users.edit', $user->id) }}">
            <i class="fas fa-pen"></i>
          </a>
          @endcan
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</x-data>
