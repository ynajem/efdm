@extends('layouts.admin')

@section('title', 'Les derniers intervetions')

@section('content')
<div class="row">
  <div class="body col-md-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <!-- <h4>Les dernieres interventions</h4> -->
        <a href="{{ route('lines.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus mr-2"></i>Ajouter</a>
        <img class="ml-auto" src="/svg/002.svg" height="32" alt="">
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead class="">
            <tr>
              <th class="text-center" style="width:200px">Objet</th>
              <th class="text-center" style="width:100px">Debut</th>
              <th class="text-center" style="width:100px">Fin</th>
              <th>Commentaire</th>
              <th class="text-center" style="width:100px">Créé par</th>
              <th class="text-center" style="width:150px">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lines as $line)
            <tr>
              <td class="text-center">{{ $line->subobjet->objet->name }}<br />{{ $line->subobjet->name }}</td>
              <td class="text-center">{{ date('H:i', strtotime($line->starttime)) }}<br /><small>{{ date('d-m-Y', strtotime($line->startdate)) }}</small></td>
              <td class="text-center">
                @if($line->status == 'closed')
                {{ date('H:i', strtotime($line->endtime)) }}<br /><small>{{ date('d-m-Y', strtotime($line->enddate)) }}</small>
                @else
                -----
                @endif
              </td>
              <td class="event text-left p-2"> {!! markdown($line->comment,false) !!} </td>
              <td class="text-center">
                <span class="badge badge-dark text-sm">
                  {{ $line->user->username }}
                </span>
              </td>
              <td class="text-center">
                @if($line->status != 'closed')
                <a class="btn btn-success btn-sm" href="{{ route('lines.show',$line->id) }}"> <i class="fas fa-check-circle"> </i> </a>
                @endif
                <a class="btn btn-info btn-sm" href="{{ route('lines.edit',$line->id) }}"> <i class="fas fa-pencil-alt"> </i> </a>
                <a class="btn btn-danger btn-sm" href="#" onclick="deleteData({{ $line->id }});return false;"> <i class="fas fa-trash"> </i> </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="card-footer d-flex justify-content-end">
          <!-- Pagination -->
          {!! $lines->render() !!}
          <!-- Pagination end -->
        </div>
      </div>
      @include('partials.delete')
      <!-- Model Script -->
      <script type="text/javascript">
        function deleteData(id) {
          var url = '{{ route("lines.destroy", ":id") }}';
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