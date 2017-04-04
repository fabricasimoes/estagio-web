<html>
<head>    
  
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <link href="../css/layout.css" rel="stylesheet">
	
	<style>
		span.glyphicon.glyphicon-calendar {
			font-size: 14px;
			color: #5e86bd;
     	}
	</style>
</head>
<body>

<div class="titulo-1">
<?php 
	include "../layout.html"; 
	include "conexao.php"; 	
	$ID = $_GET['noticia'];
	$sql = mysql_query("SELECT * FROM noticia WHERE ID = ".$ID);
	
?>


<div class="btn-group">
  <a href="alterar.php?noticia=<?php echo $ID; ?>" class="btn btn-primary glyphicon glyphicon-pencil" role="button">Editar</a>
</div>

<div class="article">
  
	<?php while ($noticia = mysql_fetch_object($sql)) { ?>
		  <div class="conteudo-view">
			<img src="../images/<?php echo $noticia->img; ?>" class="image-view">			
			
			 <h3><?php echo $noticia->titulo; ?> </h3>
			 <div class="autor-text-view">
				<span class="glyphicon glyphicon-calendar"> <?php echo date("d/m/Y", strtotime($noticia->data)); ?> 
				<label> Publicado por: </label> <?php echo $noticia->autor; ?></span>				
			 </div>
			 <div class="descricao-view">
			 <p><?php echo $noticia->descricao; ?> </p>
			 </div>
		  </div>
	   
		<?php } ?>
	
</div>

	<footer>Copyright &copy; Fabricia Galibi</footer>
	</div>

</body>
</html>
