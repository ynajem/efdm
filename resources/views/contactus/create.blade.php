@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row center">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="img-thumbnail">
        <iframe src="https://maps.google.com/maps?hl=fr&amp;q=Nouasseur&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" scrolling="no" width="100%" height="350" frameborder="0"></iframe>
      </div>
    </div>
    <div class="col-sm-6">
      <h3>CONTACTEZ-NOUS</h3>
      <form class="mt-3" method="POST" action="{{ route('contactus.store') }}">
        @csrf
        @error('objet')
        <div class="alert alert-danger" role="alert"> <strong>Veuillez saisir un objet</strong> </div>
        @enderror
        @error('message')
        <div class="alert alert-danger" role="alert"> <strong>Veuillez saisir un message</strong> </div>
        @enderror
        @if(session('message'))
        <div class="alert alert-success" role="alert"> <strong>{{ session('message') }}</strong> </div>
        @endif
        <div class="form-row">
          <div class="form-group col-md-6">
            <div class="media mb-3 mb-md-0">
              <span><i class="fa fa-phone fa-fw text-info"></i></span>
              <div class="media-body ml-1">+212 622 37 22 38</div>
            </div>
          </div>
          <div class="form-group col-md-6">
            <div class="media">
              <span><i class="fa fa-envelope fa-fw text-info"></i></span>
              <div class="media-body ml-1">y.najem@gmail.com</div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <input name="objet" type="text" class="form-control" placeholder="Objet">
        </div>
        <div class="form-group">
          <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><span class="fa fa-paper-plane mr-2"></span>ENVOYER</button>
      </form>
    </div>
  </div>
</div>
@endsection