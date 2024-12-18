<?php
session_start();
include("conexao.php");

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])))


$conexao->close();

header('Location: login.php');
exit;

?>