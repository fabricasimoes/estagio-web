<?php

$host="localhost:3306/";

//Usuario de Acesso ao MySQL
$usuario="root";

//Senha de Acesso do MySQL
$senha=""; 

//Nome do Banco
$db="comicsnews";

//Estabelece  a Conexao com o Mysql
$con = mysql_connect($host,$usuario,$senha) 
             or die (mysql_error());

//Seleciona a Base de Dados
mysql_select_db($db);

?>