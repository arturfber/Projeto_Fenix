<?php

$db_host     = "sonserina.mysql.dbaas.com.br";
$db_user     = "sonserina";
$db_name     = "sonserina";
$db_password = "qwe123qwe";

try {
  $connect = new PDO("mysql:host=$db_host;dbname=$db_name",
    $db_user, $db_password,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
  echo 'ERROR: ' . $e->getMessage();
}
