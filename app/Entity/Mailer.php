<?php
namespace App\Entity;

require __DIR__."/../../PHPMailer/src/Exception.php";
require __DIR__."/../../PHPMailer/src/PHPMailer.php";
require __DIR__."/../../PHPMailer/src/SMTP.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
    public $email;

    static function sendEmail($emailparam)
    {
    
        $email = new PHPMailer();
        $email->isSMTP();
        $email->Host = "smtp.gmail.com";
        $email->SMTPAuth = "true";
        $email->SMTPSecure = "tls";
        $email->Port ="587";
        $email->Username = "fabrica.hub.academy@gmail.com";
        $email->Password = "ciaiabsuzjimabht";

        $email->Subject = "Codigo Redefinicao Senac";
        $email->setFrom("fabrica.hub.academy@gmail.com");
        $email->addStringAttachment(file_get_contents("https://miro.medium.com/v2/resize:fit:1400/1*m0H6-tUbW6grMlezlb52yw.png"), "qr.jpg");
        
        $codigo = rand(100000, 999999);
        session_start();
        $_SESSION['cod_redef_senha'] = $codigo;
        $codigo = json_encode($codigo);

        $email->Body = 'O codigo e: '.$codigo;
        $email->addAddress($emailparam);
        
        
        if($email->Send())
        {
            $email->smtpClose();
            return true;
        }
        else
        {
            $email->smtpClose();
            return false;
        }
    } 
}