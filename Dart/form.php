<?php
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$lastName = $_POST['lastName']
$tel = $_POST['tel']
$message = $_POST['message']

$firstName = htmlspecialchars($firstName);
$email = htmlspecialchars($email);
$lastName = htmlspecialchars('lastName')
$tel = htmlspecialchars('tel')
$message = htmlspecialchars('message')

$firstName = urldecode($firstName);
$email = urldecode($email);
$lastName = urldecode('lastName')
$tel = urldecode('tel')
$message = urldecode('message')

$firstName = trim($firstName);
$email = trim($email);
$lastName = trim('lastName')
$tel = trim('tel')
$message = trim('message')

//echo $firstName;
//echo $email;
//echo $lastName;
//echo $tel;
//echo $message;

if (mail("seregadeatchman@yandex.ru", "Заявка с сайта", "Фамилия": ".$lastName."  "Имя:".$firstName.". E-mail: ".$email ,"From: https://vieffy.github.io/Dart/Dart.html \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}

ini_set('display_errors','On');
error_reporting('E_ALL');
?>