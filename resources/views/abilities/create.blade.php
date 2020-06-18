<x-form title="Create New Ability" :action="route('abilities.store')">
  <div class="form-group">
    <label class="required" for="name">Ability Name:</label>
    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
    @if($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label class="required" for="label">Description:</label>
    <input class="form-control {{ $errors->has('label') ? 'is-invalid' : '' }}" type="text" name="label" id="label" value="{{ old('label', '') }}">
    @if($errors->has('label'))
    <span class="text-danger">{{ $errors->first('label') }}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-danger">
    <span class="fa fa-plus mr-2"></span>Add
  </button>
</x-form>
