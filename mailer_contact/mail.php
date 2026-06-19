<?php
	define('EMAIL', 'contact@sorwatom.com');
	define('PASSWORD', 'sorwatom123');
	define('SMTP_PORT', 465);
	define('HOST', 'mail.sorwatom.com');
	class mail{
		
		function send($email, $subject, $body, $header=''){
			require_once 'mailer/PHPMailerAutoload.php';

			$headers  = $header.= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;

			//Enable SMTP debugging.
			//$mail->SMTPDebug = 3;

			$mail->Host = HOST;
			$mail->Port = SMTP_PORT;
			$mail->Username = EMAIL;
			$mail->Password = PASSWORD;
			$mail->setFrom(EMAIL);
			$mail->addAddress($email);
			$mail->Subject = $subject;
			$mail->Body = $body;
			$mail->addCustomHeader($headers);

		   	//send the message, check for errors
		   	if (!$mail->send()) {
			   //Sending with traditional mailer
			   $this->init("default"); //Initializing mail parameters SMPTP settings

			   $header = "From: ".EMAIL;
			   if(mail($email, $subject, $body, $headers."From:".EMAIL)){
				   return true; //Here the e-mail was sent
				   }
				else{
					//echo "ERROR: " . $mail->ErrorInfo;
					return false;
				}
			}else {
			   return true;
		   }
		}

		function init($name = "default"){
			ini_set("SMTP", HOST);
			ini_set("smtp_server", "smtp.gmail.com");
			ini_set("smtp_port ", SMTP_PORT);
			ini_set("smtp_ssl", "auto");
			ini_set("auth_username", EMAIL);
			ini_set("auth_password", PASSWORD);
		}
	}
	$mail = new mail();
?>
