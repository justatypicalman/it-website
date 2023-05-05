<?php


    use PHPMailer\PHPMailer\PHPMailer;
    if(isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $subject = "Inquiry on Poultry Product";
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        
        $mail = new PHPMailer();
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = "joegarcia11.jg@gmail.com";
        $mail->Password = "09262355234";
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";
    
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("joegarcia11.jg@gmail.com"); // enter email address whom you want to send
        $mail->Subject = ("$email ($subject)");
        $mail->Body = $message;
        if ($mail->send()) {
            echo '<script>"Message successfully sent!")</script>';
        } else {
            echo '<script>"Something is wrong: <br><br>")</script>' . $mail->ErrorInfo;
        }
    }

