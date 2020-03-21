@extends('layout')

@section('content')
  <div class="row">
    <div class="body col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Details</strong>
                <img src="/svg/icon-prototype.svg" height="32" alt="">
            </div>
            <div class="card-body">
              <div class="d-flex">
                <div class="mr-4">
                  <time datetime="2020-03-11" class="icon">
                    <em>Mars</em>
                    <strong>2020</strong>
                    <span>11</span>
                  </time>
                </div>
                <div>
                  <dl>
                    <dt>Equipe</dt><dd>{{$shift->equipe}}</dd>
                    <dt>Date</dt><dd>{{$shift->date}}</dd>
                    <dt>Vacation</dt><dd>{{$shift->shift}}</dd>
                    <dt>Chef d'equipe</dt><dd>{{$shift->chef}}</dd>
                  </dl>
                </div>
              </div>
              <style>
                time.icon
                {
                  font-size: 1em; /* change icon size */
                  display: block;
                  position: relative;
                  width: 7em;
                  height: 7em;
                  background-color: #fff;
                  border-radius: 0.6em;
                  box-shadow: 0 1px 0 #bdbdbd, 0 2px 0 #fff, 0 3px 0 #bdbdbd, 0 4px 0 #fff, 0 5px 0 #bdbdbd, 0 0 0 1px #bdbdbd;
                  overflow: hidden;
                }
                time.icon *
                {
                  display: block;
                  width: 100%;
                  font-size: 1em;
                  font-weight: bold;
                  font-style: normal;
                  text-align: center;
                }
                time.icon strong
                {
                  position: absolute;
                  top: 0;
                  padding: 0.4em 0;
                  color: #fff;
                  background-color: #fd9f1b;
                  border-bottom: 1px dashed #f37302;
                  box-shadow: 0 2px 0 #fd9f1b;
                }
                time.icon em
                {
                  position: absolute;
                  bottom: 0.3em;
                  color: #fd9f1b;
                }
                time.icon span
                {
                  font-size: 2.8em;
                  letter-spacing: -0.05em;
                  padding-top: 0.8em;
                  color: #2f2f2f;
                }
              </style>

            </div>
        </div>
    </div>
    <!-- @include("components.leftbar") -->
</div>
@endsection