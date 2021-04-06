<?php

    include_once "../conexao.php";

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

    }else {
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];
        $text = $_POST['text'];
        $autor = $_POST['autor'];
        $data_noticia = $_POST['data_noticia'];
        $categoria = $_POST['categoria'];
        
        $sql = "INSERT INTO noticias 
          (titulo, subtitulo, texto, data_noticia, autor, fk_categoria_id) VALUES 
          ('$titulo', '$subtitulo', '$texto', '$data_noticia', '$autor', $categoria)";
    }

    // var_dump($sql);
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
