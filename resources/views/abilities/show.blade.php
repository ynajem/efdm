@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="card-header">Show View</div>
  <div class="card-body">
    This is the show page for <code>{{ $ability->name }}</code> Ability.
    <p>This ability <strong>{{ $ability->label }}</strong></p>
  </div>
</div>
@endsection
