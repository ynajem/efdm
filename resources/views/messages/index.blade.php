<x-data title="List of messages" :route="route('messages.create')">

  <table class="table table-sm table-striped datatable">
    <thead>
      <tr>
        <th> # </th>
        <th> Date </th>
        <th> Time </th>
        <th> Objet </th>
        <th> Sender </th>
        <th> Actions </th>
      </tr>
    </thead>
    <tbody>
      @foreach($messages as $message)
      <tr data-entry-id="{{ $message->id }}">
        <td> {{ $message->id }} </td>
        <td> {{ $message->created_at->format('d-m-Y') }} </td>
        <td> {{ $message->created_at->format('H:i') }} </td>
        <td> {{ $message->objet }} </td>
        <td> {{ $message->author }} </td>
        <td>
          <a class="btn btn-xs btn-primary" href="{{ route('messages.show', $message) }}">
            <i class="fas fa-eye"></i>
          </a>
          <form action="{{ route('messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
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
