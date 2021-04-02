<?php
    include_once "../conexao.php";
    
    $sql = 'SELECT * FROM administrador';
    $dados_adm = $connect->query($sql);
?>