@extends('layouts.admin')

@section('title', 'Ajouter un nouveau')

@section('content')
<x-form-card icon="/svg/001.svg" :action="route('lines.store')">
  @include('lines.form')
  <button type="submit" class="btn btn-primary"><span class="fa fa-plus mr-2"></span>Ajouter</button>
</x-form-card>
@endsection
