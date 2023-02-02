<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {

    echo "
    
    


    ";


    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
//            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'thinurase@gmail.com';                     //SMTP username
        $mail->Password = 'scajfwgusmxxjznr';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('thinuradinujaya26@gmail.com', $_POST['name']);
        $mail->addAddress('thinuradinujaya26@gmail.com', 'Joe User');     //Add a recipient
        $mail->addAddress('thinuradinujaya26@gmail.com');               //Name is optional
        $mail->addReplyTo('thinuradinujaya26@gmail.com', 'Information');
        //    $mail->addCC('cc@example.com');
        //    $mail->addBCC('bcc@example.com');

        //Attachments
        //    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['body'];
        $mail->addCustomHeader('MIME-Version: 1.0');
        $mail->addCustomHeader('From: Your name <' . $_POST["email"] . '>');
        $mail->addCustomHeader('Content-Type: text/html; charset=ISO-8859-1');
        //    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '<script>$(".loader-div").hide();</script>';
        header("Location: index.php?message=success#contact");
    } catch (Exception $e) {
        header("Location: index.php?message=failed#contact");
        echo '<script>$(".loader-div").hide();</script>';

    }
}

?>