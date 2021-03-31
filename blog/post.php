<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
        include_once "modules/head.php"
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
            <h1> Título do Artigo </h1>
            <small>26/03/2021</small>

            <div>
                <img src="https://s2.glbimg.com/Zt1ZiNIJCtNAKLFmI0Umj9mVJoQ=/0x0:1920x1080/924x0/smart/filters:strip_icc()/s.glbimg.com/po/tt2/f/original/2017/06/12/mario-rabbids-6.jpg" width="900" alt="">
            </div>
            <small>Título do vídeo</small>
        </div>

        <div id="content">

            <p style="margin-top: 15px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque dignissimos deleniti sed error dolorem autem perferendis obcaecati eligendi praesentium quos neque consectetur voluptatibus quia quisquam magni corrupti, molestias itaque. Cupiditate!</p>

            <h2>Segundo Título</h2>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem officiis minus quos nulla sed natus porro harum, quae placeat. Similique, est. Enim saepe ducimus, est nam quo praesentium nulla sint Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis consequuntur, velit iure deleniti veritatis libero doloribus, doloremque eaque necessitatibus dicta est aspernatur nihil dolor? Numquam possimus sapiente a debitis. Tempore.</p>

            <figure>
                <img style="margin-top: 35px;" src="https://tecnoblog.net/meiobit/wp-content/uploads/2016/12/20161212super-mario-run.jpg" width="800" alt="">
                <figcaption>Descrição da Imagem</figcaption>
            </figure>


            <h2>Segundo Título</h2>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis cumque ab aut! Magnam officiis ad sequi, distinctio maiores, inventore assumenda quis nulla labore fugiat consectetur voluptate, necessitatibus quam in nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde tempore cupiditate ea commodi magni nulla aperiam consequatur libero voluptate sapiente, rem, a odit provident aut dolore in, eos ipsum quis! <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eos dolorum voluptatem quos distinctio voluptatibus, laboriosam aliquam saepe, amet nulla nihil magnam rerum facilis aliquid pariatur iste repellendus, sunt perspiciatis?</p>
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