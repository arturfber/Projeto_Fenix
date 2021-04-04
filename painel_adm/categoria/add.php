<?php

include_once "../conexao.php";

$nome = $_POST['nome'];
if (empty($nome)) {
  header('location: index.php?msg=adderro');
}

try {
  $connect->exec("INSERT INTO categoria(nome) VALUES ('$nome')");
  header('location: index.php');
} catch (PDOException $e) {
  header('location: index.php?msg=adderro');
}
