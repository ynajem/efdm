<x-form title="Add New Role" :action="route('roles.update',$role)">
  @method('put')
  <div class="form-group">
    <label class="required" for="name">Role Name</label>
    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $role->name) }}">
    @if($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label class="required" for="label">Role Description</label>
    <input class="form-control {{ $errors->has('label') ? 'is-invalid' : '' }}" type="text" name="label" id="label" value="{{ old('label', $role->label) }}">
    @if($errors->has('label'))
    <span class="text-danger">{{ $errors->first('label') }}</span>
    @endif
  </div>

  <div class="form-group">
    <label for="abilities">Role Abilities</label>
    <select class="form-control select2 {{ $errors->has('abilities') ? 'is-invalid' : '' }}" name="abilities[]" id="abilities" multiple>
      @foreach($abilities as $id => $label)
      <option value="{{ $id }}" {{ (in_array($id, old('label', [])) || $role->abilities->contains($id)) ? 'selected' : '' }}>{{ $label }}</option>
      @endforeach
    </select>
    @if($errors->has('abilities'))
    <span class="text-danger">{{ $errors->first('abilities') }}</span>
    @endif
  </div>

  <div class="form-group">
    <label for="users">Role Users</label>
    <select class="form-control select2 {{ $errors->has('users') ? 'is-invalid' : '' }}" name="users[]" id="users" multiple>
      @foreach($users as $key => $value)
      <option value="{{ $key }}" {{ (in_array($key, old('value', [])) || $role->users->contains($key)) ? 'selected' : '' }}>{{ $value }}</option>
      @endforeach
    </select>
    @if($errors->has('users'))
    <span class="text-danger">{{ $errors->first('users') }}</span>
    @endif
  </div>


  <button class="btn btn-danger" type="submit"> Add </button>
</x-form>
