<?php
class Conexao
{
    function conecta()
    {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "php_teste";
    $conexao = new mysqli($servername,$username,$password,$dbname);
    if ($conexao->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conexao;
}
}

?>
