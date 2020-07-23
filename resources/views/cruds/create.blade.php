<x-form title="Create New Crud" :action="route('cruds.store')">
  <div class="form-row">
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="name">Model Name</label>
        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
        @if($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="title">Menu Title</label>
        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}">
        @if($errors->has('title'))
        <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="parent_id">Parent Mneu</label>
        <select class="form-control select2 {{ $errors->has('parent_id') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id" required>
          @foreach($cruds as $key => $value)
          <option value="{{ $key }}" {{ old('parent_id') == $key ? 'selected' : '' }}>{{ $value }}</option>
          @endforeach
        </select>
        @if($errors->has('parent_id'))
        <span class="text-danger">{{ $errors->first('parent_id') }}</span>
        @endif
      </div>
    </div>
    <div class="my-3 pl-2">
      <label class="form-check-label mr-3">
        <input name="is_create" class="mr-1" type="checkbox" value="1">Create Form
      </label>
      <label class="form-check-label mr-3">
        <input name="is_edit" class="mr-1" type="checkbox" value="1">Edit Form
      </label>
      <label class="form-check-label mr-3">
        <input name="is_show" class="mr-1" type="checkbox" value="1">Show Page
      </label>
      <label class="form-check-label mr-3">
        <input name="is_index" class="mr-1" type="checkbox" value="1">Index Page
      </label>
      <label class="form-check-label mr-3">
        <input name="is_delete" class="mr-1" type="checkbox" value="1">Delete Action
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-danger">
    <span class="fa fa-plus mr-2"></span>Create New Crud
  </button>
</x-form>
