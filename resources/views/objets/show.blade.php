@extends('layouts.admin')
@section('content')
<div class="card">
  <div class="card-header">Détails de l'objet</div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-2">
        <img src="/svg/003.svg" width="100" alt="" />
      </div>
      <div class="col-md-8">
        <dl class="row mb-0">
          <dt class="col-sm-2">Status:</dt>
          <dd class="mb-1 col-sm-9">
            <span class="badge badge-primary badge-md">{{ $objet->status }}</span>
          </dd>
        </dl>

        <dl class="row mb-0">
          <dt class="col-sm-2">Objet:</dt>
          <dd class="mb-1 col-sm-9">{{ $objet->name }}</dd>
        </dl>

        <dl class="row mb-0">
          <dt class="col-sm-2">Entité:</dt>
          <dd class="mb-1 col-sm-9">{{ $objet->entity->label }}</dd>
        </dl>

        <dl class="row mb-0">
          <dt class="col-sm-2">Type d'objet:</dt>
          <dd class="mb-1 col-sm-9">{{ $objet->type->label }}</dd>
        </dl>
      </div>
    </div>
    <div class="mt-3">
      <a name="edit" id="edit" class="btn btn-dark" href="{{ route('objets.subobjets.index',$objet) }}" role="button">Modifier les sous-objets</a>
    </div>
  </div>
</div>
@endsection
