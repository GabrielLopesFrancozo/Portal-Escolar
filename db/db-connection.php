<?php
$host = "localhost";  
$user = "root";        
$password = "";        
$dbname = "db_escola"; 

$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}
