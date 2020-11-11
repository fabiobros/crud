<?php
session_start();
include_once("conexao.php");

$id      = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome    = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$contato = filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_STRING);

$cadastro_usuario = "UPDATE pessoa SET nome='$nome', contato='$contato' WHERE id='$id'";

$result_cadastro_usuario = mysqli_query($conn, $cadastro_usuario);

if(isset($result_cadastro_usuario)){
    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<p style='color:green;'>Cadastro editado com sucesso!!!</p>";
        header("Location: listar.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Cadastro não editado!!!</p>";
        header("Location: listar.php?$id");
    }
}
?>