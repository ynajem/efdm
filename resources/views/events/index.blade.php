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
      <th class="text-center hide-print" style="width:120px">Actions</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($events as $event)
    <tr>
      {{-- <td class="text-right">{{ day($event->date) }}<br />{{ h_m($event->time) }}</td> --}}
      <td class="text-right">{{ $event->time->format('d-m-Y H:i') }}</td>
      <td class="text-center">
        <a href="{{ route('events.index',['objet' => $event->objet_id]) }}">{{ $event->objet->name }}</a>
        <br />
        <a href="{{ route('events.index',['subobjet' => $event->subobjet_id]) }}">{{ $event->subobjet->name }}</a>
        {{-- {{ $event->subobjet->name }} --}}
      </td>
      <td class="event text-left p-2">
        @if($event->extra) <span class="badge badge-info">{{$event->extra}}</span> @endif
        {!! markdown($event->event,false) !!}
      </td>
      <td class="text-center">
        <span class="badge badge-dark text-sm">{{ $event->user->username }}</span>
      </td>
      <td class="text-center hide-print">
        <a class="btn btn-info btn-sm" href="{{ route('events.edit',$event) }}"> <i class="fas fa-pencil-alt"> </i> </a>
        <a class="btn btn-danger btn-sm" href="#" data-url="{{ route('events.destroy',$event) }}" onclick="deleteData(this)">
          <i class="fas fa-trash"></i>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>

</x-pages-card>
@endsection
