<?php

 include('conexao.php');

?>

<html>

    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>

        <a href="frmprodutos.php">Cadastrar Vendedor</a>

        <hr>

    <div class="container">

    <!-- Inicio da tabela -->

    <table class="table">

  <thead>

    <tr>

      <th scope="col">#</th>

      <th scope="col">Foto</th>

      <th scope="col">Produto</th>

      <th scope="col">Preço</th>

      <th scope="col">Estoque</th>

    </tr>

  </thead>

  <tbody>


  <?php

   

        $sql = "select * from tblprodutos";

        $resultado = $con->query($sql);


        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){

                

            echo "<tr>";

                echo "<th>".$linha['idproduto']."</th>";

                echo "<td><img src='".$linha['foto']."' width='50px' height='65px'></td>";


                echo "<td>".$linha['produto']."</td>";

                echo "<td>".$linha['preco']."</td>";

                

                echo "<td>".$linha['estoque']."</td>";

                echo "<td>

                    <button class='btn btn-primary btn-sm'> Editar</button> 

                    <button class='btn btn-danger btn-sm'>Excluir</button> 

                </td>";

            echo "</tr>";

                    

        }

?>


   

   

  </tbody>

</table>


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>