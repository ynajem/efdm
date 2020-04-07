<div class="form-row">
  <div class="form-group col-md-4">
    <label for="title">Type d'intervention :</label>
    <select name="type" id="type" class="custom-select">
      {!! options($types,$event->type ?? '') !!}
    </select>
  </div>
  <div class="form-group col-md-4">
    <label for="language">Date :</label>
    <input type="date" class="form-control" name="date" value="{{ $event->date ?? date('Y-m-d') }}" required>
  </div>
  <div class="form-group col-md-3">
    <label for="language">Heure :</label>
    <input name="time" type="time" class="form-control" value="{{ date('H:i', strtotime($event->time ?? date('H:i'))) }}" required>
  </div>
</div>
<div class="hr-fancy"></div>
<div class="form-row">
  <div class="form-group col-md-4">
    <label>Objet :</label>
    <select class="custom-select" id="objet" placeholder="Selectioner un objet">
      {!! options($objets, $event->subobjet->objet->id ?? '') !!}
    </select>
  </div>
  <div class="form-group col-md-4">
    <label for="topic">Sous-objet :</label>
    <select class="custom-select" name="subobjet_id" id="subobj" required>
      {!! options($subobjets, $event->subobjet->id ?? '') !!}
    </select>
  </div>
  <div class="form-group col-md-4">
    <label for="topic">Extra :</label>
    <input class="form-control" name="extra" value="{{ $event->extra ?? '' }}">
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-12">
    <label for="event">Intervention :</label>
    <textarea class="form-control" name="event" rows="5" required>{{ $event->event ?? '' }}</textarea>
  </div>
</div>