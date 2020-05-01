<?php
$servername = "localhost";
$username = "id13522260_root";
$password = "r8mVv|?{N^E3U1!s";

try {
    $conn = new PDO("mysql:host=$servername;dbname=id13522260_crud", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "<script>alert('Erro de conexão com o banco');</script>" . $e->getMessage();
    }
?>