@extends('layouts.admin')
@section('content')
<div class="card">
  <div class="card-header text-bold">Message Body</div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-4">
        <dl class="row mb-0">
          <dt class="col-sm-4">Status:</dt>
          <dd class="mb-1 col-sm-7">
            <span class="badge badge-primary badge-md">{{ $message->status }}</span>
          </dd>
        </dl>

        <dl class="row mb-0">
          <dt class="col-sm-4">Sent By:</dt>
          <dd class="mb-1 col-sm-7">{{ $message->author }}</dd>
        </dl>

        <dl class="row mb-0">
          <dt class="col-sm-4">At:</dt>
          <dd class="mb-1 col-sm-7">
            {{ $message->created_at->format('d-m-Y H:i')  }}
          </dd>
        </dl>
      </div>
      <div class="col-lg-8" id="cluster_info">
        <div class="mb-0 d-flex">
          <dt class="mr-2">Object:</dt>
          <dd class="mb-1">{{ $message->objet }}</dd>
        </div>
        <div class="message-body">
          {!! markdown($message->message) !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
