<?php
session_start();
include_once "../conexao.php";

// $redireciona = $_GET['redirect'];

$username = $_POST['username'];
$senha = hash('sha256', $_POST['passwd']);

$sql = "select * from administrador where email = '$username' and senha = '$senha'";

$resultado = $connect->query($sql);

if ($resultado->rowCount()){
    //credenciais válidas
    $_SESSION['login_ativo'] = true;
    Header('Location: ' . '../noticia/index.php');
}else{
    //credenciais inválidas
    $_SESSION['login_ativo'] = false;
    Header('Location: login.php?erro_login=1');
}
