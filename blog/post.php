<?php
    include_once "conexao.php";
    $id = $_GET['id'];
    
    $post = $connect->query('SELECT * FROM noticias WHERE id = ' . $id );


    foreach($post as $i){
        $dados = $i;

    }
   

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
        
        include_once "modules/head.php";
        
    ?>

    <title>Post</title>
    <link rel="stylesheet" href="css/post.css">

</head>
<body>

    <?php
        include_once "modules/header.php"
    ?>

    <main>

        <div id="head">
            <h1> <?=$dados['titulo']?> </h1>
            <small><?= date("d/m/Y", strtotime($dados['data_noticia']))?></small>

            <div>
                <img src="image/<?=$dados['imagem']?>" width="900" alt="">
            </div>
            <small>Título do vídeo</small>
        </div>

        <div id="content">


            <h2><?=$dados['subtitulo']?></h2>

            <p><?=$dados['texto']?></p>

           

        </div>

        <div id="share">

            <h3> Compartilhar:</h3>

            <div id="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        
        <div class="botao">
            <a href="artigo.php">VOLTAR PARA ARTIGOS</a>
        </div><!--botao-->

    </main>

    <?php
        include_once "modules/footer.php";
    ?>


</body>
</html>
