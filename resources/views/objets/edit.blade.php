<x-form title="Update Objet" :action="route('objets.update',$objet)">
  @method('put')
  <div class="row">
    <div class="col-md-3 d-flex">
      <img src="/svg/{{ $objet->avatar }}" width="100">
    </div>
    <div class="col-md-9">
      <div class="form-row">
        <div class="col-md-4">
          <div class="form-group">
            <label class="required" for="status">Etat</label>
            <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
              @foreach(App\Objet::STATUS_SELECT as $key => $value)
              <option value="{{ $key }}" {{ old('status') == $key ? 'selected' : '' }}>{{ $value }}</option>
              @endforeach
            </select>
            @if($errors->has('status'))
            <span class="text-danger">{{ $errors->first('status') }}</span>
            @endif
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <label class="required" for="avatar">Avatar</label>
            <select class="form-control select2 {{ $errors->has('avatar') ? 'is-invalid' : '' }}" name="avatar" id="avatar" required>
              @foreach($avatars as $avatar)
              <option value="{{ $avatar }}" {{ ($avatar == $objet->avatar) ? 'selected' : '' }}>{{ $avatar }}</option>
              @endforeach
            </select>
            @if($errors->has('avatar'))
            <span class="text-danger">{{ $errors->first('avatar') }}</span>
            @endif
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-12">
          <div class="form-group">
            <label class="required" for="name">Objet</label>
            <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name',$objet->name) }}">
            @if($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-dark">
        <span class="fa fa-pen mr-2"></span>Update
      </button>
    </div>
  </div>

</x-form>
