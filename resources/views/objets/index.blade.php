<x-data title="La liste des objets" :route="route('objets.create')">

  <table class="table table-sm table-striped datatable">
    <thead>
      <tr>
        <th> Id </th>
        <th> Type </th>
        <th> Objet </th>
        <th> Entité </th>
        <th> Etat </th>
        <th> Actions </th>
      </tr>
    </thead>
    <tbody>
      @foreach($objets as $objet)
      <tr data-entry-id="{{ $objet->id }}">
        <td> {{ $objet->id }} </td>
        <td> {{ $objet->type->label }} </td>
        <td> {{ $objet->name }} </td>
        <td> {{ $objet->entity->label }} </td>
        <td> {{ $objet->status }} </td>
        <td>
          <a class="btn btn-xs btn-primary" href="{{ route('objets.show', $objet) }}">
            <i class="fas fa-eye"></i>
          </a>
          <a class="btn btn-sm btn-success" href="{{ route('objets.edit', $objet) }}">
            <i class="fas fa-pen"></i>
          </a>
          @can('admin')
          <form action="{{ route('objets.destroy', $objet) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger">
              <i class="fas fa-trash"></i>
            </button>
          </form>
          @endcan
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</x-data>
