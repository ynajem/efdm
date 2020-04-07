@extends('layouts.admin')

@section('title','Afficher Toutes Les Equipes')

@section('content')
<section class="content">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <a href="{{ route('shifts.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus mr-2"></i>Ajouter une équipe</a>
      <div class="card-tools">
        <!-- Pagination -->
        {!! $shifts->render() !!}
        <!-- Pagination end -->
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
          <tr>
            <th style="width: 1%"> # </th>
            <th style="width: 12%"> Vacation </th>
            <th> Equipe </th>
            <th class="d-none d-md-table-cell" style=" width: 10%"> Ajouté par </th>
            <th style="width: 150px" class="text-center"> Actions </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($shifts as $shift)
          <tr>
            <td> {{ $shift->equipe }} </td>
            <td>
              <a> {{ $shift->date }} </a> <br>
              <small> {{ $period[$shift->shift] }} </small>
            </td>
            <td>
              @foreach ($shift->team() as $esa)
              <span class="badge badge-dark text-sm"> {{ $esa }} </span>
              @endforeach
            </td>
            <td class="text-center d-none d-md-table-cell">
              <span class="badge badge-success text-sm"> {{ $shift->added_by->username }} </span>
            </td>
            <td class="project-actions text-center">
              <a class="btn btn-primary btn-sm" href="{{ route('shifts.show',$shift->id) }}"> <i class="fas fa-folder"> </i> </a>
              <a class="btn btn-info btn-sm" href="{{ route('shifts.edit',$shift->id) }}"> <i class="fas fa-pencil-alt"> </i> </a>
              <a class="btn btn-danger btn-sm" href="#" onclick="deleteData({{$shift->id}});return false;"> <i class="fas fa-trash"> </i> </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</section>
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
@endsection

@section('scripts')
<!-- Model Script -->
<script type="text/javascript">
  function deleteData(id) {
    // alert('hello toto');
    // e.preventDefault();
    var url = '{{ route("shifts.destroy", ":id") }}';
    url = url.replace(':id', id);
    $("#deleteForm").attr('action', url).modal('show');
  }

  function formSubmit() {
    $("#deleteForm").submit();
  }
</script>
<!-- Model Script End -->
@endsection