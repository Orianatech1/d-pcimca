<?php

header("location: anti-ragging-feedback-form.html");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['form_name1'];
    $email = $_POST['form_email1'];
    $phone = $_POST['form_phone1'];
    $subject = $_POST['form_subject1'];
    $details = $_POST['form_message1'];
    
    $to = "director@pcimca.in";
    $subject = "Anti Ragging Feedback";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: \n$subject\nDetails: $details";
    
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Thank you! Your message has been sent.');</script>";
        
    } else {
        echo "<script>alert('Oops! Something went wrong and we couldn't send your message.');</script>";
    }
}
?>