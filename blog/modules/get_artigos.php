<?php

function get_artigos($limit = false) {
  include_once "conexao.php";

  if ($limit):
    $sql = 'select * from noticias inner join imagem on noticias.id = imagem.fk_noticias_id limit 3';
  else:
    $sql = 'select * from noticias inner join imagem on noticias.id = imagem.fk_noticias_id';
  endif;

  return $connect->query($sql);

}
