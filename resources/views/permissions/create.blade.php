<x-form title="Create New Permission" :action="route('permissions.store')">
  <div class="form-group">
    <label class="required" for="name">Permission name</label>
    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
    @if($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label class="required" for="description">Permission Description</label>
    <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
    @if($errors->has('description'))
    <span class="text-danger">{{ $errors->first('description') }}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-danger">
    <span class="fa fa-play mr-2"></span>Send
  </button>

</x-form>
