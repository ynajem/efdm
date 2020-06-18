<x-form title="Créer un nouveau sous-objet" :action="route('objets.subobjets.store',$objet)">
  <div class="form-group">
    <label class="required" for="name">Sous-objet</label>
    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
    @if($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
    @if($errors->has('description'))
    <span class="text-danger">{{ $errors->first('description') }}</span>
    @endif
  </div>

  <button type="submit" class="btn btn-dark">
    <span class="fa fa-plus mr-2"></span>Ajouter
  </button>
</x-form>
