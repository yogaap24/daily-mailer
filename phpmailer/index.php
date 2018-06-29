<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mx1.hostinger.co.id';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'inul@riyansatria.tk';                 // SMTP username
    $mail->Password = 'yakins';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('inul@riyansatria.tk', 'Test');
    $mail->addAddress('yprasetio531@gmail.com', 'Riyan');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    //
    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en" dir="ltr">
      <table width="100%" align=center>
          <tbody>
              <td><!-- BEGIN MAIN CONTENT -->
                <table style="margin: auto;
                width: 700px;
                align: center;">
          <tbody>
            <td class="content" width="100%">
              <table style="border: #d2d2d2 1px solid;
              margin: auto;
              border-radius: 5px;
              -webkit-border-radius: 5px;
              -moz-border-radius: 5px;" width="100%" align=left>
          <tbody>
        <tr>
          <td style="border-top-left-radius: 5px;
          border-top-right-radius: 5px;
          -webkit-border-top-left-radius: 5px;
          -webkit-border-top-right-radius: 5px;
          -moz-border-radius-topleft: 5px;
          -moz-border-radius-topright: 5px;
          height: 21px;
          width: 100%;">
          </td>
        </tr>
    <tr>
        <td style="padding: 0 19px 0 21px;" align=right>
            <table width="100%">
          <tbody>
    <tr>
          <td align=right>
            <div class="logo" style="background-color: #cb0023; height: 90px;">
              <img src="http://berkas.riyansatria.tk/uploadan/logo.png" style="margin-right: 5%;">
            </div>
            </td>
          </tr>
        </tbody>
      </table>
    </td>
    </tr>
    <tr>
          <td height=12 width="100%">
        </td>
    </tr>
    <tr>
        <td style="padding: 0 45px 0 45px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        -webkit-border-bottom-right-radius: 5px;
        -webkit-border-bottom-left-radius: 5px;
        -moz-border-radius-bottomright: 5px;
        -moz-border-radius-bottomleft: 5px"><!-- Nested padding for body -->
            <table>
        <tbody>
    <tr>
        <td bgColor=#ffffff>
            <table cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
        <tbody>
    <tr>
        <td style="font-size: 26px;
        font-family: Helvetica Neue, Helvetica, Arial, Verdana, sans-serif;
        font-weight: bold;
        color: #292929;
        padding-bottom: 20px;
        line-height: 1.2em;" width=600 align=center>Verifikasi email</td>
          </tr>
        </tbody>
      </table>
    </td>
    </tr>
    <tr>
          <td style="border-bottom-left-radius: 5px;
          border-bottom-right-radius: 5px;
          -webkit-border-bottom-right-radius: 5px;
          -webkit-border-bottom-left-radius: 5px;
          -moz-border-radius-bottomright: 5px;
          -moz-border-radius-bottomleft: 5px;
          background-color: #fff;">
            <table width="100%" align=center>
          <tbody>
    <tr>
          <td width="100%">
            <table width="100%">
          <tbody>
    <tr>
          <td style="font-size: 18px;
          font-family: Helvetica Neue, Helvetica, Arial, Verdana, sans-serif;
          padding-top: 4px;
          line-height: 1.6em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </td>
    </tr>
          <td style="font-size: 18px;
          font-family: Helvetica Neue, Helvetica, Arial, Verdana, sans-serif;
          padding-top: 4px;
          line-height: 1.6em;">
      <a style="border: #cb0023 12px solid;
      border-radius: 5px;
      height: 28px;
      background: #cb0023;
      color: #fff;
      padding-left: 20px;
      padding-right: 20px;
      line-height: 28px;
      display: inline-block;
      text-decoration: none;" href="#">Verifikasi</A>
      </td>
    </tr>
    </html>
';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
