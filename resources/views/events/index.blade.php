@extends('layouts.admin')

@section('title', 'Les derniers intervetions')

@section('content')
<div class="row">
  <div class="body col-md-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <!-- <h4>Les dernieres interventions</h4> -->
        <a href="{{ route('events.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus mr-2"></i>Ajouter une intervention</a>
        <img class="ml-auto" src="/svg/002.svg" height="32" alt="">
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead class="">
            <tr>
              <th class="text-center" style="width:100px">Date/Heure</th>
              <th class="text-center" style="width:120px">Objet</th>
              <th>Intervention</th>
              <th class="text-center" style="width:100px">Créé par</th>
              <th class="text-center" style="width:100px">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($events as $event)
            <tr>
              <td class="text-right">{{ date('d-m-Y', strtotime($event->date)) }}<br />{{ date('H:i', strtotime($event->time)) }}</td>
              <td class="text-center">{{ $event->subobjet->objet->name }}<br />{{ $event->subobjet->name }}</td>
              <td class="event text-left p-2">
                @if($event->extra)
                <span class="badge badge-info">{{$event->extra}}</span>
                @endif
                {!! markdown($event->event,false) !!}
              </td>
              <td class="text-center">
                <span class="badge badge-dark text-sm">
                  {{ $event->user->username }}
                </span>
              </td>
              <td>
                <a class="btn btn-info btn-sm" href="{{ route('events.edit',$event->id) }}"> <i class="fas fa-pencil-alt"> </i> </a>
                <a class="btn btn-danger btn-sm" href="#" onclick="deleteData({{ $event->id }});return false;"> <i class="fas fa-trash"> </i> </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="card-footer d-flex justify-content-end">
          <!-- Pagination -->
          {!! $events->render() !!}
          <!-- Pagination end -->
        </div>
      </div>
      @include('partials.delete')
      <!-- Model Script -->
      <script type="text/javascript">
        function deleteData(id) {
          var url = '{{ route("events.destroy", ":id") }}';
          url = url.replace(':id', id);
          $("#deleteForm").attr('action', url).modal('show');
        }

        function formSubmit() {
          $("#deleteForm").submit();
        }
      </script>
      <!-- Model Script End -->
    </div>
  </div>
</div>
@endsection