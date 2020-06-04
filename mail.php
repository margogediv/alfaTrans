<?php
header('Content-Type: application/json');

if (!$_POST || !isset($_POST["form"]) || !isset($_POST["check"]) || !isset($_POST["nik"]) || !isset($_POST["g-recaptcha-response"]) || !$_POST["g-recaptcha-response"]) {
    echo json_encode(false);
    exit;
}

$secretKey = "6LelA_kUAAAAAD9GHVnXPDFD-EvN3FJHn0rowjO6";
$ip = $_SERVER['REMOTE_ADDR'];
// post request to server
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($_POST["g-recaptcha-response"]);
$response = file_get_contents($url);
$responseKeys = json_decode($response,true);
// should return JSON with success as true
if(!$responseKeys["success"]) {
    echo json_encode(false);
    exit;
}

$name = htmlspecialchars($_POST["nik"]);
$mail = htmlspecialchars($_POST["mail"]);
$tel = htmlspecialchars($_POST["tel"]);
$subject = htmlspecialchars($_POST["theme"]);
$subject = $subject ? $subject : "Новое сообщение";
$message = htmlspecialchars($_POST["message"]);

$to = "info@sklad-at.ru";
$message = "<p>Сообщение с сайта АльфаТранс Безопасность:</p> <br>"
    . " <p><b>Имя: </b> $name </p>"
    . "<p><b>Тема: </b> $subject</p>"
    . "<p><b>Телефон: </b> $tel</p>"
    . "<p></br> <b>Email: </b> $mail </p>"
    . "<p><b>Сообщение: </b> $message</p>";

$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: От кого письмо <$mail>\r\n";
$headers .= "Reply-To: boner.by\r\n";

$mail_status = mail($to, $subject, $message, $headers);

if ($mail_status)
    echo json_encode($mail_status);
else
    echo json_encode($mail_status);