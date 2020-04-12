@extends('layouts.admin')

@section('title', 'Contact us messages')

@section('content')
<div class="row">
  <div class="body col-md-12">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <img class="ml-auto" src="/svg/002.svg" height="32" alt="">
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead class="">
            <tr>
              <th class="text-center" style="width:100px">Date/Heure</th>
              <th>Message</th>
              <th class="text-center" style="width:100px">Autor</th>
              <th class="text-center" style="width:100px">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($messages as $message)
            <tr>
              <td class="text-right">{{ date('d-m-Y', strtotime($message->created_at)) }}<br />{{ date('H:i', strtotime($message->created_at)) }}</td>
              <td class="event text-left p-2">
                <span class="badge badge-info">{{$message->objet}}</span>
                {!! markdown($message->message) !!}
              </td>
              <td class="text-center">
                <span class="badge badge-dark text-sm">
                  {{ $message->author }}
                </span>
              </td>
              <td>
                @can('update',$message)
                <a class="btn btn-info btn-sm" href="#"> <i class="fas fa-pencil-alt"> </i> </a>
                <a class="btn btn-danger btn-sm" href="#"> <i class="fas fa-trash"> </i> </a>
                @endcan
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="card-footer d-flex justify-content-end">
          <!-- Pagination -->
          {!! $messages->render() !!}
          <!-- Pagination end -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection