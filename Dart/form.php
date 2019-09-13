<?php
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$lastName = $_POST['lastName'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$firstName = htmlspecialchars($firstName);
$email = htmlspecialchars($email);
$lastName = htmlspecialchars($lastName);
$tel = htmlspecialchars($tel);
$message = htmlspecialchars($message);
$firstName = urldecode($firstName);
$email = urldecode($email);
$lastName = urldecode($lastName);
$tel = urldecode($tel);
$message = urldecode($message);
$firstName = trim($firstName);
$email = trim($email);
$lastName = trim($lastName);
$tel = trim($tel);
$message = trim($message);
//echo $firstName;
//echo $email;
//echo $lastName;
//echo $tel;
//echo $message;
$email = 'vieffytld@gmail.com';
$from = 'vieffytld@gmail.com';
$subject = 'Регистрация на сайте!';
$subject = "=?utf-8?b?".base64_encode($subject)."?=";
$headers = "Content-Type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "From: <".$from.">\r\n";
$headers .= "Reply-To: ".$from."\r\n";
$headers .= "Date: ". date('D, d M Y H:i:s O') ."\r\n";
$message = "email: ".$email."\r\n";
$message .= "firstName: ".$firstName."\r\n";
$message .= "lastName: ".$lastName."\r\n";
$message .= "tel: ".$tel."\r\n";

$result = mail($email,$subject,$message,$headers,'-f'.$from);

if ($result) {
// echo "сообщение успешно отправлено";
} else {
echo "при отправке сообщения возникли ошибки";
}
?>