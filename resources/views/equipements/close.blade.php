@extends('layouts.admin')

@section('title','Mise en service des équipements')

@section('content')
<x-form-card icon="/svg/005.svg" :action="route('equipements.update',$equipement)">
  @method('PUT')
  @include('equipements.form')
  <button type="submit" class="btn btn-dark"><span class="fa fa-play mr-2"></span>Ajouter</button>
</x-form-card>
@endsection
