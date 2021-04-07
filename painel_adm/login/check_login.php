<?php

session_start();

if (!isset($_SESSION['login_ativo'])) {
  $_SESSION['login_ativo'] = false;
  header("location: " . PATH_ROOT . "/login/login.php");
}

if ($_SESSION['login_ativo'] == false) {
  header("location: " . PATH_ROOT . "/login/login.php");
}

session_write_close();
