<?php

include_once "../conexao.php";

if (isset($_POST['nome']) || isset($_POST['id'])) {
  $nome = $_POST['nome'];
  $id = $_POST['id'];

  $connect->exec("UPDATE categoria SET nome = '$nome' WHERE id = '$id'");
  header("location: index.php");
}
