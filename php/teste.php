<?php

include 'conexao.php';

$buscar_cadastros = "SELECT * FROM cliente";
$query_cadastros = mysqli_query($conexao, $buscar_cadastros);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php  while($receber_cadastros = mysqli_fetch_array($query_cadastros)){ ?> 
    <tr><?php echo $receber_cadastros['nome'];['senha'] ?></tr>
    <button type="button" onclick="callAjax('<?php echo $receber_cadastros['id']; ?>')">Excluir</button>
    
    <?php } ?>


    <script>

        function callAjax(id){
            var result = new XMLHttpRequest();
            result.open("POST", "excluir.php", true);
            result.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            result.send("id=" + id);
            result.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }
            }
            return false;
        }

    </script>
</body>
</html>