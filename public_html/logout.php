<?php

session_start();
unset($_SESSION['user']);
session_destroy();
// volta para o index
header('Location: ./');
exit();
