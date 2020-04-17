@extends('layouts.admin')

@section('title','Ajouter une intervention')

@section('content')
<x-form-card icon="/svg/002.svg" :action="route('events.store')">
  @include('events.form')
  <button type="submit" class="btn btn-primary"><span class="fa fa-plus mr-2"></span>Ajouter</button>
</x-form-card>
@endsection