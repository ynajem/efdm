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
    {{ $slot }}
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