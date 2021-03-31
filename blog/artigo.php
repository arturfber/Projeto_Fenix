<?php

    include_once "modules/get_artigos.php";
    $link = get_artigos(false);

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
        include_once "modules/head.php"
    ?>

    <link rel="stylesheet" href="css/artigo.css">
    <title>Artigo</title>
</head>
<body>
    
    <?php
        include_once "modules/header.php"
    ?>

    <section class="artigos">
        <div class="titulo"><h2>ARTIGOS</h2></div>
        <div class="post-container">
            
            <?php
                foreach($link as $noticia):
            ?>
            
            <div class="post-box">
                <a href="post.php?id=<?=$noticia['id']?>">
                    <img src="<?=$noticia['imagem']?>" alt="">
                    <h2><?=$noticia['titulo'] ?></h2>
                    <p><?= date("d/m/Y", strtotime($noticia['data_noticia']))?></p>
                    <p><?=$noticia['subtitulo']?></p>
                </a>
            </div>

            <?php
                endforeach;
            ?>
            
        </div>
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
