<?php

header("location: sc-st-grievance-feedbackform.html");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['form_name3'];
    $email = $_POST['form_email3'];
    $phone = $_POST['form_phone3'];
    $subject = $_POST['form_subject3'];
    $details = $_POST['form_message3'];
    
    $to = "director@pcimca.in";
    $subject = "SC/ST Grievance Redressal";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: \n$subject\nDetails: $details";
    
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Thank you! Your message has been sent.');</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong and we couldn't send your message.');</script>";
    }
}
?>