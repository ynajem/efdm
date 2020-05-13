@extends('layouts.admin')

@section('title', 'Les arrêts et les coupures')

@section('content')
<x-pages-card icon="/svg/001.svg" :link="route('lines.create')" button="Ajouter un nouveau" :items="$lines">

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
      <td class="text-center">{{ $line->subobjet->objet->name }}<br />{{ $line->subobjet->name }}</td>
      <td class="text-center">{{ date('H:i', strtotime($line->starttime)) }}<br /><small>{{ date('d-m-Y', strtotime($line->startdate)) }}</small></td>
      <td class="text-center">
        @if($line->status == 'closed')
        {{ date('H:i', strtotime($line->endtime)) }}<br /><small>{{ date('d-m-Y', strtotime($line->enddate)) }}</small>
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
