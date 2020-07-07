<?php
	if(isset($_GET['deslogar'])){
		Painel::logout();	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel de Controle - TheRock</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">
	<script src="https://kit.fontawesome.com/5bd109bb08.js" crossorigin="anonymous"></script>
</head>
<body>
	<aside class="menu">
		<div class="menu-wrapper">
		<div class="box-usuario">
			<?php
				if($_SESSION['img'] == ''){
			?>
			<div class="avatar-usuario">
				<i class="fa fa-user" aria-hidden="true"></i>
			</div><!--avatar-usuario-->
			<?php }else{ ?>
				<div class="imagem-usuario">
					<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
				</div><!--imagem-usuario-->	
				<?php } ?>
			<div class="nome-usuario">
				<p><?php echo $_SESSION['nome'] ?></p>
				<p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
			</div><!--nome-usuario-->
		</div><!--box-usuario-->
		<div class="items-menu">
			<h2>Cadastro</h2>
				<a <?php selecionadoMenu('cadastrar-depoimento'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
				<a <?php selecionadoMenu('cadastrar-servico'); ?>href="">Cadastrar Serviço</a>
				<a <?php selecionadoMenu('cadastrar-slides'); ?>href="">Cadastrar Slides</a>
			<h2>Gestão</h2>
				<a <?php selecionadoMenu('listar-depoimentos'); ?>href="">Listar Depoimentos</a>
				<a <?php selecionadoMenu('listar-servicos'); ?>href="">Listar Serviços</a>
				<a <?php selecionadoMenu('listar-slides'); ?>href="">Listar Slides</a>
			<h2>Administração do Painel</h2>
				<a <?php selecionadoMenu('editar-usuario'); ?>href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
				<a <?php selecionadoMenu('adicionar-usuarios'); ?>href="">Adicionar Usuários</a>
			<h2>Configuração Geral</h2>
				<a <?php selecionadoMenu('editar-site'); ?>href="">Editar</a>		
		</div><!--items-menu-->	
		</div><!--menu-wrapper-->	
	</aside><!--menu-lateral-aside-->

		
<header>
	<div class="center">
		<div class="menu-btn">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div><!--menu-btn-->

	<div class="logout">
		
		<a href="<?php echo INCLUDE_PATH_PAINEL ?>home"><i class="fa fa-home" aria-hidden="true"></i><span> Página Inicial</span></a>		
		<a href="<?php echo INCLUDE_PATH_PAINEL ?>?deslogar"><i class="fa fa-sign-out" aria-hidden="true"></i><span> Sair</span></a>	
		
	</div><!--logout-->
</div><!--center-->
</header>
<div class="content">
	
	<!--Puxando conteúdo da Home-->
	<?php Painel::carregarPagina(); ?>

</div><!--content-->
<div class="clear"></div>
<script type="text/javascript" src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
</body>
</html>