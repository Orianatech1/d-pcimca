<?php

    require('phpmailer/class.phpmailer.php');
    if(isset($_POST['form_email'])){
        $msg = "Name = $_POST[form_name] <br>  Mobile = $_POST[form_phone] <br> Email = $_POST[form_email] <br> State = $_POST[form_state] <br> City = $_POST[city]  <br> Course = $_POST[course] ";
    
    
        	
        $mail = new PHPMailer();
        
        $mail->IsSMTP();
        $mail->Host = "pcimca.in";
        
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->Username = "no-reply@pcimca.in";
        $mail->Password = "PuneCambridge@2023";
        
        $mail->From = "no-reply@pcimca.in";    /*From address required  */
        $mail->FromName = "PUNE CAMBRIDGE INSTITUTE OF MANAGEMENT AND COMPUTER APPLICATIONS";
        $mail->AddAddress("extramail.sprt@gmail.com");
        $mail->addBcc("extramail.sprt@gmail.com");
        $mail->IsHTML(true);
         
        $mail->Subject = "PUNE CAMBRIDGE INSTITUTE OF MANAGEMENT AND COMPUTER APPLICATIONS Enquiry on Website";
        
        
        $mail->msgHTML($msg);   
        //if(!$mail->Send())
              // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        // $headers .= 'From: <support@csagencyllc.com>' . "\r\n";
                        $headers .= 'From: <no-reply@pcimca.in>' . "\r\n";
                        // $result = ;
        if(!(mail('admission@pcimca.in',"PUNE CAMBRIDGE INSTITUTE OF MANAGEMENT AND COMPUTER APPLICATIONS Enquiry on Website",$msg,$headers)))
        {
        echo "Message could not be sent. <p>";
        echo "Mailer Error: " . $mail->ErrorInfo;
        exit;
        }else{
            echo '<script>alert("Thankyou!! We will get in touch with you")</script>';
            echo '<script>window.location.href="index.html"</script>';;
        }
    }
    
    
    ?>