<?php
    include 'mail.php';
    //Receives data from the contact form
    
    
    $email = $_POST['email'];
    $subject = $_POST['subject']??"";
    $name = $_POST['name']??"";
    $mobile = $_POST['phone']??"";
    $content = $_POST['message']??"";
    
    $content = "New contact message\nName:$name\nSubject:$subject\nEmail:$email\nMobile:$mobile\n\n\n$content";
    $mail->send("info@sorwatom.com", "New contact message", "$content");
    
    header("location:/");
?>