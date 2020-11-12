<?php
session_start();
include_once("conexao/conexao.php");
    
$id  = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$etiqueta  = $_GET['etiqueta'];

// CURL API
$url = "https://apiserver.sgpmaisvendas.com.br:80/sro/00000000000000000000000000000000/" . $etiqueta;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$resultado = json_decode(curl_exec($ch));
  
/*  echo($resultado[0]->numero[0]);
echo("<br>");
echo($resultado[0]->sigla[0]);
echo("<br>"); */
//echo($resultado[0]->evento[0]->descricao[0]);
$descricao = ($resultado[0]->evento[0]->descricao[0]);

/* print($descricao);
print($id);
print($etiqueta);  print para testar a descrição de retorno do JSON
exit(); */

if(!empty($id)){
$query = "UPDATE etiquetas SET data_consulta=NOW(), status_etiqueta='$descricao' WHERE id='$id'";
$result_update_etiqueta = mysqli_query($conn, $query);

if(isset($result_update_etiqueta)){
    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<p style='color:green;'>Etiqueta editada com sucesso!!!</p>";
        header("Location: mostrar/buscar_externo.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Etiqueta não editada!!!</p>";
        header("Location: mostrar/buscar_externo.php?$id");
    }
}
}   
?>
