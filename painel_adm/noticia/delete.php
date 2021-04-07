<?php

include_once "../conexao.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  try {
    $connect->exec("DELETE FROM imagem WHERE fk_noticias_id = '$id'");
    $connect->exec("DELETE FROM noticias WHERE id = '$id'");
    header("location: index.php?msg=deletesucess");
  } catch (PDOException $e) {
    // echo $e->getMessage();
    header("location: index.php?msg=deleteerro");
  }
}
