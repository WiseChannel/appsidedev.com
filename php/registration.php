<?php

$to = "cto@appsidedev.com"; 
$tema = "Форма обратной связи на PHP"; 
$message = "Ваше имя: ".$_POST['name']."<br>";
$message .= "E-mail: ".$_POST['email']."<br>";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

mail($to, $tema, $message, $headers); 
?>