  <!-- Modal -->
  <div class="modal fade" id="profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="profile-form" method="post" action="profile/save">
            <div class="row">
              <div class="col-12">
                <label>Nome:</label>
                <input type="text" class="form-control" value="<?= $nomeDoUsuario ?>" required>
              </div>
              <div class="col-md-6 mt-2">
                <label>Telefone:</label>
                <input type="tel" class="form-control" value="<?= $telefone ?>" required>
              </div>
              <div class="col-md-6 mt-2">
                <label>Email:</label>
                <input type="email" class="form-control" value="<?= $email ?>" required>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" form="profile-form" class="btn btn-warning">Atualizar <i class="fa-solid fa-floppy-disk"></i></button>
        </div>
      </div>
    </div>
  </div>
