<?php
    session_start();
    if(isset($_POST['submit'])){
        $username = strip_tags($_POST['username']);
        $phone_number = strip_tags($_POST['phone']);
        $email = strip_tags($_POST['email']);
        $message = strip_tags($_POST['message']);

        // to validate the inputs not emptys
        if(empty($username) || empty($phone_number) || empty($email) || empty($message)){
            $_SESSION['error_msg'] = 'you forgot to fill out the entier form';
            header("Location: ../pages/contactpage.php");
            exit();
        }


        $to = "hotel_name@mail.com";
        $subject = "New Contact Message";
        $body = "Name: $username\nPhone: $phone_number\nEmail: $email\nMessage:\n$message";
        if(mail($to, $subject, $body)){
            $_SESSION['done_msg'] = 'you message sent successfully ! thank you to contact us .';
        }
        else{
            $_SESSION['error_msg'] = 'Failed to send email.';
        }
        
    }