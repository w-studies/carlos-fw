<?php

$controller = 'dashboard';
$view       = 'index';

if (!empty($_SERVER['QUERY_STRING'])) {

  $url = explode('/', trim($_SERVER['QUERY_STRING'], '/'));

  $controller = array_shift($url);

  if (count($url)) {
    $view = array_shift($url);
  }

  $Params = $url;
}

$Controller = [
  'name' => ucfirst($controller),
];

$View = [
  'name' => $view,
  'path' => '../app/views/'.$controller.'/'.$view.'.php',
];

if (!isset($_SESSION['user']) && $controller !== 'login') {
  header('Location: login');
}

$controllerFile = '../app/controllers/'.$Controller['name'].'.php';

// se existir um controller
if (is_file($controllerFile)) {
  //
  require $controllerFile;
}
