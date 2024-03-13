<?php

// defina as variáveis de conexão
$config = [
  'db_host' => 'localhost',
  'db_user' => 'root',
  'db_pass' => 'my-secret-pw',
  'db_name' => 'my-database',
];

// tenta estabelecer conexão:
try {
  $sqli = new mysqli($config['db_host'], $config['db_user'], $config['db_pass']);
} catch(Exception $e) {
  // se não conseguir estabelecer conexão, exibe erro
  exit('<p><b>Falha na conexão com o mysql</b>: '.$e->getMessage().'</p>');
}

// tenta definir o padrão de caracteres
if (!$sqli->set_charset('utf8')) {
  // se não conseguir definir o padrão de caracteres, exibe o padrão disponível
  exit("<p class='text-danger'>Seu charset não é utf8, chefe!<br>$sqli->character_set_name()</p>");
}

// tenta selecionar/abrir o banco de dados para trabalhar
if (!$sqli->select_db($config['db_name'])) {
  // se o banco de dados não for encontrado:
  exit("<p class='text-danger'>Banco de dados não encontrado, chefe!</p>");
}

return $sqli;
