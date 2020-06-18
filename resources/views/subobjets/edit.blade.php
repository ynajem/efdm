<x-form title="Modifier un sous-objet" :action="route('objets.subobjets.update',[$objet,$subobjet])">
  @method('put')
  <div class="form-group">
    <label class="required" for="name">Sous-objet</label>
    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $subobjet->name) }}" />
    @if($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $subobjet->description) }}" />
    @if($errors->has('description'))
    <span class="text-danger">{{ $errors->first('description') }}</span>
    @endif
  </div>

  <button type="submit" class="btn btn-danger">
    <span class="fa fa-pen mr-2"></span>Modifier
  </button>
</x-form>
