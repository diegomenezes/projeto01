<?php 

	class Painel
	{
		public static function logado(){
			return isset($_SESSION['login']) ? true : false;
		}

		public static function logout(){
			session_destroy();
			header('Location: '.INCLUDE_PATH_PAINEL);
		}

		public static function carregarPagina(){
			if(isset($_GET['url'])){
				$url = explode('/',$_GET['url']);
				if(file_exists('pages/'.$url[0].'.php')){
					include('pages/'.$url[0].'.php');
						}else{
						//quando a página não existe
						header('Location: '.INCLUDE_PATH_PAINEL);
				
				}	
			}else{
				include('pages/home.php');
			}
		}//carregarPagina

		public static function listarUsuariosOnline(){
			self::limparUsuariosOnline();
			$sql = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.online`");
			$sql->execute();
			return $sql->fetchAll();
		}//listarUsuariosOnline

		public static function limparUsuariosOnline(){
			$date = date('Y-m-d H:i:s');
			$sql = Mysql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE ultima_acao < '$date' - INTERVAL 1 MINUTE");
		}//limparUsuariosOnline

		public static function alert($tipo,$mensagem){
			if($tipo == 'sucesso'){
				echo '<div class="sucesso">'.$mensagem.'</div>';
			}else if($tipo == 'erro'){
				echo '<div class="erro-box">'.$mensagem.'</div>';
			}
		}//alert

		public static function imagemValida($imagem){
			if($imagem['type'] == 'image/jpeg' ||
				$imagem['type'] == 'imagem/jpg' ||
				$imagem['type'] == 'imagem/png'){

				$tamanho = intval($imagem['size']/1024);
				if($tamanho < 300)			
					return true;				
				else
					return false;				
			}else{
				return false;
			}
		}//imagemValida

		public static function uploadFile($file){
			if(move_uploaded_file($file['tmp_name'],BASE_DIR_PAINEL.'/uploads/'.$file['name']))
				return $file['name'];
			else
				return false;
		}//uploadFile

		public static function deleteFile($file){
			@unlink('uploads/'.$file);
		}//deleteFile
	}


 ?>