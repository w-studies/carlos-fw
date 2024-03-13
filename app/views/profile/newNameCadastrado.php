<?php

session_start();

//inclui a conexao com o banco de dados
include_once 'conexao.php';

//recebe os dados vindo do formulário
$nome = $_POST['nome'];
$id   = $_SESSION['idUsuario'];

if(empty($nome)) {
  echo 'preencha todos os campos.';
  exit;
} else {
  $sql = "SELECT id, nome, telefone, email, senha FROM cadastros WHERE nome = '$nome'";
  if(isset($_POST['nome'])) {
    $result = "UPDATE cadastros SET nome=$nome WHERE id=$id";
  }
  //executa a instrução SQL de inserir na tabela
  $result = "UPDATE cadastros SET nome=$nome WHERE id=$id";
}

header('location: acc.php');
