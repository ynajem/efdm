@extends('layouts.admin')

@section('title','Afficher toutes les vacations')

@section('content')
<x-pages-card icon="/svg/003.svg" :link="route('shifts.create')" button="Ajouter" :items="$shifts">

  <thead>
    <tr>
      <th style="width: 1%"> # </th>
      <th style="width: 12%"> Vacation </th>
      <th> Equipe </th>
      <th class="d-none d-md-table-cell" style=" width: 10%"> Ajouté par </th>
      <th style="width: 150px" class="text-center"> Actions </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($shifts as $shift)
    <tr>
      <td> {{ $shift->equipe }} </td>
      <td>
        <a> {{ $shift->start_time->format("d/m/Y")}} </a> <br>
        <small> {{ $shift::SHIFT_SELECT[$shift->shift] }} </small>
      </td>
      <td>
        @foreach ($shift->team() as $esa)
        <span class="badge badge-dark text-sm"> {{ $esa }} </span>
        @endforeach
      </td>
      <td class="text-center d-none d-md-table-cell">
        <span class="badge badge-success text-sm"> {{ $shift->added_by->username }} </span>
      </td>
      <td class="project-actions text-center">
        <a class="btn btn-primary btn-sm" href="{{ route('shifts.show',$shift->id) }}"> <i class="fas fa-folder"> </i> </a>
        <a class="btn btn-info btn-sm" href="{{ route('shifts.edit',$shift->id) }}"> <i class="fas fa-pencil-alt"> </i> </a>
        <a class="btn btn-danger btn-sm" href="#" data-url="{{ route('shifts.destroy',$shift) }}" onclick="deleteData(this)" title="Supprimer">
          <i class="fas fa-trash"></i>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>

</x-pages-card>
@endsection
