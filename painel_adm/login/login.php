<?php
if(isset($_GET['erro_login'])){
    $erro = "ERRO: Login ou senha inválidos !!!!";
}else{
    $erro = "";
}

// if(isset($_GET['redirect'])){
//     $redireciona = $_GET['redirect'];
// }else{
//     $redireciona = '../index.php';
// }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/login.css" type="text/css" media="screen" charset="utf-8">
    <title>Painel Administrativo</title>
  </head>
  <body>
    <div class="login-page">
      <div class="form">

        <form class="login-form" action="autenticar.php" method="post">
          <input type="text" placeholder="email" name="username" />
          <input type="password" placeholder="senha" name="passwd"/>
          <input type="submit" value="Logar">
        </form>

        <h2><?=$erro?></h2>

      </div>
    </div>

  </body>
</html>
