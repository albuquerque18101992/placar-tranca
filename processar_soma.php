<?php

include_once('conexao.php');

$jogador_um = $_POST['jogador_um'];
$jogador_dois = $_POST['jogador_dois'];
$jogador_tres = $_POST['jogador_tres'];
$jogador_quatro = $_POST['jogador_quatro'];
$total_dupla_um = $_POST['total_dupla_um'];
$total_dupla_dois = $_POST['total_dupla_dois'];

$salvando_jogadores = "INSERT INTO tb_jogadores (jogador_um, jogador_dois, jogador_tres, jogador_quatro, total_dupla_um, total_dupla_dois) VALUES ('$jogador_um', '$jogador_dois', '$jogador_tres', '$jogador_quatro', '$total_dupla_um', '$total_dupla_dois')";

$salvando_jogador = mysqli_query($conn, $salvando_jogadores);

if(mysqli_affected_rows($conn) > 0) {
    echo "<div class='alert alert-success' role='alert'>Nomes de duplas salvas!</div>";
} else{
    echo "<div class='alert alert-danger' role='alert'>ERRO!</div>";
}

?>
