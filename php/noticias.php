<?php 
	include "conexao.php";

$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$imagem = $_FILES["imagem"];


$nome_img = $imagem["name"];



// Verifica se o campo imagem n�o est� vazio
	if (!empty($nome_img)) {		
		
 
		$error = array();
 
    	// Verifica se o arquivo carregado � uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif)$/", $imagem["type"])){
     	   $error[1] = "S�o permitidos apenas as extens�es JPG, PNG E GIF";
   	 	} 	
		
		// Se n�o houver nenhum erro
		if (count($error) == 0) {			
        	
        	// Caminho de onde ficar� a imagem
        	$caminho_img = "../images/" . $nome_img;
 
			// Faz o upload da imagem no caminho indicado
			move_uploaded_file($imagem["tmp_name"], $caminho_img);
		
			// Salva os dados no banco
			$sql = mysql_query("INSERT INTO noticia (autor, titulo, descricao, img) VALUES ('$autor','$titulo','$descricao', '$nome_img')");
		    
			// Se os dados forem inseridos com sucesso
			if ($sql){				
				$redirect = "../index.php";
				header("location:$redirect");
			}
		}
	
		// Se ocorrerem erros
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro;
			}
		}
	}
        

?>