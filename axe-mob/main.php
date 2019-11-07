<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
    require 'config.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $findus = $_POST['findus'];
        $message = $_POST['message'];
    }

    $mail = new PHPMailer(true);
    if(isset($username) && isset($email) && isset($phone) )
    {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'hieu.nikon2711@gmail.com';                     // SMTP username
        $mail->Password   = 'mrawmgomhxxowyji';                               // SMTP password
    //        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('from@example.com', 'Axe|Mob');
    //        $mail->addAddress();     // Add a recipient
        // Name is optional

            $mail->addCC(' hello@axe-mob.com');
            $mail->addBCC('kevin.nguyen@adamodigital.com');
//        $mail->addCC(' dvnit04@gmail.com');
//        $mail->addBCC('nhat.do@adamodigital.com');

        // Attachments
    //        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = ' Thank you '. $username .' for contacting Axe Mob';
        $mail->Body    = '<p>Hello '.$username.'</p>
        <p>We have received your message and would like to thank you for writing to us. If you ever have any questions that require immediate assistance, please call us at (+1) 408 348 5401. Otherwise, we will reply by email as soon as possible.</p>
        <p></p>
        <p>Talk to you soon,</p>
        <h5>Axe Mob Team</h5>
        <p>-----------------------</p>
        <p><strong>Your message in below:</strong></p>
        <p>Full name: '.$username.'</p><p>Email: '.$email.'</p><p>Phone: '.$phone.'</p><p>How did you find us? : '.$findus.'</p><p>Message: '.$message.'</p>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        //Thank you for submitting your registration information
        if (!$mail->send()) {
            $error = "Lỗi: " . $mail->ErrorInfo;
            echo '<p>'.$error.'</p>';
        }
    }

?>
<!---->
