<?php

    include_once "../conexao.php";
    include_once "caminho_imagem.php";

    $target_dir = PATH_IMAGE;
    $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file);

    if(isset($_POST['id'])){
        $id = $_POST['id'];
    }else{
        $id = 0;
    }

    if ($id){
        $campos = array();
        
        if(!empty($_POST['titulo'])){
            $titulo = $_POST['titulo'];
            $campos[]= " titulo='$titulo'";
        }
        if(!empty($_POST['subtitulo'])){
            $subtitulo = $_POST['subtitulo'];
            $campos[]=" subtitulo='$subtitulo'";
        }
        if(!empty($_POST['texto'])){
            $texto = $_POST['texto'];
            $campos[]=" texto='$texto'";
        }
        if(!empty($_POST['data_noticia'])){
            $data_noticia = $_POST['data_noticia'];
            $campos[]=" data_noticia='$data_noticia'";
        }
        if(!empty($_POST['autor'])){
            $autor = $_POST['autor'];
            $campos[]=" autor='$autor'";
        }
        if(!empty($_POST['categoria'])){
            $categoria = $_POST['categoria'];
            $campos[]=" fk_categoria_id=$categoria";
        }
        if(!empty($_FILES["imagem"]["name"])){
            $imagem = $_FILES["imagem"]["name"];
            $campos[]=" imagem='$imagem'";
        }
        
        $sql = 'UPDATE noticias SET' .implode(',', $campos). ' WHERE id = ' . $id;
        
    }else {
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];
        $texto = $_POST['texto'];
        $autor = $_POST['autor'];
        $data_noticia = $_POST['data_noticia'];
        $categoria = $_POST['categoria'];
        $imagem = $_FILES["imagem"]["name"];
        $parte_texto = 0;
        
        $sql = "INSERT INTO noticias 
        (titulo, subtitulo, texto, data_noticia, autor, fk_categoria_id, imagem) VALUES 
        ('$titulo', '$subtitulo', '$texto', '$data_noticia', '$autor', '$categoria', '$imagem')";
    }

    try {
        $connect->exec($sql);
    } catch (PDOException $e) {
        // echo $e->getMessage();
        if ($id != 0) {
            Header('Location: cadastro.php?id=$id&msg=createerro');
        }
        Header('Location: cadastro.php?msg=createerro');
    }
    
    Header('Location: index.php');
