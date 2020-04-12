<!-- Modal -->
<form action="" method="POST" class="modal fade" id="deleteForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  @csrf
  @method("DELETE")
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Etes-vous sûr de vouloir supprimer cet enregistrement?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button onclick="formSubmit()" type="button" class="btn btn-primary">Supprimer</button>
      </div>
    </div>
  </div>
</form>
<!-- Model End -->