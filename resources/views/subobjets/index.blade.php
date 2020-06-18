<x-data :title="'La liste des sous-objets de ' . $objet->name" :route="route('objets.subobjets.create',$objet)">
  @section('before')
  <div class="card">
    <div class="card-header">Détails de l'objet</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-2">
          <img src="/svg/003.svg" width="100" alt="" />
        </div>
        <div class="col-md-8">
          <dl class="row mb-0">
            <dt class="col-sm-2">Status:</dt>
            <dd class="mb-1 col-sm-9">
              <span class="badge badge-primary badge-md">{{ $objet->status }}</span>
            </dd>
          </dl>

          <dl class="row mb-0">
            <dt class="col-sm-2">Objet:</dt>
            <dd class="mb-1 col-sm-9">{{ $objet->name }}</dd>
          </dl>

          <dl class="row mb-0">
            <dt class="col-sm-2">Entité:</dt>
            <dd class="mb-1 col-sm-9">{{ $objet->entity->label }}</dd>
          </dl>

          <dl class="row mb-0">
            <dt class="col-sm-2">Type d'objet:</dt>
            <dd class="mb-1 col-sm-9">{{ $objet->type->label }}</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  @endsection

  <table class="table table-sm table-striped datatable">
    <thead>
      <tr>
        <th> Objet </th>
        <th> Sous-objet </th>
        <th> Description </th>
        <th> Etat </th>
        <th> Actions </th>
      </tr>
    </thead>
    <tbody>
      @foreach($subobjets as $subobjet)
      <tr data-entry-id="{{ $subobjet->id }}">
        <td> {{ $objet->name }} </td>
        <td> {{ $subobjet->name }} </td>
        <td> {{ $subobjet->description }} </td>
        <td> {{ $subobjet->status }} </td>
        <td>
          <a class="btn btn-xs btn-primary" href="{{ route('objets.subobjets.show', [$objet,$subobjet]) }}">
            <i class="fas fa-eye"></i>
          </a>
          <a class="btn btn-sm btn-success" href="{{ route('objets.subobjets.edit', [$objet,$subobjet]) }}">
            <i class="fas fa-pen"></i>
          </a>
          <form action="{{ route('objets.subobjets.destroy', [$objet,$subobjet]) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
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
