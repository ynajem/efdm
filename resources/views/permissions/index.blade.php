<x-data title="List of permissions" :route="route('permissions.create')">

  <table class="table table-sm table-striped datatable">
    <thead>
      <tr>
        <th> Id </th>
        <th> Name </th>
        <th> Description </th>
        <th> Actions </th>
      </tr>
    </thead>
    <tbody>
      @foreach($permissions as $permission)
      <tr data-entry-id="{{ $permission->id }}">
        <td> {{ $permission->id }} </td>
        <td> {{ $permission->name }} </td>
        <td> {{ $permission->description }} </td>
        <td>
          <a class="btn btn-xs btn-primary" href="{{ route('permissions.show', $permission) }}">
            <i class="fas fa-eye"></i>
          </a>
          <a class="btn btn-sm btn-success" href="{{ route('permissions.edit', $permission) }}">
            <i class="fas fa-pen"></i>
          </a>
          <form action="{{ route('permissions.destroy', $permission) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
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
