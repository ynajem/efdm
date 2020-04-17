@extends('layouts.admin')

@section('title','Ajouter un équipement HS')

@section('content')
<x-form-card icon="/svg/005.svg" :action="route('equipements.store')">
  @include('equipements.form')
  <button type="submit" class="btn btn-primary"><span class="fa fa-plus mr-2"></span>Ajouter</button>
</x-form-card>
@endsection

