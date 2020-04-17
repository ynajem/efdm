@extends('layouts.admin')

@section('title','Mise en service')

@section('content')
<x-form-card icon="/svg/001.svg" :action="route('lines.update',$line)">
  @method('PUT')
  @include('lines.form')
  <button type="submit" class="btn btn-dark"><span class="fa fa-play mr-2"></span>Mise en service</button>
</x-form-card>
@endsection
