<?php 

include_once "../conexao.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  try {
    $connect->query("DELETE FROM categoria WHERE id = '$id'");
  } catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    header('Location: index.php?msg=delerro');
  }
}
header('Location: index.php?msg=delsucesso');
