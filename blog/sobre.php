<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php
        include_once "modules/head.php"
    ?>

    <link rel="stylesheet" href="css/sobre.css">
    <title>Sobre Nós</title>
</head>
<body>

    <?php
        include_once "modules/header.php"
    ?>

    <section class="minha-equipe">
       
            <div class="equipe-img">
                <img src="./image/grupo.jpg" alt="">
            </div><!--equipe-img-->

            <div class="equipe-info">
                <h2>EQUIPE SONSERINA</h2>
                <p style="margin: 15px 0; letter-spacing: 3px; font-weight: lighter;">BLOG DE GAMES</p>

                <p style="margin-top: 50px; letter-spacing: 2px; font-weight: 500; line-height:30px;">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium earum obcaecati esse molestias fugit fugiat officiis perferendis impedit quae eum amet, necessitatibus expedita placeat alias atque pariatur exercitationem veniam doloribus!
                </p>

                <p class="info-p">Twitter | Facebook | Youtube</p>
            </div><!--equipe-descricao-->
        
        <div class="clear"></div>
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