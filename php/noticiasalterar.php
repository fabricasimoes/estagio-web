<?php 
	include "conexao.php";

$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$noticia = $_POST['id'];
$imagem = $_FILES["imagem"];



$nome_img = $imagem["name"];
	
// Atualização dos Dados
$sql = mysql_query("UPDATE noticia SET autor = '$autor', titulo='$titulo',descricao='$descricao' WHERE ID = ".$noticia);
				
// Se os dados forem alterado com sucesso
if ($sql){	
    $redirect = "../index.php";
	header("location:$redirect");
}

?>