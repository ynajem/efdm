@extends('layouts.admin')

@section('title', 'Les derniers intervetions')

@section('content')
<x-pages-card icon="/svg/002.svg" :link="route('events.create')" button="Ajouter une intervention" :items="$events">

  <thead class="">
    <tr>
      <th class="text-center" width="150">Entité</th>
      <th class="text-center" width="100">Date/Heure</th>
      <th class="text-center" width="120">Objet</th>
      <th>Intervention</th>
      <th class="text-center" width="100">Créé par</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($events as $event)
    <tr>
      <td>{{ $event->entity->label }}</td>
      <td class="text-right">{{ $event->time->format("d-m-Y") }}<br />{{ $event->time->format("H:i") }}</td>
      <td class="text-center">{{ $event->objet->name }}<br />{{ $event->subobjet->name }}</td>
      <td class="event text-left p-2">
        @if($event->extra) <span class="user-tag bg-info mb-2">{{$event->extra}}</span> @endif
        {!! markdown($event->event,false) !!}
      </td>
      <td class="text-center">
        <span class="badge badge-dark text-sm">{{ $event->user->username }}</span>
      </td>
    </tr>
    @endforeach
  </tbody>

</x-pages-card>
@endsection
