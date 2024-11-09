<?php 
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = new PHPMailer(true);

try {
    $email->isSMTP();
    $email->Host = "smtp.gmail.com";
    $email->Port = 587;
    $email->SMTPSecure = "tls";
    $email->SMTPAuth = true;
    $email->Username = "djadjaman226@gmail.com";
    $email->Password = "ujbi gpiv etno zhjq";

    $email->setFrom("djadjaman226@gmail.com", "Ronasdev");
    $email->addAddress($_POST['email']);

    $email->addAttachment($filePath);

    $email->isHTML(true);
    $email->Subject = "Confirmation de votre demande";
    $email->Body = "Bonjour, votre demande a été prise en compte. Merci .Vous trouverez en piece jointe un recapitulatif";

    $email->send();
    echo "Le message a été envoyé avec succès";


    
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur: {$email->ErrorInfo} ";
}