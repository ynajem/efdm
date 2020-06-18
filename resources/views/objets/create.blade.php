<x-form title="Créer un nouveau objet" :action="route('objets.store')">
  <div class="form-row">
    <div class="col-md-6">
      <div class="form-group">
        <label class="required" for="type_id">Le type d'objet</label>
        <select class="form-control select2 {{ $errors->has('type_id') ? 'is-invalid' : '' }}" name="type_id" id="type_id" required>
          @foreach($types as $key => $value)
          <option value="{{ $key }}" {{ old('type_id') == $key ? 'selected' : '' }}>{{ $value }}</option>
          @endforeach
        </select>
        @if($errors->has('type_id'))
        <span class="text-danger">{{ $errors->first('type_id') }}</span>
        @endif
      </div>
    </div>
    @can('admin')
    <div class="col-md-4">
      <div class="form-group">
        <label class="required" for="entity_id">Entity</label>
        <select class="form-control select2 {{ $errors->has('entity_id') ? 'is-invalid' : '' }}" name="entity_id" id="entity_id" required>
          @foreach($entities as $key => $value)
          <option value="{{ $key }}" {{ old('entity_id') == $key ? 'selected' : '' }}>{{ $value }}</option>
          @endforeach
        </select>
        @if($errors->has('entity_id'))
        <span class="text-danger">{{ $errors->first('entity_id') }}</span>
        @endif
      </div>
    </div>
    @endcan
    <div class="col-md-2">
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
  </div>
  <div class="form-row">
    <div class="col-md-12">
      <div class="form-group">
        <label class="required" for="name">Objet</label>
        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
        @if($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>
    </div>

  </div>
  <button type="submit" class="btn btn-danger">
    <span class="fa fa-plus mr-2"></span>Ajouter
  </button>
</x-form>
