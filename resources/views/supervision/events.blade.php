@extends('layouts.admin')

@section('title', 'Les derniers intervetions')

@section('content')
<x-pages-card icon="/svg/002.svg" :link="route('events.create')" button="Ajouter une intervention" :items="$events">

  <thead class="">
    <tr>
      <th class="text-center" style="width:100px">Date/Heure</th>
      <th class="text-center" style="width:120px">Objet</th>
      <th>Intervention</th>
      <th class="text-center" style="width:100px">Créé par</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($events as $event)
    <tr>
      <td class="text-right">{{ day($event->date) }}<br />{{ h_m($event->time) }}</td>
      <td class="text-center">{{ $event->subobjet->objet->name }}<br />{{ $event->subobjet->name }}</td>
      <td class="event text-left p-2">
        @if($event->extra) <span class="badge badge-info">{{$event->extra}}</span> @endif
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
