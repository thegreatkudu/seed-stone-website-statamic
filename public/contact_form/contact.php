<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$response = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $usersubject = $_POST['usersubject'];
    $usermessage = $_POST['usermessage'];

    if (empty($username)) {
        $response['name_error'] = 'Name is required';
    } elseif (! preg_match('/^[a-zA-Z ]*$/', $username)) {
        $response['name_error'] = 'Only letters and white space allowed';
    }

    if (empty($useremail)) {
        $response['email_error'] = 'Email is required';
    } elseif (! filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
        $response['email_error'] = 'Invalid email format';
    }

    if (empty($usersubject)) {
        $response['subject_error'] = 'Subject is required';
    } elseif (strlen($usersubject) > 100) {
        $response['subject_error'] = 'Subject should not exceed 100 characters';
    }

    if (empty($usermessage)) {
        $response['message_error'] = 'Message is required';
    } elseif (strlen($usermessage) < 5 || strlen($usermessage) > 1000) {
        $response['message_error'] = 'Message should be between 10 and 1000 characters';
    }

    if (empty($response)) {
        $response['noError'] = 'No Error';
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'zuberytragez@gmail.com';
            $mail->Password = 'nkjsrogxyfilzbib';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('zuberytragez@gmail.com', 'Zubery');
            $mail->addAddress('zuberytragez@gmail.com', 'Zubery');
            $mail->Subject = 'Message Received From Contact: '.$username;

            $mail->isHTML(true);
            $mail->Body = '<div style="background-color: #f0efe9; padding: 10px 20px; font-family: Montserrat, sans-serif;"> <h3 style="color: #0d3c00; font-family: Playfair Display, serif;">Message Customer Details:</h3> <p><strong style="font-family: Abel, sans-serif; color: #011c01 !important;">Customer Name:</strong> '.$username.'</p> <p><strong style="font-family: Abel, sans-serif; color: #011c01 !important;">Email Address:</strong> '.$useremail.'</p> <p><strong style="font-family: Abel, sans-serif; color: #011c01 !important;">Subject:</strong> '.$usersubject.'</p> <p><strong style="font-family: Abel, sans-serif; color: #011c01 !important;">Message From Customer:</strong> '.$usermessage.'</p> </div>';

            $mail->send();

            $response['success'] = true;

        } catch (Exception $e) {
            $response['success'] = false;
        }
    }

    echo json_encode($response);
}
