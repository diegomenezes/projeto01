<?php
	include('../config.php');
	$data = [];
	$assunto = 'Nova mensagem do site!';
	$corpo = '';
	foreach ($_POST as $key => $value) {
		$corpo.=ucfirst($key).": ".$value;
		$corpo.="<hr>";
	}
	$info = array('assunto'=>$assunto,'corpo'=>$corpo);
	$mail = new Emails('smtp.uni5.net','contato@rocketstars.com.br','BLAwa0713','Gisele Bezerra');
	$mail->addAddress('depoiseuleio@gmail.com','Diego');
	$mail->formatarEmail($info);	
	if($mail->enviarEmail()){
		$data['sucesso'] = 'true';
		}else{
		$data['erro'] = 'true';
	}

	

	die(json_encode($data));
?>