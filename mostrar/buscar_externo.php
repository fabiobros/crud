<?php include("../conexao/conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>
  
<nav class="navbar navbar-dark bg-dark">
      <div class="container">
          <a href="../index.php" class="navbar-brand"> INICIO CRUD - FABIO </a>
          <a href="../cadastros/cadastro_pessoa.php" class="navbar-brand">   Cadastrar Pessoa </a>
          <a href="../cadastros/cadastro_etiqueta.php" class="navbar-brand"> Cadastrar Etiqueta </a>
          <a href="listar.php" class="navbar-brand"> Listar Pessoas </a>
          <a href="listar_etiqueta.php" class="navbar-brand"> Listar Etiquetas </a>
      </div>
  </nav>

<main class="container p-4">
  <div class="row">
     <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nome_Destinatario</th>
            <th>N° Etiqueta</th>
            <th>Data Consulta</th>
            <th>Status Etiqueta</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT * FROM etiquetas";
          $result_tasks = mysqli_query($conn, $query); 

          while($row = mysqli_fetch_assoc($result_tasks)) { 
          ?>
          <tr>
            <td><?php echo $row['nome_destinatario']; ?></td>
            <td><?php echo $row['etiqueta']; ?></td>
            <td><?php echo $row['data_consulta']; ?></td>
            <td><?php echo $row['status_etiqueta']; ?></td>
            <td>
            	<a href="../curl_get.php?id=<?php echo $row['id']?>&etiqueta=<?php echo $row['etiqueta']; ?>" class="btn btn-secondary"><i class="fas fa-sync"></i></a>
              <a href="../delete/apagar_etiqueta.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
              <a href="../edit/editar_etiqueta.php?id=<?php echo $row['id']?>">
              <i class="fas fa-pen-square fa-3x"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>


<!-- BOOTSTRAP 4 SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>