@extends('layouts.admin')

@section('title','Afficher les détails')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="m-0">{{ $shift->date }}</h3>
        <div class="ml-auto">
          <a href="{{ route('shifts.edit',$shift->id) }}" class="btn btn-dark btn-xs">Modifier</a>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">

            <dl class="row mb-0">
              <dt class="col-sm-2">Status:</dt>
              <dd class="mb-1 col-sm-9"><span class="badge badge-primary badge-md">Active</span></dd>
            </dl>

            <dl class="row mb-0">
              <dt class="col-sm-2">Créé par:</dt>
              <dd class="mb-1 col-sm-9">{{ $shift->added_by->firstname." ".$shift->added_by->lastname }}</dd>
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
              <dd class="mb-1 col-sm-9">{{ $period[$shift->shift] }}</dd>
            </dl>

          </div>
          <div class="col-lg-6" id="cluster_info">

            @if ($shift->chef)
            <dl class="row mb-0">
              <dt class="col-sm-3">Chef de salle:</dt>
              <dd class="mb-1 col-sm-9">{{ $shift->chef->firstname." ".$shift->chef->lastname }}</dd>
            </dl>
            @endif

            @if ($shift->super)
            <dl class="row mb-0">
              <dt class="col-sm-3">Superviseur:</dt>
              <dd class="mb-1 col-sm-9">{{ $shift->super->firstname." ".$shift->super->lastname }}</dd>
            </dl>
            @endif

            <dl class="row mb-0">
              <dt class="col-sm-3">Participants:</dt>
              <dd class="mb-1 col-sm-9">
                @foreach ($shift->team() as $user)
                <span class="badge badge-info">{{ $user }}</span>
                @endforeach
              </dd>
            </dl>

            <dl class="row mb-0">
              <dt class="col-sm-3">Mis à jour:</dt>
              <dd class="mb-1 col-sm-9">{{ $shift->updated_at }}</dd>
            </dl>

            <dl class="row mb-0">
              <dt class="col-sm-3">Créé:</dt>
              <dd class="mb-1 col-sm-9">{{ $shift->created_at }}</dd>
            </dl>

          </div>
        </div>
        <div class="hr-fancy"></div>
        <table class="table table-striped table-bordered table-sm">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th>Entité</th>
              <th>Chef d'equipe</th>
              <th>ESAs</th>
              <th>Renfort</th>
              <th>Créé par</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($shifts as $shift)
            <tr>
              <td class="text-center">{{ $shift->equipe }}</td>
              <td>{{ $shift->entity->label }}</td>
              <td>{{ $shift->chefE()->username ?? ''}}</td>
              <td>
                @foreach ($shift->esa() as $user)
                <span class="badge badge-info text-sm">{{ $user->username }}</span>
                @endforeach
              </td>
              <td>
                @foreach ($shift->renf() as $user)
                <span class="badge badge-dark text-sm">{{ $user->username }}</span>
                @endforeach
              </td>
              <td>{{ $shift->added_by->username }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
