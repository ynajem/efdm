<div class="py-2">
  <h3 class="mt-3 mb-2">{{ $title }}</h3>
  <div class="card">
    <div class="card-header">
      <div class="ml-auto">
        <a href="{{$link}}" class="btn btn-sm btn-success">
          <i class="fas fa-plus mr-2"></i>Afficher tout
        </a>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-stripedd table-sm table-borderedd projects">
        {{ $slot }}
      </table>
    </div>
  </div>
</div>
