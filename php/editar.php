<?php 

include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$recebendo_cadastros = ("UPDATE cliente SET nome = '$nome', email = '$email', senha = '$senha'
WHERE id = '$id'");
$query_cadastros = mysqli_query($conexao,$recebendo_cadastros) or die(mysqli_error($conexao));

header('location: listagem.php')
?>
