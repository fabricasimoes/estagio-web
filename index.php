<html>
<head>   
    <link href="css/layout.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	 a { color: #dddfe0;}
	 p { font-size: 12px;}
	</style>
	
</head>
<body>
<div class="titulo-1">
<?php include "layout.html"; ?>

<div class="article">
<?php
	include "php/conexao.php"; 
	$sql = mysql_query("SELECT * FROM noticia ORDER BY data desc LIMIT 20");	
?>
  
	<?php while ($noticia = mysql_fetch_object($sql)) { ?>
		  <div class="conteudo">
			<img src="images/<?php echo $noticia->img; ?>" class="image">
			
			<div class="text">
			  <span class="glyphicon glyphicon-calendar"> </span>
			  <label for="data"> <?php echo date("d/m/y", strtotime($noticia->data)); ?> </label>
			  <label for="autor">Publicado por <?php echo $noticia->autor; ?> </label> 
			  <a href="php/visualizar.php?noticia=<?php echo $noticia->ID; ?>"> <h4><?php echo $noticia->titulo; ?> </h4>
			  <?php $descricao = substr($noticia->descricao, 0, 60);?>
			  
			  <p><?php echo $descricao."..."; ?> </p> </a>
		   </div>
		  </div>
	   
		<?php } ?>
	
</div>

<footer>Copyright &copy; Fabricia Galibi</footer>
</div>

</body>
</html>
