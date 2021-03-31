<?php

    include_once "conexao.php";

    $sql = 'select * from noticias inner join imagem on noticias.id = imagem.fk_noticias_id';

    $link = $connect->query($sql);

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
                <a href="post.php">
                    <img src="<?=$noticia['imagem']?>" alt="">
                    <h2><?=$noticia['titulo'];?></h2>
                    <p class="data">30/03/2021</p>
                    <p><?=$noticia['texto']?></p>
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