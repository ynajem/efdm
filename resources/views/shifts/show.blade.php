@extends('layouts.admin')

@section('title','Date: '. $shift->start_time->format('d/m/Y') . ' - Vacation: ' . App\Shift::SHIFT_SELECT[$shift->shift])

@section('content')
<!-- Equipe -->
<div class="card">
  @if($shift)
  <div class="card-header">
    <div class="card-title text-bold">Equipe</div>
    <div class="ml-auto">
      <a href="{{ route('shifts.edit',$shift->id) }}" class="btn btn-dark btn-sm">
        <span class="fa fa-cog mr-2"></span>Modifier
      </a>
    </div>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">

        <dl class="row mb-0">
          <dt class="col-sm-2">Status:</dt>
          <dd class="mb-1 col-sm-9"><span class="user-tag bg-success">Archivé</span></dd>
        </dl>

        <dl class="row mb-0">
          <dt class="col-sm-2">Créé par:</dt>
          <dd class="mb-1 col-sm-9">{{ $shift->added_by->fullname }}</dd>
        </dl>

        <dl class="row mb-0">
          <dt class="col-sm-2">Entité:</dt>
          <dd class="mb-1 col-sm-9">{{ $shift->entity->label }}</dd>
        </dl>

        <dl class="row mb-0">
          <dt class="col-sm-2">Equipe:</dt>
          <dd class="mb-1 col-sm-9">{{ $shift->equipe }}</dd>
        </dl>

        <dl class="row mb-0">
          <dt class="col-sm-2">Vacation:</dt>
          <dd class="mb-1 col-sm-9">{{ App\Shift::SHIFT_SELECT[$shift->shift] }}</dd>
        </dl>

      </div>
      <div class="col-md-6">

        @if ($shift->chef)
        <dl class="row mb-0">
          <dt class="col-sm-3">Chef de salle:</dt>
          <dd class="mb-1 col-sm-9">{{ $shift->chef->fullname }}</dd>
        </dl>
        @endif

        @if ($shift->super)
        <dl class="row mb-0">
          <dt class="col-sm-3">Superviseur:</dt>
          <dd class="mb-1 col-sm-9">{{ $shift->super->fullname }}</dd>
        </dl>
        @endif

        @if ($shift->chefE())
        <dl class="row mb-0">
          <dt class="col-sm-3">Chef d'équipe:</dt>
          <dd class="mb-1 col-sm-9">{{ $shift->chefE()->fullname }}</dd>
        </dl>
        @endif

        <dl class="row mb-0">
          <dt class="col-sm-3">Créé:</dt>
          <dd class="mb-1 col-sm-9">{{ $shift->created_at }}</dd>
        </dl>

        <dl class="row mb-0">
          <dt class="col-sm-3">Mis à jour:</dt>
          <dd class="mb-1 col-sm-9">{{ $shift->updated_at }}</dd>
        </dl>

      </div>
    </div>
    <div class="hr-fancy"></div>
    <table class="table table-striped table-bordered table-sm">
      <thead>
        <tr>
          <th class="text-center" width="30">#</th>
          <th>Entité</th>
          <th>Equipe</th>
          <th>Renfort</th>
          <th>Créé par</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($shifts as $shift)
        <tr>
          <td class="text-center">{{ $shift->equipe }}</td>
          <td>{{ $shift->entity->label }}</td>
          <td>
            @foreach ($shift->team() as $user)
            <span class="user-tag bg-dark">{{ $user }}</span>
            @endforeach
          </td>
          <td>
            @foreach ($shift->renf() as $user)
            <span class="user-tag bg-info">{{ $user->username }}</span>
            @endforeach
          </td>
          <td><span class="user-tag bg-success">{{ $shift->added_by->username }}</span></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @else
  <div class="card-body text-center">
    <h3>Aucune donnée pour cette vacation.</h3>
    <a href="{{ route('shifts.create') }}" class="btn btn-danger mt-2">
      <span class="fa fa-plus mr-2"></span>Ajoujter votre équipe
    </a>
  </div>
  @endif
</div>

<!-- Equipements HS -->
<x-table title="Les équipements H.S." :link="route('equipements.index')">

  <thead class="">
    <tr>
      <th class="text-center" style="width:200px">Objet</th>
      <th class="text-center" style="width:100px">Debut</th>
      <th class="text-center" style="width:100px">Fin</th>
      <th>Commentaire</th>
      <th class="text-center" style="width:100px">Créé par</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($equipements as $equipement)
    <tr>
      <td class="text-center">
        {{ $equipement->objet->name }}<br />
        {{ $equipement->subobjet->name }}
      </td>
      <td class="text-center">{{ $equipement->start_time->format("H:i") }}<br /><small>{{ $equipement->start_time->format("d-m-Y") }}</small></td>
      <td class="text-center">
        @if($equipement->end_time)
        {{ $equipement->end_time->format("H:i") }}<br /><small>{{ $equipement->end_time->format('d-m-Y') }}</small>
        @else
        -----
        @endif
      </td>
      <td class="event text-left p-2">
        @if($equipement->equipement)
        <span class="user-tag bg-info mb-2">{{ $equipement->equipement }}</span>
        @endif
        {!! markdown($equipement->comment,false) !!}
      </td>
      <td class="text-center">
        <span class="badge badge-dark text-sm">
          {{ $equipement->user->username }}
        </span>
      </td>
    </tr>
    @endforeach
  </tbody>

</x-table>

<!-- Arrets et coupures -->
<x-table title="Les arrêts et les coupures" :link="route('lines.index')">

  <thead class="">
    <tr>
      <th class="text-center" style="width:200px">Objet</th>
      <th class="text-center" style="width:100px">Debut</th>
      <th class="text-center" style="width:100px">Fin</th>
      <th>Commentaire</th>
      <th class="text-center" style="width:100px">Créé par</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($lines as $line)
    <tr>
      <td class="text-center">{{ $line->objet->name }}<br />{{ $line->subobjet->name }}</td>
      <td class="text-center">{{ $line->start_time->format("H:i") }}<br /><small>{{ $line->start_time->format("d-m-Y") }}</small></td>
      <td class="text-center">
        @if($line->end_time)
        {{ $line->end_time->format("H:i") }}<br /><small>{{ $line->end_time->format('d-m-Y') }}</small>
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
    </tr>
    @endforeach
  </tbody>

</x-table>


<!-- Interventions -->
<x-table title="Les interventions" :link="route('events.index')">

  <thead>
    <th width="100">Date</th>
    <th width="50">Heure</th>
    <th class="text-center" width="120">Objet</th>
    <th>Intervention</th>
    <th class="text-center" width="100">Créé par</th>
  </thead>

  <tbody>
    @foreach($events as $event)
    <tr>
      <td>{{ $event->time->format('d/m/Y') }}</td>
      <td>{{ $event->time->format('H:i') }}</td>
      <td class="text-center">{{ $event->objet->name }}<br />{{ $event->subobjet->name }}</td>
      <td class="event text-left">
        @if($event->extra) <span class="user-tag bg-info mb-2">{{$event->extra}}</span> @endif
        {!! markdown($event->event,false) !!}
      </td>
      <td class="text-center">
        <span class="badge badge-dark text-sm">{{ $event->user->username }}</span>
      </td>
    </tr>
    @endforeach
  </tbody>

</x-table>



@endsection
