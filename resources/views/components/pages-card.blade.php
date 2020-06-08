<div class="row">
  <div class="body col-md-12">
    <div class="card">
      <div class="card-header">
        <a href="{{$link}}" class="btn btn-success">
          <i class="fas fa-plus mr-2"></i>{{$button}}
        </a>
        <div class="ml-auto">
          {!! $items->render() !!}
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          {{ $slot }}
        </table>
      </div>
      @include('partials.delete')
    </div>
  </div>
</div>