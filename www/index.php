<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style/forms.css">
	
	



</head>
<body>
		



	<div class="container">
			<div class="img">
				<img src="public//icons//tecnologia.png" alt="" srcset="">
			</div>
			<p class="pw"></p>
			<form method="post" action="receberDados.php">	
				<p class="p">Nome</p>
				<input type="text" name="userName" placeholder="Digite seu login" class="input">
				<p class="p">Senha</p>
				<input type="password" name="userKey" placeholder="Digite sua senha" class="input">
				<input type="submit" value="Conecte-se" class="login" >

			</form>
			<div class="lembra">
				<input type = "checkbox" id = "subscribeNews" name = "subscribe" value = "newsletter">
   				  Lembrar login
			</div>
    </div>

	



	
</body>
</html>