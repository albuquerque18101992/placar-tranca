<?php

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bdname = "bd_tranca";

$conn = mysqli_connect($servidor, $usuario, $senha, $bdname);

if (!$conn) {
    die("Falha de conexão com o banco" . mysqli_connect_error());
} else {
    //echo "Conectado";
}

?>