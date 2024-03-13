<?php

// define a exibição de erros
// REMOVA/COMENTE ESSA LINHA QUANDO ENVIAR PARA PRODUÇÃO
error_reporting(E_ALL);
// inicia sessão
session_start();

$Config = include 'config/config.php';
require 'config/connection.php';
require 'config/pseudoRouter.php';
