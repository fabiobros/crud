<?php
session_start();
include_once("../conexao/conexao.php");
$nome    = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$contato = filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_STRING);

$cadastro_usuario = "INSERT INTO pessoa (nome, contato, data_cadastro) VALUES ('$nome', '$contato', NOW() )";



$result_cadastro_usuario = mysqli_query($conn, $cadastro_usuario);


if(isset($result_cadastro_usuario)){
    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<p style='color:green;'>Cadastro realizado com sucesso</p>";
        header("Location: ../cadastros/cadastro_pessoa.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Cadastro não realizado!!!</p>";
        header("Location: ../cadastros/cadastro_pessoa.php");
    }
}
?>