<x-data title="List of cruds" :route="route('cruds.create')">

  <table class="table table-sm table-striped datatable">
    <thead>
      <tr>
        <th> ID </th>
        <th> # </th>
        <th> Model </th>
        <th> Menu Title </th>
        <th> Index </th>
        <th> Create </th>
        <th> Edit </th>
        <th> Show </th>
        <th> Delete </th>
        <th class="text-center"> Actions </th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $crud)
      <tr data-entry-id="{{ $crud->id }}">
        <td> {{ $crud->id }} </td>
        <td> {{ $crud->parent_id }} </td>
        <td> {{ $crud->name }} </td>
        <td> <span class="fa fa-{{ $crud->icon }} ml-3"></span> {{ $crud->title }} </td>
        <td>
          <i class="fas fa-check text-success triggerPointer" style="{{ ($crud->is_index) ? '' : 'display: none;'}}"></i>
          <i class="fas fa-times text-danger triggerPointer" style="{{ $crud->is_index ? 'display: none;' : ''}}"></i>
        </td>
        <td>
          <i class=" fas fa-check text-success triggerPointer" style="{{ $crud->is_create ? '' : 'display: none;'}}"></i>
          <i class=" fas fa-times text-danger triggerPointer" style="{{ $crud->is_create ? 'display: none;' : ''}}"></i>
        </td>
        <td>
          <i class=" fas fa-check text-success triggerPointer" style="{{ $crud->is_edit ? '' : 'display: none;'}}"></i>
          <i class=" fas fa-times text-danger triggerPointer" style="{{ $crud->is_edit ? 'display: none;' : ''}}"></i>
        </td>
        <td>
          <i class=" fas fa-check text-success triggerPointer" style="{{ $crud->is_show ? '' : 'display: none;'}}"></i>
          <i class=" fas fa-times text-danger triggerPointer" style="{{ $crud->is_show ? 'display: none;' : ''}}"></i>
        </td>
        <td>
          <i class=" fas fa-check text-success triggerPointer" style="{{ $crud->is_delete ? '' : 'display: none;'}}"></i>
          <i class=" fas fa-times text-danger triggerPointer" style="{{ $crud->is_delete ? 'display: none;' : ''}}"></i>
        </td>
        <td class="text-center">
          <a class=" btn btn-xs btn-primary" href="{{ route('cruds.show', $crud) }}">
            <i class="fas fa-eye"></i>
          </a>
          <a class="btn btn-sm btn-success" href="{{ route('cruds.edit', $crud) }}">
            <i class="fas fa-pen"></i>
          </a>
          <form action="{{ route('cruds.destroy', $crud) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
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
