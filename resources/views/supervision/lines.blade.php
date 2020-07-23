@extends('layouts.admin')

@section('title', 'Les arrêts et les coupures')

@section('content')
<x-pages-card icon="/svg/001.svg" :link="route('lines.create')" button="Ajouter un nouveau" :items="$lines">

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
    @foreach ($lines as $line)
    <tr>
      <td>{{ $line->entity->label }}</td>
      <td class="text-center">{{ $line->objet->name }}<br />{{ $line->subobjet->name }}</td>
      <td class="text-center">{{ $line->start_time->format("H:i") }}<br /><small>{{ $line->start_time->format("d-m-Y") }}</small></td>
      <td class="text-center">
        @if($line->status == 'closed')
        {{ $line->end_time->format("H:i") }}<br /><small>{{ $line->end_time->format("d-m-Y") }}</small>
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

</x-pages-card>
@endsection
