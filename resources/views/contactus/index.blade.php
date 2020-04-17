@extends('layouts.admin')

@section('title', 'Contact us messages')

@section('content')
<x-pages-card icon="/svg/005.svg" :link="route('contactus.create')" button="Ajouter un nouveau" :items="$messages">

  <thead class="">
    <tr>
      <th class="text-center" style="width:100px">Date/Heure</th>
      <th>Message</th>
      <th class="text-center" style="width:100px">Autor</th>
      <th class="text-center" style="width:100px">Actions</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($messages as $message)
    <tr>
      <td class="text-right">
        {{ $message->created_at->format('d-m-Y') }}<br />
        {{ $message->created_at->format('H:i') }}
      </td>
      <td class="event text-left p-2">
        <span class="badge badge-info">{{$message->objet}}</span>
        {!! markdown($message->message) !!}
      </td>
      <td class="text-center">
        <span class="badge badge-dark text-sm">
          {{ $message->author }}
        </span>
      </td>
      <td>
        @can('update',$message)
        <a class="btn btn-info btn-sm" href="#"> <i class="fas fa-pencil-alt"> </i> </a>
        <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> </a>
        @endcan
      </td>
    </tr>
    @endforeach
  </tbody>

</x-pages-card>
@endsection
