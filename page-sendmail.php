<?php
if (isset($_POST['email'])) {
    
    $from           = trim($_POST['email']);
    $nombre 		= utf8_decode($_POST['nombre']);
    $email 			= utf8_decode($_POST['email']);
    $telefono 		= utf8_decode($_POST['telefono']);
    $ciudad 		= utf8_decode($_POST['ciudad']);
    $estado 		= utf8_decode($_POST['estado']);
    $comentarios 	= utf8_decode($_POST['comentarios']);

    require_once('./PHPMailer/class.phpmailer.php');

    //PHPMailer Object
    $mail = new PHPMailer(true);
    $mail->From = $email;
    $mail->FromName = $nombre;
    $mail->addAddress('contacto@codimuba.com', 'CODIMUBA');
    // $mail->addAddress('frkalderon@gmail.com', 'CODIMUBA');
    $mail->addReplyTo("contacto@codimuba.com", "Reply");
    $mail->addBCC("frkalderon@gmail.com");
    $mail->isHTML(true);
    $mail->Subject = "Contacto Web CODIMUBA ";
    $mail->Body = "<p>". $nombre ." escribió: </p>";
    $mail->Body.= "<p>Nombre<b>: </b>". $nombre ."</p>";
    $mail->Body.= "<p>Email<b>: </b>". $email ."</p>";
    $mail->Body.= "<p>Telefono<b>: </b>". $telefono ."</p>";
    $mail->Body.= "<p>Ciudad<b>: </b>". $ciudad ."</p>";
    $mail->Body.= "<p>Estado<b>: </b>". $estado ."</p>";
    $mail->Body.= "<p><b>Comentarios: </b>". $comentarios ."</p>";
    $mail->AltBody = "This is the plain text version of the email content";

    if(!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; }
    else {echo "Message has been sent successfully"; }

}