<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email = new PHPMailer();
$email->isSMTP();
$email->Host = "smtp.gmail.com";
$email->SMTPAuth = "true";
$email->SMTPSecure = "tls";
$email->Port ="587";
$email->Username = "fabrica.hub.academy@gmail.com";
$email->Password = "ciaiabsuzjimabht";
$email->Subject = "Email de teste from localhost";
$email->setFrom("fabrica.hub.academy@gmail.com");
$email->addStringAttachment(file_get_contents("https://miro.medium.com/v2/resize:fit:1400/1*m0H6-tUbW6grMlezlb52yw.png"), "qr.jpg");
$email->Body = 'Email de teste usando PHPMailer';
$email->addAddress($_POST['email']);


if($email->Send()){
    echo"Email envidado";
}else{
    echo "nao enviado";
}
$email->smtpClose();