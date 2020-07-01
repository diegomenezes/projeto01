<?php

class Emails{
	
	function __construct()	{
		# code...

		// Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
		    //Server settings
		    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host       = 'smtpi.uni5.net';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'contato@rocketstars.com.br';                     // SMTP username
		    $mail->Password   = 'BLAwa0713';                               // SMTP password
		    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		    //Recipients
		    $mail->setFrom('contato@rocketstars.com.br', 'TheRock Marketing');
		    $mail->addAddress('contato@rocketstars.com.br', 'TheRock Marketing');     // Add a recipient
		    //$mail->addReplyTo('info@example.com', 'Information');
		    //$mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    // Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Assunto email';
		    $mail->Body    = 'Corpo do <b>email</b>';
		    $mail->AltBody = 'Corpo do email';

		    $mail->send();
		    echo 'Messageme enviada';
		} catch (Exception $e) {
		    echo "Erro de envio: {$mail->ErrorInfo}";
		}
			}
		}

?>