<?php
namespace Controller;
use \W\Controller\Controller;
use \PHPMailer;
use \Respect\Validation\Validator as v;
class ContactController extends Controller
{
	
	public function contact()
	{
	$formErrors = [];
	$decode=[];
	$formValid = [];
		
		
		if(!empty($_POST)){
			$post = array_map('trim', array_map('strip_tags', $_POST));
			if(!v::notEmpty()->length(3, 20)->validate($post['name'])){
				$formErrors['name'] = 'Le nom doit comporter entre 3 et 20 caractères';
			}
			if(!empty($post['business'])){
				if(!v::notEmpty()->length(3,15)->validate($post['business'])){
					$formErrors['business'] = 'Le nom de société doit comporter entre 3 et 15 caractères';
				}
			}
			if(!v::notEmpty()->email()->validate($post['email'])){
				$formErrors['email'] = 'L\'adresse email saisie est invalide';
			}
			if(!empty($post['phone'])){
				if(!v::notEmpty()->digit()->length(10,10)->validate($post['phone'])){
					$formErrors['phone'] = 'Le numéro de téléphone est invalide';
				}
			}
			if(!v::notEmpty()->length(3, 25)->validate($post['subject'])){
				$formErrors['subject'] = 'Le sujet doit comporter entre 3 et 25 caractères';
			}
			if(!v::notEmpty()->length(10, 500)->validate($post['message'])){
				$formErrors['message'] = 'Le message doit comporter entre 10 et 500 caractères';
			}
			/******recaptcha check*******/
	
				// Ma clé privée

			$secret = "6Lf1xDkUAAAAAKQ-dIB0L-gFypNHI-hP6uE8lbP2";
			// Paramètre renvoyé par le recaptcha
			$response = $_POST['g-recaptcha-response'];
			// On récupère l'IP de l'utilisateur
			$remoteip = $_SERVER['REMOTE_ADDR'];
			$api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
			. $secret
			. "&response=" . $response
			. "&remoteip=" . $remoteip ;
			$decode = json_decode(file_get_contents($api_url), true);
	
			if ($decode['success'] == true) {
				if(count($formErrors) === 0){
				/***** Architecture mail *****/
				 
				 $message = '<html><body>';
				 $message .= '<h1><strong>Contact Via Alloitech</strong></h1>';
				 $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				 $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . ($post['name']) . "</td></tr>";
				 $message .= "<tr><td><strong>Email:</strong> </td><td>" . ($post['email']) . "</td></tr>";
				 $message .= "<tr><td><strong>Société:</strong> </td><td>" . ($post['business']) . "</td></tr>";
				 $message .= "<tr><td><strong>Téléphone:</strong> </td><td>" . ($post['phone']) . "</td></tr>";
				 $message .= "<tr><td><strong>Sujet:</strong> </td><td>" . $post['subject'] . "</td></tr>";
				 
				 $message .= "<tr><td><strong>Message:</strong> </td><td>" . ($post['message']) . "</td></tr>";
				 $message .= "</table>";
				 $message .= "</body></html>";
				/*****Envoie du mail******/

				 $mail = new PHPMailer;
					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'ssl0.ovh.net';  					  // Specify main and backup SMTP servers
					$mail->SMTPAuth = true;                               // Enable SMTP authentication
					$mail->Username = 'ne-pas-repondre@alloitech.com';           // SMTP username
					$mail->Password = 'WQtzX5YXBhup';                       // SMTP password
					$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
					$mail->Port = 465;                                    // TCP port to connect to
					
					$mail->CharSet = 'UTF-8';							  //Encodage en utf8 pour les problèmes d'accents
					$mail->setFrom('ne-pas-repondre@alloitech.com');
					$mail->addAddress('jc.decourtheix@outlook.com');     			  // Add a recipient
					$mail->Subject = $post['subject'];
					$mail->Body    = $message;							  //Pour tous les messages (Peuvent contenir du HTML)
					$mail->AltBody = 'end';							  //Pour tous les messages  SANS HTML
					// Envoi 
					if ($mail->send()) {
						$formValid = [ 'valid' => 'Votre demande a bien été envoyer :-)'];
					}
					else {
						var_dump( 'Erreur : ' . $mail->ErrorInfo);						
					}
			}
		}
	
			else {
				// C'est un robot ou le code de vérification est incorrecte
			$formErrors['robot'] = 'Veuillez confirmer que vous êtes bien un humain';
			}
		}
		
		$this->show('Contact/contact', ['post' => $_POST, 'decode'=>$decode, 'formErrors'=>$formErrors, 'formValid'=>$formValid]);
		
		
	}
}