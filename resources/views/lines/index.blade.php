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
      <th class="text-center" style="width:150px">Actions</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($lines as $line)
    <tr>
      <td class="text-center">{{ $line->objet->name }}<br />{{ $line->subobjet->name }}</td>
      <td class="text-center">{{ $line->start_time->format("H:i") }}<br /><small>{{ $line->start_time->format("d-m-Y") }}</small></td>
      <td class="text-center">
        @if($line->end_time)
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
      <td class="text-center">
        @unless($line->end_time)
        <a class="btn btn-success btn-sm" href="{{ route('lines.show',$line->id) }}"> <i class="fas fa-check-circle"> </i> </a>
        @endif
        <a class="btn btn-info btn-sm" href="{{ route('lines.edit',$line->id) }}"> <i class="fas fa-pencil-alt"> </i> </a>
        <a class="btn btn-danger btn-sm" href="#" data-url="{{ route('lines.destroy',$line) }}" onclick="deleteData(this)">
          <i class="fas fa-trash"></i>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>

</x-pages-card>
@endsection
