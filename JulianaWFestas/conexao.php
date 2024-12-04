<?php
$hostname = "localhost";
$bd = "julianawfestas";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname, $usuario, $senha, $bd);
if($conexao->connect_errno){
    echo "Falha ao conectar (" . $conexao->connect_errno . ") " . $conexao->connect_error;
}

?>