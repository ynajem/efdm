@extends('layouts.admin')

@section('title', 'La liste des équipements HS.')

@section('content')
<x-pages-card icon="/svg/005.svg" :link="route('equipements.create')" button="Ajouter un nouveau" :items="$equipements">

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
    @foreach ($equipements as $equipement)
    <tr>
      <td class="text-center">
        {{ $equipement->objet->name }}<br />
        {{ $equipement->subobjet->name }}
      </td>
      <td class="text-center">
        {{ $equipement->start_time->format("H:i") }}<br />
        <small>{{ $equipement->start_time->format("d-m-Y") }}</small>
      </td>
      <td class="text-center">
        @if($equipement->end_time)
        {{ $equipement->end_time->format("H:i") }}<br />
        <small>{{ $equipement->end_time->format("d-m-Y") }}</small>
        @else
        -----
        @endif
      </td>
      <td class="event text-left p-2">
        @if($equipement->equipement)
        <span class="badge badge-info">{{ $equipement->equipement }}</span>
        @endif
        {!! markdown($equipement->comment,false) !!}
      </td>
      <td class="text-center">
        <span class="badge badge-dark text-sm">
          {{ $equipement->user->username }}
        </span>
      </td>
      <td class="text-center">
        @unless($equipement->end_time)
        <a class="btn btn-success btn-sm" href="{{ route('equipements.show',$equipement) }}" title="Mise en service">
          <i class="fas fa-check-circle"></i>
        </a>
        @endunless
        <a class="btn btn-info btn-sm" href="{{ route('equipements.edit',$equipement) }}" title="Modifier">
          <i class="fas fa-pencil-alt"></i>
        </a>
        <a class="btn btn-danger btn-sm" href="#" data-url="{{ route('equipements.destroy',$equipement) }}" onclick="deleteData(this)" title="Supprimer">
          <i class="fas fa-trash"></i>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</x-pages-card>
@endsection
