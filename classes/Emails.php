<?php

class Emails{
	
	private $mailer;

	public function __construct($host,$username,$senha,$name)	{
		# code...

		// Instantiation and passing `true` enables exceptions
		$this->mailer = new PHPMailer(true);

		
		    //Server settings
		    //$this->mailer->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		    $this->mailer->isSMTP();                                            // Send using SMTP
		    $this->mailer->Host       = $host;                    // Set the SMTP server to send through
		    $this->mailer->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $this->mailer->Username   = $username;                     // SMTP username
		    $this->mailer->Password   = $senha;                               // SMTP password
		    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $this->mailer->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
		    
		    $this->mailer->setFrom($username,$name);
		    $this->mailer->isHTML(true);     
		    $this->mailer->CharSet = 'UTF-8';                             // Set email format to HTML
		    
}
			public function addAddress($email,$nome){
				 $this->mailer->addAddress($email,$nome);
			}

			public function formatarEmail($info){
				$this->mailer->Subject = $info['assunto'];
		   	 	$this->mailer->Body    = $info['corpo'];
		   	 	$this->mailer->AltBody = strip_tags($info['corpo']);
			}
		
			public function enviarEmail(){
				if($this->mailer->send()){
					return true;
				}else{
					return false;
				}
			}

		}

?>