<?php

session_start();
include_once("../conexao/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Listar Pessoas ou Etiquetas</title>
     <!-- BOOTSTRAP 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div>
        <a href="../index.php" class="navbar-brand"> Voltar ao Inicio </a>
        <a href="../cadastros/cadastro_pessoa.php" class="navbar-brand">   Cadastrar Pessoa </a>
        <a href="../cadastros/cadastro_etiqueta.php" class="navbar-brand"> Cadastrar Etiqueta </a>
        <a href="listar.php" class="navbar-brand"> Listar Pessoa</a>
        <a href="buscar_externo.php" class="navbar-brand"> Atualizar Etiquetas</a>
    </div>
</nav>

<h4> Listar Etiquetas</h4>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    //Receber o número da página
    $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    
    //Quantidade de itens por pagina
    $qnt_result_pg = 5;
    
    //calculo de visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

    $result_etiquetas = "Select * FROM etiquetas LIMIT $inicio, $qnt_result_pg";
    $result_total_etiquetas = mysqli_query($conn, $result_etiquetas);
    foreach($result_total_etiquetas as $row){

        echo "ID: "                         . $row['id'] . "<br>";
        echo "Nome Destinatario: "          . $row['nome_destinatario'] . "<br>";
        echo "Etiqueta: "                   . $row['etiqueta'] . "<br>";
        echo "Status Etiqueta : "           . $row['status_etiqueta'] . "<br>";
        echo "<a href='../edit/editar_etiqueta.php?id=" . $row['id'] ."'>Editar</a><br>";
        echo "<a href='../delete/apagar_etiqueta.php?id=" .     $row['id'] ."'>Deletar</a><br><hr>";


    }

    
    //Somar a quantidade de consultas da tabela
    $result_pg = "SELECT COUNT(id) AS num_result FROM etiquetas";
    $resultado_pg = mysqli_query($conn, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);
    //echo $row_pg['num_result'];
    //Quantidade de pagina 
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
    
    //Limitar os link antes depois
    $max_links = 5;
        echo "<a href='listar_etiqueta.php?pagina=1'>Primeira</a> ";
    
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
        if($pag_ant >= 1){
            echo "<a href='listar_etiqueta.php?pagina=$pag_ant'>$pag_ant</a> ";
        }
    }
        
    echo "$pagina ";
    
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
        if($pag_dep <= $quantidade_pg){
            echo "<a href='listar_etiqueta.php?pagina=$pag_dep'>$pag_dep</a> ";
        }
    }
    
    echo "<a href='listar_etiqueta.php?pagina=$quantidade_pg'>Ultima</a>";

    ?>


</body>
</html>