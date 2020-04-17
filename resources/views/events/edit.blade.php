@extends('layouts.admin')

@section('title','Modifier une intervention')

@section('content')
<x-form-card icon="/svg/002.svg" :action="route('events.update',$event)">
    @method("PUT")
    @include('events.form')
    <button type="submit" class="btn btn-success"><span class="fa fa-edit mr-2"></span>Modifer</button>
</x-form-card>
@endsection