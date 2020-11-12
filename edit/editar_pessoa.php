<?php
session_start();
include_once("../conexao/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_pessoas = "SELECT * FROM pessoa WHERE id = '$id'";
$result_total_pessoas = mysqli_query($conn, $result_pessoas);
$row_pessoa = mysqli_fetch_assoc($result_total_pessoas);
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
        <a href="../index.php" class="navbar-brand"> INICIO CRUD - FABIO </a>
        <a href="../cadastros/cadastro_pessoa.php" class="navbar-brand">   Cadastrar Pessoa </a>
        <a href="../cadastros/cadastro_etiqueta.php" class="navbar-brand"> Cadastrar Etiqueta </a>
        <a href="../mostrar/listar.php" class="navbar-brand"> Listar Pessoas </a>
        <a href="../mostrar/listar_etiqueta.php" class="navbar-brand"> Listar Etiquetas </a>
    </div>
</nav>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                <label style="text-align:center; font-size:x-large"> Editar Pessoa </label>
                    <form method="POST" action="../edit/proc_edit_usuario.php">
                    <input type="hidden" name="id" value="<?php echo $row_pessoa['id']; ?>">
                        <div class="form-group" >
                            <input type="text" name="nome" class="form-control" placeholder="Digite o nome completo" value="<?php echo $row_pessoa['nome']; ?>" autofocus> 
                        </div>
                        <div class="form-group">
                                <input type="contato" name="contato" class="form-control" placeholder="Digite o contato novo" value="<?php echo $row_pessoa['contato']; ?>" autofocus>
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