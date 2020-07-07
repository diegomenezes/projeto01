<?php
	session_start();

	date_default_timezone_set('America/Sao_Paulo');

	$autoload = function($class){
		if($class == 'Emails'){
			include('classes/phpmailer/PHPMailerAutoLoad.php');
		}
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost/projeto01/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
	define('BASE_DIR_PAINEL',__DIR__.'/painel');

	//Conectar com banco de dados
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','projeto01');

	//Constantes para o painel de controle
	define('NOME_EMPRESA', 'Gisele Bezerra');

	//Funcoes
	function pegaCargo($cargo){
		$arr = [
		'0' => 'Normal',
		'1' => 'Suporte',
		'2' => 'Administrador'];

		return $arr[$cargo];
	}

?>