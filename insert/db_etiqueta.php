<?php
session_start();
include_once("../conexao/conexao.php");
//Variaveis do form etiqueta
$nome_destinatario    = filter_input(INPUT_POST, 'nome_destinatario', FILTER_SANITIZE_STRING);
$etiqueta             = filter_input(INPUT_POST, 'etiqueta', FILTER_SANITIZE_STRING);
$status               = filter_input(INPUT_POST, 'status_etiqueta', FILTER_SANITIZE_STRING);

/* print($nome_destinatario);
print($etiqueta);
print($status);
exit(); */

$cadastro_etiqueta = "INSERT INTO etiquetas (nome_destinatario, etiqueta, status_etiqueta) VALUES ('$nome_destinatario', '$etiqueta', '$status')";

$result_cadastro_etiqueta = mysqli_query($conn, $cadastro_etiqueta);

if(isset($result_cadastro_etiqueta)){
    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p style='color:green;'>Etiqueta cadastrada com sucesso</p>";
        header("Location: ../cadastros/cadastro_etiqueta.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Etiqueta  não  cadastrada!!!</p>";
        header("Location: ../cadastros/cadastro_etiqueta.php");
    }
}
?>