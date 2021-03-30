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
            <div class="post-box">
                <a href="post.php">
                    <img src="./image/font-1.jpg" alt="">
                    <h2>Lorem, ipsum dolor</h2>
                    <p class="data">23/03/2021</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum architecto necessitatibus unde quod quo fuga deleniti repellat saepe ratione, minus sit ipsam, alias dicta quia culpa. Vitae, quas blanditiis.</p>
                </a>
            </div>
            <div class="post-box">
                <img src="./image/font-2.jpg" alt="">
                <h2>Lorem, ipsum dolor</h2>
                <p class="data">23/03/2021</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum architecto necessitatibus unde quod quo fuga deleniti repellat saepe ratione, minus sit ipsam, alias dicta quia culpa. Vitae, quas blanditiis.</p>
            </div>
            <div class="post-box">
                <img src="./image/font-3.jpg" alt="">
                <h2>Lorem, ipsum dolor</h2>
                <p class="data">23/03/2021</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum architecto necessitatibus unde quod quo fuga deleniti repellat saepe ratione, minus sit ipsam, alias dicta quia culpa. Vitae, quas blanditiis.</p>
            </div>
            <div class="post-box">
                <img src="./image/font-4.jpg" alt="">
                <h2>Lorem, ipsum dolor</h2>
                <p class="data">23/03/2021</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum architecto necessitatibus unde quod quo fuga deleniti repellat saepe ratione, minus sit ipsam, alias dicta quia culpa. Vitae, quas blanditiis.</p>
            </div>
            <div class="post-box">
                <img src="./image/font-5.jpg" alt="">
                <h2>Lorem, ipsum dolor</h2>
                <p class="data">23/03/2021</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum architecto necessitatibus unde quod quo fuga deleniti repellat saepe ratione, minus sit ipsam, alias dicta quia culpa. Vitae, quas blanditiis.</p>
            </div>
            <div class="post-box">
                <img src="./image/font-6.jpg" alt="">
                <h2>Lorem, ipsum dolor</h2>
                <p class="data">23/03/2021</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum architecto necessitatibus unde quod quo fuga deleniti repellat saepe ratione, minus sit ipsam, alias dicta quia culpa. Vitae, quas blanditiis.</p>
            </div>
            <div class="post-box">
                <img src="./image/font-7.jpg" alt="">
                <h2>Lorem, ipsum dolor</h2>
                <p class="data">23/03/2021</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum architecto necessitatibus unde quod quo fuga deleniti repellat saepe ratione, minus sit ipsam, alias dicta quia culpa. Vitae, quas blanditiis.</p>
            </div>
            <div class="post-box">
                <img src="./image/font-8.jpg" alt="">
                <h2>Lorem, ipsum dolor</h2>
                <p class="data">23/03/2021</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum architecto necessitatibus unde quod quo fuga deleniti repellat saepe ratione, minus sit ipsam, alias dicta quia culpa. Vitae, quas blanditiis.</p>
            </div>
            <div class="post-box">
                <img src="./image/font-9.jpg" alt="">
                <h2>Lorem, ipsum dolor</h2>
                <p class="data">23/03/2021</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cum architecto necessitatibus unde quod quo fuga deleniti repellat saepe ratione, minus sit ipsam, alias dicta quia culpa. Vitae, quas blanditiis.</p>
            </div>
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