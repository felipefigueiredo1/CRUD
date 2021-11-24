<?php 

require_once("conexao.php");

$sql = "DELETE FROM cliente WHERE id = ".$_POST["id"]."";
$result = $conexao->query($sql);

echo $result;

header('location:listagem.php');
?>