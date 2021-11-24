<?php 

require_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$recebendo_cadastros = "INSERT INTO cliente VALUES('','$nome','$email','$senha')";
$query_cadastros = mysqli_query($conexao,$recebendo_cadastros); 
header('location:listagem.php');

?>