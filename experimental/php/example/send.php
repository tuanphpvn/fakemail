<?php
    require_once(__DIR__.'/class.phpmailer.php');
    require_once(__DIR__.'/class.smtp.php');

    $mail = new PHPMailer();
    $mail->addAddress('test@foobar.org');
    $mail->addBCC('test2@foobar.org');
    $mail->addCC('test3@foobar.org');
    $mail->From = 'test@lastcraft.com';
    $mail->Body = 'Hi!';
    $mail->Subject = 'Hello';
    $mail->IsSmtp();
    $mail->Host = 'localhost';
    $mail->Port = 8025;
    if ($mail->Send())
    {
      print "Mail sent\n";
    } else
    {
      print "Sending mail failed : ".$mail->ErrorInfo."\n";
    }
?>