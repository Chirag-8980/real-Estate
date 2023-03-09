<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    function SendMail($email , $sub , $msg){
            $mail = new PHPMailer(true);
    
            $mail->isSMTP();
            $mail->Host ='smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'chiragkachhadiya000@gmail.com';
            $mail->Password = 'crgqqugelaglbosr';
            $mail->SMTPSecure = 'ssl';  
            $mail->Port = 465;
            
            $mail->setFrom('chiragkachhadiya000@gmail.com');
    
            $mail->addAddress($email);
    
            $mail->isHTML(true);
    
            $mail->Subject = $sub;
            $mail->Body = $msg;
    
            $mail->send();
    
            // echo
            // "<script>
            //     alert('send success')
            //     document.location.href = 'index.php';
            // </script>";
        }
        
?>