<?php

  include_once "modules/get_artigos.php";
  $link = get_artigos(true);

  if(isset($_GET['msg'])){
      if($_GET['msg'] == 'erro'){
          $msg = "ERRO: Nome ou e-mail inválido(s)!!!";
      }else if($_GET['msg'] == 'sucesso'){
          $msg = "Cadastrado com sucesso!!!";
      }
  }else{
      $msg = "";
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
        include_once "modules/head.php";
    ?>

    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>

    <?php
        include_once "modules/header.php"
    ?>

    <section class="video-tela">
            <div class="video-1">
                <div class="overlay"></div><!--overlay-->
                <video autoplay loop muted src="./video/game.mp4"></video>

                <div class="over">
                    <img src="./image/logo.png" alt="">
                    <p>BLOG DE GAMES</p>
                    <h3>NOME DO BLOG</h3>
                </div><!--over-->

            </div><!--video-1-->
    </section>

    <section class="seguir">
            <div class="seguir-img">
                <div class="overlay-2"></div>
                <div class="info-seguir" id="info-seguir">
                    <h2>SIGA O NOME DO BLOG</h2>
                    <p>Veja as últimas notícias no mundo dos games, aqui você ficará sabendo tudo o que acontece em tempo real, todas as informações, dicas e preços!</p>
                    <form action="modules/cadastro_usuario.php" method="POST">
                        <input type="text" name="nome" placeholder="NOME">
                        <input type="email" name="email" placeholder="E-MAIL">
                        <input id="cadastrar" type="submit" value="CADASTRAR"/>
                    </form>
                    <p><?=$msg?></p>
                </div><!--info-seguir-->
            </div><!--seguir-img-->
    </section>

    <section class="post">
        <h2>POSTS MAIS RECENTES</h2>
        
        <?php
            foreach($link as $noticias):
        ?>
        
        <div class="info-post">
            <a href="post.php">
                <h2><?=$noticias['titulo']?></h2>
                <p><?= date("d/m/Y", strtotime($noticias['data_noticia']))?></p>
                <img src="<?=$noticias['imagem']?>" alt="">
                <p class="info-p"><?=$noticias['subtitulo']?></p>
            </a>
        </div><!--info-post-->

        <?php
            endforeach;
        ?>
            
        <div class="botao">
            <a href="artigo.php">VER TODOS OS POSTS</a>
        </div><!--botao-->
    </section>

    <?php
        include_once "modules/footer.php";
    ?>

    <!--SCRIPT-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('nav.menu-mobile h2').click(function(){
            $('nav.menu-mobile ul').slideToggle();
        });
    </script>
    
</body>
</html>
