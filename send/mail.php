<?php
// Файлы phpmailer
require 'class.phpmailer.php';
require 'class.smtp.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['comment'];
// Настройки
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'maletich.pavel';
$mail->Password = 'zver2015';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('maletich.pavel@yandex.ru');
$mail->addAddress('maletich.p.i.1.16@gmail.com');

// Письмо
$mail->isHTML(true);
$mail->Subject = "Заголовок"; // Заголовок письма
$mail->Body    = "Имя $name . Почта $email . Тема $subject . Текст $message" ; // Текст письма

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}
?>
