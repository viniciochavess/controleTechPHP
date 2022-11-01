<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
	<style>
		*{
			margin:0px;
			box-sizing: 0px;
		}


		
		body {background-color: #7790ff; display:flex;justify-content:center;align-items:center; overflow-y: hidden;}
	
		
		input {width: 100%; border: none; border-radius: 2px; padding: 10px 0px;margin:10px 0px}
		.container{display: flex;flex-direction: column;align-items: center;max-width: 350px;background-color:rgba(255,255,200,0.3); padding:22px;border-radius:10px;height: 100vh}
		.login{background-color: #6670af;padding:15px;color:white;border:none;margin-top:15px}
		.login:hover{background-color: #117A65}
		.login{
			transition: 0.5s;
		}
		.p{font-size:18px;text-align: center;font-weight: bold; color:white;margin-top: 5px;}
		.pw{font-size:10px;text-align: center;font-weight: bold; color:white; margin-bottom: 15px;}
		img{width: 80px; background-color: white; border-radius: 15px;padding: 12px;}
		.img{display: flex; justify-content: center;}
		.lembra{display: flex;width: 100%;}
	</style>



</head>
<body>
		



	<div class="container">
			<div class="img">
				<img src="public//icons//tecnologia.png" alt="" srcset="">
			</div>
			<p class="pw">'-'</p>
			<form method="post" action="receberDados.php">	
				<p class="p">Nome</p>
				<input type="text" name="userName" placeholder="Digite seu login">
				<p class="p">Senha</p>
				<input type="password" name="userKey" placeholder="Digite sua senha">
				<input type="submit" value="Conecte-se" class="login">

			</form>
			<div class="lembra">
				<input type = "checkbox" id = "subscribeNews" name = "subscribe" value = "newsletter">
   				  Lembrar o login 
			</div>
    </div>

	



	
</body>
</html>