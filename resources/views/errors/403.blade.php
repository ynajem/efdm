@extends('layouts.auth')

@section('content')
<div class="text-center mt-5">
  <img class="maintenance-image" src="/svg/forbidden.svg">
  <h1>Non autorisé</h1>
  <h4>Vous n'êtes pas autorisé à afficher cette page.</h4>
  <div class="btn-group btn-group-sm mt-3 mb-5" role="group">
    <a class="btn btn-outline-info" href="javascript:history.back()" role="button">
      <i class="fa fa-arrow-left"></i> Retourner
    </a>
    <a class="btn btn-info" href="/" role="button"><i class="fa fa-home"></i> Accueil</a>
  </div>
  <p>
    Vous pensez que c'est une erreur?
    <a href="/contact-us"><u> Faites-le nous savoir.</u></a>
  </p>
</div>
@endsection
