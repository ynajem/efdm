<div class="form-row">
  <div class="form-group col-md-4">
    <label>Objet :</label>
    <select class="custom-select" id="objet" placeholder="Selectioner un objet">
      {!! options($objets, $equipement->subobjet->objet->id ?? '') !!}
    </select>
  </div>
  <div class="form-group col-md-4">
    <label for="topic">Sous-objet :</label>
    <select class="custom-select" name="subobjet_id" id="subobj" required>
      {!! options($subobjets, $equipement->subobjet->id ?? '') !!}
    </select>
  </div>
  <div class="form-group col-md-4">
    <label for="title">Equipement HS :</label>
    <input type="text" class="form-control" name="equipement" value="{{ $equipement->equipement ?? '' }}">
  </div>

</div>
<div class="hr-fancy"></div>
<div class="form-row">
  <div class="form-group col-md-4">
    <label for="language">Date d'arrêt:</label>
    <input type="date" class="form-control" name="startdate" value="{{ $equipement->startdate ?? date('Y-m-d') }}" required>
  </div>
  <div class="form-group col-md-3">
    <label for="language">Heure d'arrêt:</label>
    <input name="starttime" type="time" class="form-control" value="{{ date('H:i', strtotime($equipement->starttime ?? date('H:i'))) }}" required>
  </div>
</div>
@if($status == 'closed')
<div class="form-row">
  <div class="form-group col-md-4">
    <label for="language">Date de reprise:</label>
    <input type="date" class="form-control" name="enddate" value="{{ $equipement->enddate ?? ''}}" required>
  </div>
  <div class="form-group col-md-3">
    <label for="language">Heure de reprise:</label>
    <input name="endtime" type="time" class="form-control" value="{{ $equipement->endtime ?? ''}}" required>
  </div>
</div>
@endif
<div class="form-row">
  <div class="form-group col-md-12">
    <label for="event">Commentaire :</label>
    <textarea class="form-control" name="comment" rows="3">{{ $equipement->comment ?? '' }}</textarea>
  </div>
</div>