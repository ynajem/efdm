<div class="row center">
  <div class="body col-md-9">
    <div class="card">
      <form class="needs-validation" method="post" action="{{ $action }}" novalidate>
        @csrf
        <div class="card-header"><img class="ml-auto" src="{{$icon}}" height="28"></div>
        <div class="card-body">
          {{ $slot }}
        </div>
    </div>
    </form>
  </div>
</div>
