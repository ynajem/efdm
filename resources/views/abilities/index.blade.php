<x-data title="List of abilities" :route="route('abilities.create')">

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
      @foreach($abilities as $ability)
      <tr data-entry-id="{{ $ability->id }}">
        <td> {{ $ability->id ?? '' }} </td>
        <td> {{ $ability->name ?? '' }} </td>
        <td> {{ $ability->label ?? '' }} </td>
        <td>
          <a class="btn btn-xs btn-primary" href="{{ route('abilities.show', $ability) }}">
            <i class="fas fa-eye"></i>
          </a>
          <a class="btn btn-sm btn-success" href="{{ route('abilities.edit', $ability) }}">
            <i class="fas fa-pen"></i>
          </a>
          <form action="{{ route('abilities.destroy', $ability) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
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
