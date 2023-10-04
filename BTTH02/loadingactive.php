<?php
$user = $_GET['user'];
$email = $_GET['mail'];
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';
// Tạo một đối tượng PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

// Cấu hình thông tin email
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';  // Địa chỉ SMTP của Gmail
    $mail->SMTPAuth = true;         // Sử dụng xác thực SMTP
    $mail->Username = 'testmailphpnqt@gmail.com'; // Tên người dùng SMTP
    $mail->Password = 'mvnj lyph hjzl pdsl'; // Mật khẩu SMTP
    $mail->SMTPSecure = 'tls';      // Sử dụng TLS để bảo mật kết nối
    $mail->Port = 587;                                            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('testmailphpnqt@gmail.com', 'NQT');
    $mail->addAddress($email,  $user);     //Add a recipient     //Name is optional


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test mail';
    $mail->Body    = 'Link đây <a href="nqt.lovestoblog.com">Truy cập trang web</a>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>