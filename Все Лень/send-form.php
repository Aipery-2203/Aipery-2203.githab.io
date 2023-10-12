<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$number = htmlspecialchars($number);
$message = htmlspecialchars($message);

$fio = urldecode($fio);
$email = urldecode($email);
$number = urldecode($number);
$message = urldecode($message);

$fio = trim($fio);
$email = trim($email);
$number = trim($number);
$message = trim($message);


//echo $fio;
//echo "<br>";
//echo $email;
if (mail("s.aipery1324@gmail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: s.aipery1324@gmail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>