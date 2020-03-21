@extends('layout')

@section('page_title', 'Les derniers intervetions')

@section('content')
  <div class="row">
    <div class="body col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Les dernieres interventions</strong>
                <img src="/svg/003.svg" height="32" alt="">
            </div>
            <div class="card-body">
              <table class="table table-striped table-sm table-bordered">
              <thead class="">
                <tr>
                  <th style="width:100px">Date/Heure</th>
                  <th style="width:120px">Objet</th>
                  <th>Intervention</th>
                  <th style="width:100px">Ajoutée par</th>
                  <th style="width:100px">Operations</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($events as $event)
                <tr>
                  <td>{{ date('d-m-Y', strtotime($event->date)) }}<br/>{{ date('h:i', strtotime($event->time)) }}</td>
                  <td>{{ $event->sub_objet->objet->name }}<br/>{{ $event->sub_objet->name }}</td>
                  <td class="text-left p-2">{!! markdown($event->event,false) !!}</td>
                  <td>{{ $event->user->username }}</td>
                  <td>
                    <a href="events/{{$event->id}}/edit" class="border-0 btn-transition btn btn-outline-success btn-sm" title="Modifier">
                      <span class="fa fa-wrench"></span>
                    </a>
                    <a href="{{route('event.delete',$event->id)}}" title="Supprimer" onclick="deleteData({{$event->id}})" class="border-0 btn-transition btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#deleteForm">
                      <span class="fa fa-trash"></span>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
              <!-- Pagination -->
              {!! $events->render() !!}
              <!-- Pagination end -->
            </div>
            @include('components.delete-modal')
            <!-- Model Script -->
            <script type="text/javascript">
              function deleteData(id)
              {
                  var url = '{{ route("event.delete", ":id") }}';
                  url = url.replace(':id', id);
                  $("#deleteForm").attr('action', url);
              }

              function formSubmit()
              {
                  $("#deleteForm").submit();
              }
            </script>
            <!-- Model Script End -->
        </div>
    </div>
</div>
@endsection