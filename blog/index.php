<?php

include_once "modules/get_artigos.php";
$link = get_artigos(true);

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
                <div class="info-seguir">
                    <h2>SIGA O NOME DO BLOG</h2>
                    <p>Veja as últimas notícias no mundo dos games, aqui você ficará sabendo tudo o que acontece em tempo real, todas as informações, dicas e preços!</p>
                    <form action="POST">
                        <div class="box-input">
                            <input type="text" placeholder="NOME">
                        </div>
                        <div class="box-input">
                            <input type="email" placeholder="E-MAIL">
                        </div>
                        <div class="box-submit">
                            <a href="" type="submit">CADASTRAR</a>
                        </div>
                          
                    </form>
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
                <p>30/03/2021</p>
                <img src="<?=$noticias['imagem']?>" alt="">
                <p class="info-p"><?=$noticias['texto']?></p>
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
