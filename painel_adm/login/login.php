<?php
if(isset($_GET['erro_login'])){
    $erro = "ERRO: Login ou senha inválidos !!!!";
}else{
    $erro = "";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="../css/login.css" type="text/css" media="screen" charset="utf-8">
    <title>Painel Administrativo</title>
  </head>
  <body>
    <div class="login-page">
      <div class="form">

        <h1>Painel Administrativo Blog</h1>
        <form class="login-form" action="autenticar.php" method="post">
          <input type="text" placeholder="E-mail" name="username" />
          <input type="password" placeholder="Senha" name="passwd"/>
          <input type="submit" value="Logar">
        </form>

        <a href="https://memegenerator.net/img/instances/70614368.jpg">Esqueci a senha</a>

        <h2><?=$erro?></h2>

      </div>
    </div>

  </body>
</html>
