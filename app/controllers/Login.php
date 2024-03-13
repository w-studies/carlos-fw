<?php

$Config->layout = 'login';
// define errors vazio
$errors = [];
$login  = $password = '';

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
    $stmt = $sqli->prepare('SELECT id, email, name, telephone, avatar, password FROM cadastros WHERE email = ?');

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
