<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
     <!-- BOOTSTRAP 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div>
        <a href="../index.php" class="navbar-brand"> Voltar ao Inicio </a>
        <a href="cadastro_etiqueta.php" class="navbar-brand"> Cadastrar Etiqueta </a>
    </div>
</nav>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
             <label style="text-align:center; font-size:x-large"> Cadastrar Pessoa </label>
                 <form method="POST" action="../insert/db_pessoa.php">
                    <div class="form-group" >
                           <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" autofocus> 
                    </div>
                    <div class="form-group">
                            <input type="contato" name="contato" class="form-control" placeholder="Digite seu numero de contato" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block"  name="salvar_dados" value="Cadastrar Pessoa">
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