<?php
//header('Content-type: application/json');
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['sub']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	 echo json_encode(array(
         "status" => false,
         "message" => "Algo deu errado, verifique suas informações."
     ));
     return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$email_subject = "Formulário de contato do site. Assunto: ".$_POST['sub'].".";
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'contato@auraverde.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_body = "\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: contato@auraverde.com.br\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Responda para: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo json_encode(array(
    "status" => true
));
return true;
?>