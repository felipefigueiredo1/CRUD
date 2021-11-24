    <?php        
        include 'conexao.php';
        
        $buscar_cadastros = "SELECT * FROM cliente";
        $query_cadastros = mysqli_query($conexao, $buscar_cadastros);
    ?>



<!doctype html>
<html lang="pt-br">
  <head>
    <title>CADASTRO DE CLIENTES</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($receber_cadastros = mysqli_fetch_array($query_cadastros)){
                $id = $receber_cadastros['id'];
                $nome = $receber_cadastros['nome'];
                $email = $receber_cadastros['email'];
                $senha = $receber_cadastros['senha'];
            
            ?>
            <tr>
            <form action="editar.php" method="post">
                <td scope="row"><?php echo $id; ?></td>
                <td>        <input type="text" name="nome" value="<?php echo $nome; ?>">         </td>
                <td>        <input type="text" name="email" value="<?php echo $email; ?>">       </td>
                <td>        <input type="password" name="senha" value="<?php echo $senha; ?>">         </td>
                <td>
                <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                <input type="submit" value="Editar">    
                </td>
                </form>
                <td>
                <form action="excluir.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                        <input type="submit" value="Excluir">
                
                </form>
                 </td>
                
            </tr>

            <?php }; ?>

            <!--<tr>
                <form action="cadastro.php" method="post">
                    <td></td>
                    <td><label for="nome">Nome: </label>
                        <input type="text" name="nome"></td>
                    <td><label for="email">E-mail: </label>
                        <input type="text" name="email"></td>
                    <td><label for="telefone">Telefone</label>
                        <input type="text" name="telefone"></td>
                    <td><input type="submit" value="Cadastro"></td>
                </form>
            </tr> -->
            
            
        </tbody>
        </table>
        <a href="../index.html">Voltar</a>
    </div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>                                                     