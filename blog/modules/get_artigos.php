<?php

function get_artigos($limit = false) {
  include_once "conexao.php";

  if ($limit):
    $sql = 'select noticias.id, titulo, subtitulo, imagem, data_noticia from noticias limit 3';
  else:
    $sql = 'select noticias.id, titulo, subtitulo, imagem, data_noticia from noticias';
  endif;

  return $connect->query($sql);

}
