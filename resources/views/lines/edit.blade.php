@extends('layouts.admin')

@section('title', 'Modifier')

@section('content')
<x-form-card icon="/svg/001.svg" :action="route('lines.update',$line)">
  @method("PUT")
  @include('lines.form')
  <button type="submit" class="btn btn-success">
    <span class="fa fa-edit mr-2"></span>Modifier
  </button>
</x-form-card>
@endsection
