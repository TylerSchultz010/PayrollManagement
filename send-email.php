<?php
session_start();
if (!isset($_SESSION["username"])) {

    header("location:index.php");
}
include 'header.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if (isset($_POST["submit"])) {
    
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $name = $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '?????????????????';          //your gmail
    $mail->Password = '!!!!!!!!!!!!!!!!!';          //your gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('????????????????');

    $email = $_SESSION["email"];
    $mail->addAddress('tyler.schultz.010@gmail.com');
    $mail->AddCC($email);

    $mail->isHTML(true);

    $mail->Subject = 'Inquiry: ' . $subject;
    $mail->Body = nl2br('You have a message from ' . $name . ':<br />' . $message);

    $mail->send();
    
    echo "<div class='alert alert-success'>
  <strong>Success!</strong> Your query has been sent to the admin. Please check your email to await a response.
</div>";
}

else
{
    echo "<div class='alert alert-danger'>
  <strong>Error!</strong> There was an error processing your query. Please try again.
</div>";
}

echo "<div class='text-center pt-4 pb-4'>
    <a href = 'employee.php'>
    <button class='btn btn-outline-dark'>Return</button>
    </a>
    </div>";




