<html>
<head>
	<title> Alterar Notícia </title>
	<link href="../css/layout.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script type=text/javascript>

		function Alerta(){
		alert(Notícia Alterada com sucesso);

		}
	</script>

</head>
<body>

<?php
	include "conexao.php"; 	
	include "../layout.html";

	$ID = $_GET['noticia'];
	$sql = mysql_query("SELECT * FROM noticia WHERE ID = ".$ID);
	
?>

<div class="conteudo-1">
	
		<form method="POST" action="noticiasalterar.php" class="form-horizontal" enctype="multipart/form-data">
		
			<legend><b>Dados da Notícia</b></legend>
		<?php while ($noticia = mysql_fetch_object($sql)) { ?>
			<div class="form-group">
			  <label for="autor_">Autor:</label>
			  <input type="text" class="form-control" name="autor" id="autor" value ="<?php echo $noticia->autor; ?>">
			</div>  
			<div class="form-group">
			  <label for="titulo">Título:</label>
			  <input type="text" class="form-control" name="titulo" id="titulo" value ="<?php echo $noticia->titulo; ?>">
			</div>
			<div class="form-group">  
			  <label for="descricao">Descrição:</label>
			  <textarea class="form-control" rows="5" name="descricao">
			    <?php echo $noticia->descricao; ?>
			  </textarea>
			</div>
			<div class="form-group">
			   <input type="file" class="form-control" name="imagem">
			   <input type="hidden" name="id" value ="<?php echo $noticia->ID; ?>">
			</div>
		<?php } ?>
		<div class="form-group">
			<input type="submit" value="POSTAR" class="btn btn-primary"/>
			<input type="reset" value="CANCELAR" class="btn btn-danger" onclick="history.go(-1);"/>
		</div>
		</form>
	
</div>

<footer>Copyright &copy; Fabricia Galibi</footer>

</body>
</html>