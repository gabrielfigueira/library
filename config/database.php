<?php

// Sample file: Never send your credentials to git

// host
$host = 'http://localhost/conteudos/crud-php-mysql-procedural/';

// db
$db_name = 'livraria';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';

try {
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}
