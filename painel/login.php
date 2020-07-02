<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle - TheRock</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">
</head>
<body>

<div class="box-login">
	<?php 
		if(isset($_POST['acao'])){
			$user = $_POST['user'];
			$password = $_POST['password'];
			$sql = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
			$sql->execute(array($user,$password));
			if($sql->rowCount() == 1){
				//Logamos com sucesso
				$_SESSION['login'] = true;
				$_SESSION['user'] = $user;
				$_SESSION´['password'] = $password;
				header('Location:'.INCLUDE_PATH_PAINEL);
				die();
			}else{
				//Falhou
				echo '<div class="erro-box">Usuário ou senha incorretos!</div>';
			}
		}
	?>
	<h2>Efetue o login:</h2>
<form method="post">
	<input type="text" name="user" placeholder="Login" required>
	<input type="text" name="password" placeholder="Senha" required>
	<input type="submit" name="acao" value="Logar">
</form>
</div><!--box-login-->

</body>
</html>