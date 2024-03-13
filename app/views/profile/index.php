<style>
  .circle {
    background-color: #aaa;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    overflow: hidden;
    position: relative;
  }

  .circle img {
    position: absolute;
    bottom: 0;
    width: 100%;
    text-align: center;
    display: block;
  }
</style>



<div class="container">
  <div class="circle">
    <img class="img" src="<?= $_SESSION['user']->avatar ?>">
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th width="120">action</th>
        </tr>
      </thead>
      <tr>
        <td><?= $nomeDoUsuario ?></td>
        <td><?= $telefone ?></td>
        <td><?= $email ?></td>
        <td>
          <a href='newname.php' data-bs-toggle="modal" data-bs-target="#profile" title="Editar" class='btn text-info'><i class="fa-solid fa-user-pen"></i></a>
          <a href='newname.php' data-bs-toggle="modal" data-bs-target="#password-change" title="Trocar a senha" class='btn text-danger'><i class="fa-solid fa-key"></i></a>
        </td>
      </tr>
    </table>
  </div>
</div>

<?php
require '_modals/profile.modal.php';
    require '_modals/password-change.modal.php';
    ?>
