@extends('layouts.admin')

@section('title', 'Les arrêts et les coupures')

@section('content')
<div class="card">
  <div class="card-header text-bold">Message Body</div>
  <div class="card-body">
    <div class="row">
      @foreach($lines as $id => $line)
      <div class="col text-center">
        <a href="{{ route('reports.show',$line) }}">
          <img src="/svg/{{ $line->avatar }}" alt="{{ $line->name }}" width="64">
          <h6 class="mt-3">{{ $line->name }}</h6>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
