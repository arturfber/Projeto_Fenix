<?php

include_once "../conexao.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  try {
    $connect->exec("DELETE FROM noticias WHERE id = '$id'");
    header("location: index.php");
  } catch (PDOException $e) {
    // echo $e->getMessage();
    header("location: index.php?msg=deleteerro");
  }
}