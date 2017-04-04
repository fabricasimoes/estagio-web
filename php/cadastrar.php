<html>
<head>
	<title> Nova Notícia </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="../css/layout.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
	include "conexao.php";
	include "../layout.html";
?>
<div class="conteudo-1">
	
		<form method="POST" action="noticias.php" class="form-horizontal" enctype="multipart/form-data">
		
			<legend><b>Dados da Notícia</b></legend>
			<div class="form-group">
			  <label for="autor_">Autor:</label>
			  <input type="text" class="form-control" name="autor" id="autor" required>
			</div>  
			<div class="form-group">
			  <label for="titulo">Título:</label>
			  <input type="text" class="form-control" name="titulo" id="titulo" required>
			</div>
			<div class="form-group">  
			  <label for="descricao">Descrição:</label>
			  <textarea class="form-control" rows="5" name="descricao" required>
			  </textarea>
			</div>
			<div class="form-group">
			   <input type="file" class="form-control" name="imagem" required>
			</div>
		
		<div class="form-group">
			<input type="submit" value="POSTAR" class="btn btn-primary"/>
			<input type="reset" value="CANCELAR" class="btn btn-danger" onclick="history.go(-1);"/>
		</div>
		</form>
	
</div>

<footer>Copyright &copy; Fabricia Galibi</footer>

</body>
</html>