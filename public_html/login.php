<?php

// define errors vazio
$errors = [];
$login  = $password = '';
// conexão com o database
$sqli = require '../app/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // recebe os dados do formulário
  $login    = filter_input(INPUT_POST, 'email');
  $password = filter_input(INPUT_POST, 'password');

  // valida o login
  if (empty($login)) {
    $errors['email'] = 'O campo de email deve ser preenchido.';
  }

  // valida a senha
  if (empty($password)) {
    $errors['password'] = 'O campo de senha deve ser preenchido.';
  }

  // se não houver erro de input
  if (!count($errors)) {

    // escapa as strings para evitar sql injection
    $login_escaped = $sqli->real_escape_string($login);

    // use prepared statement pra evitar injections
    $stmt = $sqli->prepare('SELECT id, email, name, password FROM cadastros WHERE email = ?');

    // executa a consulta
    $stmt->bind_param('s', $login_escaped);
    $stmt->execute();

    $result = $stmt->get_result();

    // se nenhum user foi encontrao
    if (!$result->num_rows) {
      $errors['password'] = 'Usuário ou senha incorreta.';
    }

    // guarda o resultado da busca em $user
    $user = $result->fetch_object();

    // verifica se a senha está correta
    if ($user && !password_verify($password, $user->password)) {
      $errors['password'] = 'Usuário ou senha incorreta.';
    }

    // se não há erros de database
    if (!count($errors)) {
      // guarda o user na sessão
      $_SESSION['user'] = $user;
      // volta para o index
      header('Location: ./');
      exit();
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <main class="form-signin w-100 m-auto">
    <form method='post'>
      <img class="mb-4" src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please Log in</h1>

      <div class="form-floating">
        <input type="email" class="form-control" name="email" value="<?= $login ?>" placeholder="name@example.com" required>
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" value="<?= $password ?>" name="password" placeholder="Password" required>
        <label>Password</label>
      </div>

      <small class="d-block text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></small>
      <small class="d-block text-danger"><?= isset($errors['email']) ? $errors['email'] : '' ?></small>
      <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Login in</button>
      <p class="mt-5 mb-3 text-body-secondary">© 2024</p>
    </form>
  </main>
</body>

</html>
