<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Enviando...</title>		
	</head>
	<body>
		<?php
			 if(isset($_POST['nome']) and isset($_POST['email']) and isset($_POST['mensagem']))
				 {
					
                    $nome = $_POST['nome'];
					$email = $_POST['email'];
					$mensagem = $_POST['mensagem'];
										
					$headers = 'From: contato de '.$nome.' <contato@startx.com>' . "\r\n";
				    $message = "Novo contato de ".$nome." ao site startx.com:   
					\nNome: ".$nome."
					\nEmail: ".$email."
					\nMensagem: ".$mensagem."";
                    $message = wordwrap($message, 70);
                    
					$result = mail('startdesenvolvimento@gmail.com', 'contato de '.$nome, $message,$headers);	
					
                    if ( $result == true ){
  	                   echo "<script>alert('Mensagem enviado com sucesso.');location.href='../index.html';</script>";
					}else {
                 	   echo "<script>alert('Erro');location.href='../index.html';</script>";
					}
	
				 }
				 else
				 {
					  echo "<script>alert('Existem campos obrigatórios vazios.');location.href='../index.html';</script>";
					 }
		?>

	</body>
</html>