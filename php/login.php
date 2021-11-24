<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect, 'cadastro_clientes');
  if (isset($nome)) {

    $verifica = mysqli_query($connect, "SELECT * FROM cliente WHERE nome =
    '$nome' AND senha = '$senha'");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='../login.html';</script>";
        exit();
      }else{
        setcookie("nome",$nome);
        header("Location:listagem.php");
      }
  }
?>