<?php

header("location: Grievance-feedback-form.html");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['form_name2'];
    $email = $_POST['form_email2'];
    $phone = $_POST['form_phone2'];
    $subject = $_POST['form_subject2'];
    $details = $_POST['form_message2'];
    
    $to = "director@pcimca.in";
    $subject = "Grievance Redressal";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: \n$subject\nDetails: $details";
    
    if (mail($to, $subject, $body)) {
        echo "<script>alert('Thank you! Your message has been sent.');</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong and we couldn't send your message.');</script>";
    }
}
?>