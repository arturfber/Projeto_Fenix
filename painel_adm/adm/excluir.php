<?php   
    include_once "../conexao.php";

    $id = $_GET['id'];

    $sql = 'DELETE FROM administrador WHERE id = ' . $id;

    $connect->exec($sql);

    Header('Location: adm.php');
?>