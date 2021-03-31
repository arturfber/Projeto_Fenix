<?php
    include_once "../conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if ($nome == "" || $email == ""){
        echo  "<script>alert('Nome ou email inválido!');</script>";
        header('location: ../index.php?msg=erro&#info-seguir');
    }else {    
        $sql = 'INSERT INTO usuario (nome_completo, email) VALUES ("' . $nome . '","' . $email . '")';
        $connect->exec($sql);
        header('location: ../index.php?msg=sucesso&#info-seguir');
    }
?>