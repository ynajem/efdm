<x-form title="Update Ability" :action="route('abilities.update',$ability)">
  @method('put')
  <div class="form-group">
    <label class="required" for="name">Ability Name:</label>
    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $ability->name) }}">
    @if($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label class="required" for="label">Description:</label>
    <input class="form-control {{ $errors->has('label') ? 'is-invalid' : '' }}" type="text" name="label" id="label" value="{{ old('label', $ability->label) }}">
    @if($errors->has('label'))
    <span class="text-danger">{{ $errors->first('label') }}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-success">
    <span class="fa fa-pen mr-2"></span>Edit
  </button>
</x-form>
