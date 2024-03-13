<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <base href="<?= BASE_URL ?>/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.118.2">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">

      <a href='' class="navbar-brand">Império Verde</a>
      Olá <?= $_SESSION['user']->name ?>!
      <div class="dropdown-container">
        <a href="dropdown" class="avatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?= $_SESSION['user']->avatar ?>" alt="<?= $_SESSION['user']->name ?>">
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href=""><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
          <li><a class="dropdown-item" href="action/?action=9"><i class="fa-solid fa-triangle-exclamation"></i> Action</a></li>
          <li><a class="dropdown-item" href="settings"><i class="fa-solid fa-gear"></i> Configurações</a></li>
          <li><a class="dropdown-item" href="profile"><i class="fa-regular fa-id-badge"></i> Perfil</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a href='logout' class='dropdown-item text-danger'><i class="fa-solid fa-power-off"></i> Sair</a>
          </li>
        </ul>
      </div>


    </div>
  </nav>
  <div class="container">
    <?php
    require '_partials/view-loader.php';
  ?>
  </div>
  <script src="assets/js/color-modes.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
