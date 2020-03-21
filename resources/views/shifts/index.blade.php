@extends('layout')

@section('page_title', 'Afficher toutes les vacations')

@section('content')
  <div class="row">
    <div class="body col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Afficher toutes les vacations</strong>
                <img src="/svg/icon-prototype.svg" height="32" alt="">
            </div>
            <div class="card-body">
              <table class="table table-striped table-sm table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th style="width:100px">Date</th>
                  <th style="width:120px">Vacation</th>
                  <th style="width:50px">Equipe</th>
                  <th>ESAs</th>
                  <th style="width:100px">Ajoutée par</th>
                  <th style="width:140px">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($shifts as $shift)
                <tr>
                  <td>{{ $shift->date }}</td>
                  <td>{{ $periods[$shift->shift] }}</td>
                  <td>{{ $shift->equipe }}</td>
                  <td class="text-left">
                  @foreach (esas($shift,$users) as $esa)
                    <span class="badge badge-dark">{{ $esa }}</span>
                  @endforeach
                  </td>
                  <td>{{ $shift->user->username }}</td>
                  <td>
                    <a href="shifts/{{$shift->id}}" class="btn btn-success btn-sm">
                      <span class="fa fa-eye"></span>
                    </a>
                    <a href="shifts/{{$shift->id}}/edit" class="btn btn-primary btn-sm" title="Edit">
                      <span class="fa fa-wrench"></span>
                    </a>
                    <a href="{{route('shift.delete',$shift->id)}}" onclick="deleteData({{$shift->id}})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteForm">
                      <span class="fa fa-trash"></span>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
              </table>
              <!-- Pagination -->
              {!! $shifts->render() !!}
              <!-- Pagination end -->
            </div>
            <!-- Modal -->
            <form action="" method="POST" class="modal fade" id="deleteForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              @csrf
              @method("DELETE")
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Etes-vous sûr de vouloir supprimer cet enregistrement?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button onclick="formSubmit()" type="button" class="btn btn-primary">Supprimer</button>
                  </div>
                </div>
              </div>
            </form>
            <!-- Model End -->
            <!-- Model Script -->
            <script type="text/javascript">
              function deleteData(id)
              {
                  var url = '{{ route("shift.delete", ":id") }}';
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