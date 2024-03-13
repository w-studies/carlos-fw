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
