<?php
session_start();
include_once("conexao.php");

$id                  = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome_destinatario   = filter_input(INPUT_POST, 'nome_destinatario', FILTER_SANITIZE_STRING);
$etiqueta            =   filter_input(INPUT_POST, 'etiqueta', FILTER_SANITIZE_STRING);
$status              = filter_input(INPUT_POST, 'status_etiqueta', FILTER_SANITIZE_NUMBER_INT);

$cadastro_usuario = "UPDATE etiquetas SET nome_destinatario='$nome_destinatario', etiqueta='$etiqueta', status_etiqueta='$status' WHERE id='$id'";

$result_cadastro_usuario = mysqli_query($conn, $cadastro_usuario);

if(isset($result_cadastro_usuario)){
    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<p style='color:green;'>Etiqueta editada com sucesso!!!</p>";
        header("Location: listar_etiqueta.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Etiqueta não editada!!!</p>";
        header("Location: listar_etiqueta.php?$id");
    }
}
?>