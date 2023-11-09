<?php

session_start();

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require_once('admin/db_connect.php');


$name = trim(htmlentities($_POST['name']));
$email = trim(htmlentities(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)));
$subject = trim(htmlentities($_POST['subject']));
$message = trim(htmlentities($_POST['message']));

$errors = true;
if (empty($name)) {
    $_SESSION['name_error'] = "Name required!";
    $errors = false;
} elseif (strlen($name) < 4 || strlen($name) > 30) {
    $_SESSION['name_error'] = "Name character must be greater then 4 and less then 30!";
    $errors = false;
}

// email error
if (empty($email)) {
    $_SESSION['email_error'] = "Required email!";
    $errors = false;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_error'] = "Required valid email!";
    $errors = false;
}

if (empty($subject)) {
    $_SESSION['subject_error'] = "Subject required!";
    $errors = false;
}

if (empty($message)) {
    $_SESSION['message_error'] = "Message Required!";
    $errors = false;
}

if ($errors) {
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.mailtrap.io';
    $mail->SMTPAuth   = true;
    $mail->Username   = "cffc1f4f96497d";
    $mail->Password   = "e7b92cf4314a1d";
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress("rashedsadat27@gmail.com", 'MODERNA');     //Add a recipient

    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $message;

    if ($mail->send()) {
        $query = mysqli_query($con, "insert into contact_us(name, email, subject, message) values('$name', '$email', '$subject', '$message')");
        if ($query) {
            $message = [
                'message_type' => "success",
                'message' => "Your message has been sent. Thank you!"
            ];
            $_SESSION['success'] = $message;
            header('location: contact.php');
        }
    } else {
        $message = [
            'message_type' => "error",
            'message' => "Message sent failed!"
        ];
        $_SESSION['success'] = $message;
        header('location: contact.php');
    }
} else {
    header('location: contact.php');
}
