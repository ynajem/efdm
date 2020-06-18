<x-data title="List of Entities" :route="route('entities.create')">

  <table class="table table-sm table-striped datatable">
    <thead>
      <tr>
        <th> Id </th>
        <th> Name </th>
        <th> Label </th>
        <th> Actions </th>
      </tr>
    </thead>
    <tbody>
      @foreach($entities as $entity)
      <tr data-entry-id="{{ $entity->id }}">
        <td> {{ $entity->id ?? '' }} </td>
        <td> {{ $entity->name ?? '' }} </td>
        <td> {{ $entity->label ?? '' }} </td>
        <td>
          @can('update_users')
          <a class="btn btn-sm btn-success" href="{{ route('entities.edit', $entity->id) }}">
            <i class="fas fa-pen"></i>
          </a>
          @endcan
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</x-data>
