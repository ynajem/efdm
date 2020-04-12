<div class="form-row">
  <div class="form-group col-md-5">
    <label>Objet :</label>
    <select class="custom-select" id="objet" placeholder="Selectioner un objet">
      {!! options($objets, $line->subobjet->objet->id ?? '') !!}
    </select>
  </div>
  <div class="form-group col-md-4">
    <label for="topic">Sous-objet :</label>
    <select class="custom-select" name="subobjet_id" id="subobj" required>
      {!! options($subobjets, $line->subobjet->id ?? '') !!}
    </select>
  </div>
  <div class="form-group col-md-3">
    <label for="title">Type :</label>
    <select name="type" id="type" class="custom-select">
      {!! options($types,$line->type ?? '') !!}
    </select>
  </div>

</div>
<div class="hr-fancy"></div>
<div class="form-row">
  <div class="form-group col-md-4">
    <label for="language">Date d'arrêt:</label>
    <input type="date" class="form-control" name="startdate" value="{{ $line->startdate ?? date('Y-m-d') }}" required>
  </div>
  <div class="form-group col-md-3">
    <label for="language">Heure d'arrêt:</label>
    <input name="starttime" type="time" class="form-control" value="{{ date('H:i', strtotime($line->starttime ?? date('H:i'))) }}" required>
  </div>
</div>
@if($status == 'closed')
<div class="form-row">
  <div class="form-group col-md-4">
    <label for="language">Date de reprise:</label>
    <input type="date" class="form-control" name="enddate" value="{{ $line->enddate ?? ''}}" required>
  </div>
  <div class="form-group col-md-3">
    <label for="language">Heure de reprise:</label>
    <input name="endtime" type="time" class="form-control" value="{{ $line->endtime ?? ''}}" required>
  </div>
</div>
@endif
<div class="form-row">
  <div class="form-group col-md-12">
    <label for="event">Commentaire :</label>
    <textarea class="form-control" name="comment" rows="3">{{ $line->comment ?? '' }}</textarea>
  </div>
</div>