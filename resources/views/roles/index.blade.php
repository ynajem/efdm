<x-data title="List of roles" :route="route('roles.create')">

  <table class="table table-sm table-striped datatable">
    <thead>
      <tr>
        <th> Id </th>
        <th> Name </th>
        <th> Description </th>
        <th> Abilities </th>
        <th> Users </th>
        <th> Actions </th>
      </tr>
    </thead>
    <tbody>
      @foreach($roles as $role)
      <tr data-entry-id="{{ $role->id }}">
        <td> {{ $role->id ?? '' }} </td>
        <td> {{ $role->name ?? '' }} </td>
        <td> {{ $role->label ?? '' }} </td>
        <td>
          @foreach($role->abilities as $ability)
          <span class="badge badge-danger">{{ $ability->name }}</span>
          @endforeach
        </td>
        <td>
          @foreach($role->users as $user)
          <span class="badge badge-dark">{{ $user->username }}</span>
          @endforeach
        </td>
        <td>
          <a class="btn btn-sm btn-success" href="{{ route('roles.edit', $role) }}">
            <i class="fas fa-pen"></i>
          </a>
          <form action="{{ route('roles.destroy', $role) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger">
              <i class="fas fa-trash"></i>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</x-data>
