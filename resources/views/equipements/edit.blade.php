@extends('layouts.admin')

@section('title','Modifer un équipement HS')

@section('content')
<x-form-card icon="/svg/005.svg" :action="route('equipements.update',$equipement)">
  @method('PUT')
  @include('equipements.form')
  <button type="submit" class="btn btn-success"><span class="fa fa-edit mr-2"></span>Modifier</button>
</x-form-card>
@endsection