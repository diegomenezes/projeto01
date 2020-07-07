<?php 
	verificaPermissaoPagina(2);
?>
<div class="box-content">
	<h2><i class="fa fa-plus"></i> Adicionar Usuário</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				//Enviei o meu formulário.
				
			}
		?>

		<div class="form-group">
			<label>Login:</label>
			<input type="text" name="login" required>
		</div><!--form-group-->

		<div class="form-group">
			<label>Nome:</label>
			<input type="text" name="nome" required>
		</div><!--form-group-->

		<div class="form-group">
			<label>Senha:</label>
			<input type="password" name="password" required>
		</div><!--form-group-->

		<div class="form-group">
			<label>Cargo:</label>
			<select name="cargo">
				<?php

				foreach (Painel::$cargos as $key => $value){
					if($key < $_SESSION['cargo']) echo '<option value="'.$key.'">'.$value.'</option>';
				}

				?>
		</div><!--form-group-->

		<div class="form-group">
			<label>Imagem</label>
			<input type="file" name="imagem"/>
		</div><!--form-group-->

		<div class="form-group">
			<input type="submit" name="acao" value="Adicionar!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->