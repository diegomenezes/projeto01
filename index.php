<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Meu Primeiro Site</title>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/5bd109bb08.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Descrição do meu Website">
	<meta name="keywords" content="aula,teste,tags">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>"/>
	<?php

		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		switch ($url) {
			case 'especialidades':
				echo '<target target="especialidades" />';
				# code...
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;
			
		}
	?>

	<header>
		<div class="center">
			<div class="logo left">Gisele Bezerra</div><!-- logomarca -->

			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>especialidades">Especialidades</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav><!-- menu-desktop -->
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>especialidades">Especialidades</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a realtime href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav><!-- menu-mobile -->
			<div class="clear"></div>
		</div><!-- center -->
	</header>
	<div class="container-principal">
	<?php
		

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			//pagina nao existe, chama 404
			if($url != 'especialidades' && $url != 'servicos'){
			$pagina404 = true;
			include('pages/404.php');
		}else{
			include('pages/home.php');
		}
	}
	?>	
	</div>
	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os Direitos Reservados</p>
		</div>
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
	<?php
		if($url == 'home' || $url == ''){
	?>
	<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
	<?php } ?>
	<?php
		if($url == 'contato'){
	?>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDaXNAC5XfDIedHtE2-0M3AJhhskEvLnkc"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	<?php } ?>

</body>
</body>
</html>