<?php

    include_once "../conexao.php";
    include_once "caminho_imagem.php";

    $target_dir = PATH_IMAGE;
    $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file);
    
    // var_dump($_FILES);
    // die();

    // $titulo = $_POST['titulo'];
    // $subtitulo = $_POST['subtitulo'];
    // $texto = $_POST['texto'];
    // $data_noticia = $_POST['data_noticia'];
    // $autor = $_POST['autor'];
    // $categoria = $_POST['categoria'];
//
    // $sql = 'insert into noticias (titulo, subtitulo, texto, data_noticia, autor, fk_categoria_id ) values ("' . $titulo . '","' . $subtitulo . '","' . $texto . '","' . $data_noticia . '","' . $autor . '","' . $categoria . '") ';
//
    // $connect->exec($sql);
//
    // header('location: index.php');

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
        
        $sql = 'UPDATE noticias SET' .implode(',', $campos). ' WHERE id = ' . $id;
        
        if(!empty($_FILES["imagem"]["name"])){
            $imagem = $target_file;
            $campos2[]=" imagem='$imagem'";
        }
        
        if(!empty($campos2)){
            $sql2 = 'UPDATE imagem SET' .implode(',', $campos2). ' WHERE fk_noticias_id = ' . $id;
        }else{
            $sql2 = '';
        }

    }else {
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];
        $texto = $_POST['texto'];
        $autor = $_POST['autor'];
        $data_noticia = $_POST['data_noticia'];
        $categoria = $_POST['categoria'];
        $imagem = $target_file;
        $parte_texto = 0;
        
        $sql = "INSERT INTO noticias 
        (titulo, subtitulo, texto, data_noticia, autor, fk_categoria_id) VALUES 
        ('$titulo', '$subtitulo', '$texto', '$data_noticia', '$autor', '$categoria')";
    }

    try {
        $connect->exec($sql);
        if(empty($id)){
            $parte_texto = 1;
        }
    } catch (PDOException $e) {
        // echo $e->getMessage();
        if ($id != 0) {
            Header('Location: cadastro.php?id=$id&msg=createerro');
        }
        Header('Location: cadastro.php?msg=createerro');
    }
    
    if(empty($id) and $parte_texto == 1){
        $sql_id = 'SELECT MAX(id) FROM noticias';
        $id_noticias = $connect->query($sql_id);
        foreach ($id_noticias as $dado){
            $id_noticia = $dado;
        }
        
        $sql2 = "INSERT INTO imagem 
        (imagem, fk_noticias_id) VALUES
        ('$imagem', '$id_noticia[0]')";
    }
    
    // var_dump($sql);
    // echo "<br><br>";
    // var_dump($sql2);
    // die();
    try {
        if(empty($id) or (!empty($id) and !empty($sql2))){
            $connect->exec($sql2);
        }
    } catch (PDOException $e) {
        // echo $e->getMessage();
        if ($id != 0) {
          Header('Location: cadastro.php?id=$id&msg=createerro');
        }
        Header('Location: cadastro.php?msg=createerro');
    }

    Header('Location: index.php');
