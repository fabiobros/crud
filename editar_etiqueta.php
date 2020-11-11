<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_etiquetas = "SELECT * FROM etiquetas WHERE id = '$id'";
$result_total_etiquetas = mysqli_query($conn, $result_etiquetas);
$row_etiqueta = mysqli_fetch_assoc($result_total_etiquetas);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - FABIO - EDITAR</title>
    <!-- BOOTSTRAP 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
        
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand"> INICIO CRUD - FABIO </a>
        <a href="cadastro_pessoa.php" class="navbar-brand">   Cadastrar Pessoa </a>
        <a href="cadastro_etiqueta.php" class="navbar-brand"> Cadastrar Etiqueta </a>
        <a href="listar.php" class="navbar-brand"> Listar Pessoas </a>
        <a href="listar_etiqueta.php" class="navbar-brand"> Listar Etiquetas </a>
    </div>
</nav>
	
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
             <label style="text-align:center; font-size:x-large"> Editar Etiqueta </label>
                <form method="POST" action="proc_edit_etiqueta.php">
                <input type="hidden" name="id" value="<?php echo $row_etiqueta['id']; ?>">
                    <div class="form-group" >
                           <input type="text" name="nome_destinatario" class="form-control" placeholder="Nome Destinatario" value="<?php echo $row_etiqueta['nome_destinatario']; ?>" autofocus> 
                    </div>
                    <div class="form-group">
                            <input type="contato" name="etiqueta" class="form-control" placeholder="Digite o numero da etiqueta" value="<?php echo $row_etiqueta['etiqueta']; ?>" autofocus>
                    </div>
                    <div class="form-group">
                            <input type="number" name="status_etiqueta" class="form-control" placeholder="Digite o status da etiqueta" value="<?php echo $row_etiqueta['status_etiqueta']; ?>" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"  name="salvar_dados" value="Salvar">
                </form>
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
            </div>
        </div>
    </div>
</div>

	</body>
</html>
