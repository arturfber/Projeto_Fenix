<?php

include_once "../conexao.php";

$categorias = $connect->query("SELECT * FROM categoria");
