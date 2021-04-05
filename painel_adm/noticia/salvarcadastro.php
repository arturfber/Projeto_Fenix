<?php

    include_once "../conexao.php";

    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $texto = $_POST['texto'];
    $data_noticia = $_POST['data_noticia'];
    $autor = $_POST['autor'];
    $categoria = $_POST['categoria'];

    $sql = 'insert into noticias (titulo, subtitulo, texto, data_noticia, autor, fk_categoria_id ) values ("' . $titulo . '","' . $subtitulo . '","' . $texto . '","' . $data_noticia . '","' . $autor . '","' . $categoria . '") ';

    $connect->exec($sql);

    header('location: index.php');
