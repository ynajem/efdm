@extends('layouts.admin')

@section('title', 'La liste des équipements HS.')
@section('icon', 'users m-3 mr-2 text-danger')

@section('content')
<x-pages-card icon="/svg/005.svg" :link="route('equipements.create')" button="Ajouter un nouveau" :items="$equipements">

  <thead class="">
    <tr>
      <th class="text-center" width="150">Entité</th>
      <th class="text-center" width="200">Objet</th>
      <th class="text-center" width="100">Debut</th>
      <th class="text-center" width="100">Fin</th>
      <th>Commentaire</th>
      <th class="text-center" width="100">Créé par</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($equipements as $equipement)
    <tr>
      <td>{{ $equipement->entity->label }}</td>
      <td class="text-center">
        {{ $equipement->objet->name }}<br />
        {{ $equipement->subobjet->name }}
      </td>
      <td class="text-center">
        {{ $equipement->start_time->format("H:i") }}<br />
        <small>{{ $equipement->start_time->format("d-m-Y") }}</small>
      </td>
      <td class="text-center">
        @if($equipement->status == 'closed')
        {{ $equipement->end_time->format("H:i") }}<br />
        <small>{{ $equipement->end_time->format("d-m-Y") }}</small>
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
</x-pages-card>
@endsection
