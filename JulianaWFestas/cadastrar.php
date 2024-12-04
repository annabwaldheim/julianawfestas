<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$dataNasc = mysqli_real_escape_string($conexao, trim($_POST['dataNasc']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));

$sql = "select count(*) total from cliente where cpf = '$cpf'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "select count(*) total from Login where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
if ($row['total'] == 1){
    $_SESSION['email_existe'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql = "INSERT INTO Cliente (cpf, nome, dataNasc, endereco, cidade, telefone) VALUES 
('$cpf', '$nome', '$dataNasc', '$endereco', '$cidade', '$telefone');";
$sql2= "INSERT INTO Login (email, senha, cpf) VALUES ('$email', '$senha', '$cpf')";

if(($conexao->query($sql) === TRUE) and ($conexao->query($sql2) === TRUE)){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;

?>