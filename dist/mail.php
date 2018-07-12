<?php
//header('Content-type: application/json');
// Check for empty fields
//print_r($_POST); die();
if(empty($_POST['name'])  		||
   empty($_POST['sub']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
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
$sub = $_POST['sub'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$email_subject = "Formulário de contato do site. Cliente: ".$name.".";
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'rodrigo@megustadigital.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.

$email_body = "Detalhes: <br> Nome: ".$name."<br> Assunto: ".$sub."<br> Telefone: ".$phone." <br> Email: ".$email_address." <br> Mensagem: <br> ".$message;

$headers .= "Content-Type: text/html; charset=UTF-8 \r\n";

$headers .= "From: naoresponda@auraverde.com.br \r\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

$headers .= "Responda para: $email_address";

if(@mail($to,$email_subject,$email_body,$headers)){
    echo json_encode(array(
        "status" => true
    ));
} else{
    echo json_encode(array(
        "status" => false,
        "message" => "Falha ao enviar, tente novamente mais tarde."
    ));
}


return true;
?>