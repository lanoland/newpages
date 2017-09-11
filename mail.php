<?php

$recepient = "bocharikov.n@yandex.ru";
$siteName = "Ajax-форма";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$subject = trim($_POST["subject"]);
$message1 = trim($_POST["message1"]);
$message = "Имя: $name \nТелефон: $phone \nПочта: $email \nПредмет: $subject \nСообщение: $message1";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>