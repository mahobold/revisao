<?php
    include ("conexao.php");

    $consultar_banco = "SELECT * FROM tabela_login";
    $retorno_consulta = $mysqli->query( $consultar_banco) or die($mysqli->error);
    $qntd_pedidos= $retorno_consulta->num_rows; //retornar quantidade de linhas

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css.css">
        <title>Lista de usuários</title>
    </head>

    <body>
        <div class="container">
          <h1>Lista - Usuários</h1>
            <table class="table table-striped">
                <tr>
                    <th>Id do login:</th>
                    <th>Login:</th>
                    <th>Senha:</th>
                </tr>
                    <?php
                        while($usuario = $retorno_consulta -> fetch_assoc()){
                        
                    ?>
                <tr>
                   <td><?php echo $usuario['id_login'];?></td>
                   <td><?php echo $usuario['login']; ?></td>
                   <td><?php echo $usuario['senha']; ?></td>

                   
                </tr>

                <?php
                        }
                    ?>
                <input type="submit" value="Voltar">
            </table>
        </div>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>