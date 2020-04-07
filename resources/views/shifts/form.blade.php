  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="title">Equipe :</label>
      <select class="custom-select" name="equipe">{!! options($equips,$shift->equipe ?? '') !!}</select>
    </div>
    <div class="form-group col-md-4">
      <label for="language">Vacation :</label>
      <select class="custom-select" name="shift">{!! options($shifts,$shift->shift ?? '') !!}</select>
    </div>
    <div class="form-group col-md-5">
      <label for="language">Date :</label>
      <input name="date" type="date" class="form-control" value="{{ $shift->date ?? date('Y-m-d') }}" required>
    </div>
  </div>
  <hr class="hr-fancy">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Chef de salle :</label>
      <select name="chefSalle" class="custom-select">
        <option value=""></option>
        {!! options($chefSalles,$shift->chefSalle ?? '') !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="topic">Superviseur :</label>
      <select name="supervisor" class="custom-select">
        <option value=""></option>
        {!! options($supervisors, $shift->supervisor ?? '') !!}
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="chef">Chef d'equipe :</label>
      <select name="chefEquipe" class="custom-select">
        <option value=""></option>
        {!! options($users, $chef ?? '') !!}
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12">
      <div class="form-group">
        <label>ESAs :</label>
        <select name="esa[]" class="select2bs4" multiple="multiple" style="width: 100%;">
          {!! options($users) !!}
        </select>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12">
      <div class="form-group">
        <label>Renfort :</label>
        <select name="renf[]" class="custom-select select2bs4" multiple="multiple" style="width: 100%;">
          {!! options($users) !!}
        </select>
      </div>
    </div>
  </div>