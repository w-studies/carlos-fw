  <!-- Modal -->
  <div class="modal fade" id="password-change" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Trocar senha</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="password-form" method="post" action="profile/new-password">
            <div class="row">
              <div class="col-12">
                <label>Senha atual:</label>
                <input type="password" class="form-control" required>
              </div>
              <div class="col-12 mt-2">
                <label>Nova senha:</label>
                <input type="password" class="form-control" required>
              </div>
              <div class="col-12 mt-2">
                <label>Confirmar nova senha:</label>
                <input type="password" class="form-control"  required>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" form="password-form" class="btn btn-warning">Atualizar <i class="fa-solid fa-floppy-disk"></i></button>
        </div>
      </div>
    </div>
  </div>
